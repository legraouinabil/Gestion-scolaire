<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Filier;
use App\Models\Formation;
use App\Models\Stagaire;
use Illuminate\Http\Request;

class StagaireController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view(){
        return view("Back.Admin.stagaire.index");
    }


    public function index()
    {
      
        $data['stagaire']= Stagaire::orderBy('id' , 'desc')->get();

        $data['formation']= Formation::orderBy('id' , 'desc')->get();
       
      

        foreach($data['stagaire'] as $f){
        
            $f->setAttribute('filier', $f->filier);
        }
        return response()->json($data);
    }

    public function droopDownfilier($id){
        $data["filiers"] = Filier::select('id' , 'name')->where('formation_id' ,  $id)->get();
        return response()->json($data);

    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'filier_id' => 'bail|required|exists:filiers,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
           
        ]);
    
        $input = $request->all();
        $imageName = NULL;
        if ($image = $request->file('image')) {
            $destinationPath = 'img/stagaire';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
    
        Stagaire::create($input);
    
        return response()->json(['success'=> 'stagaire created successfully']);
    
       }

    public function destroy($id){
        $stagaire = Stagaire::findOrFail($id);
        $stagaire->delete();
    }

   

    public function update(Request $request , $id){
        $f = Stagaire::find($id);
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
        $destinationPath = 'img/stagaire/';
        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;
        unlink('img/stagaire/'.$f->image);
    }
    
    $f->update($input);

    return response()->json(['success'=> 'Post update successfully']);
    
        }
}
