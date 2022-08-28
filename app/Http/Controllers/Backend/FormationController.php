<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Formation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view(){
        return view("Back.Admin.formation.index");
    }


    public function index()
    {
      
        $data= Formation::orderBy('id' , 'desc')->get();
        return response()->json($data);
    }

    public function store(Request $request){
        
    $validator = Validator::make($request->all(),[
        'name'=>'string|required',
        'description'=>'string|required',
       
       
    ]);
  if($validator->fails()) {
      return response()->json(['status'=>'error' , 'errors'=>$validator->errors()]);
  }

    $formation = Formation::create([
        'name'=>$request->name,
        'description'=>$request->description,
       

    ]);
    return response()->json(['status' => 'succes' , 'data' =>$formation]);
    }

    public function destroy($id){
        $formation = Formation::findOrFail($id);
        $formation->delete();
    }

    public function update(Request $request , $f_id){
        
        $validator = Validator::make($request->all(),[
            'name'=>'string|required',
            'description'=>'string|required',
           
           
        ]);
      if($validator->fails()) {
          return response()->json(['status'=>'error' , 'errors'=>$validator->errors()]);
      }
      $formation  =  Formation::findOrFail($f_id);
       
            $formation->name=$request->name;
            $formation->description=$request->description;
            $formation->save();
           
    
       
        return response()->json(['status' => 'succes' , 'data' =>$formation]);
        }
}


