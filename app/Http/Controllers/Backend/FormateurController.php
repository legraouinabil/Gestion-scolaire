<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Filier;
use App\Models\Formateur;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view(){
        return view("Back.Admin.formateur.index");
    }


    public function index()
    {
      
        $data['formateur']= Formateur::orderBy('id' , 'desc')->get();

        $data['formation']= Formation::orderBy('id' , 'desc')->get();
       
      

        foreach($data['formateur'] as $f){
        
            $f->setAttribute('filier', $f->filier);
        }
        return response()->json($data);
    }

    public function droopDownfilier($id){
        $data["filiers"] = Filier::select('id' , 'name')->where('formation_id' ,  $id)->get();
        return response()->json($data);

    }

    public function store(Request $request){
        $validator =  Validator::make($request->all(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'filier_id' => 'bail|required|exists:filiers,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
           
        ]);
        if($validator->fails()) {
            return response()->json(['status'=>'error' , 'errors'=>$validator->errors()]);
        }
        $input = $request->all();
        $imageName = NULL;
        if ($image = $request->file('image')) {
            $destinationPath = 'img/Formateur';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
    
        Formateur::create($input);
    
        return response()->json(['success'=> 'formateur created successfully']);
    
       }

    public function destroy($id){
        $Formateur = Formateur::findOrFail($id);
        $Formateur->delete();
    }

   

    public function update(Request $request , $id){
        $f = Formateur::find($id);
    $request->validate([
        'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'filier_id' => 'bail|required|exists:filiers,id',
      
    ]);

    $input = $request->all();
    $imageName = NULL;
    if ($image = $request->file('file')) {
        $destinationPath = 'img/Formateur/';
        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;
        unlink('img/Formateur/'.$f->image);
    }
    
    $f->update($input);

    return response()->json(['success'=> 'Post update successfully']);
    
        }
}
