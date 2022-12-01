<?php

namespace App\Http\Controllers\Backend\Formateur;

use App\Http\Controllers\Controller;
use App\Models\Devoire;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class DevoirController extends Controller
{
    public function index(){
        $data['formateur'] = auth::guard('formateur')->user();
        $data['devoires'] = Devoire::where('formateur_id' , $data['formateur']->id  )->get();
        $data['groupes'] = Group::select('id' , 'name')
        ->where('filier_id' ,  $data['formateur']->filier_id)
        ->get();
     //  dd($data['groupes']);
        return view('Back.Formateur.devoire.index')->with($data);
    }

    public function show($id){
        $data['devoire']= Devoire::findOrFail($id);
      
        
        return view('Back.Formateur.devoire.devoireDetail')->with($data);
    }
    public function store(Request $request){


        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'group_id' => 'bail|required|exists:groups,id',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|mimes:video/avi,video/mpeg,video/quicktime,csv,txt,xlx,xls,pdf|max:2048'
        
           
        ]);
    
        $input = $request->all();

     // dd( $request->all());
        $imageName = NULL;
        if ($image = $request->file('image')) {
            $destinationPath = 'img/devoire';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
        $fileName =Null;
        if ($file = $request->file('file')) {
            $destinationPath = 'img/file';
            $fileName = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName);
            $input['file'] = $fileName;
        }
        
        $input['formateur_id'] =  auth::guard('formateur')->id();


       
        Devoire::create($input);


        return back()->with('message' ,'devoire created succefuly');
      
        
       
    }

    public function delete($id){
        $devoire = Devoire::findOrFail($id);
        $devoire->delete();
        return back()->with('message'  ,'devoire deleted!!');
    }
}
