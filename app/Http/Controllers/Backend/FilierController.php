<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filier;

class FilierController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view(){
        return view("Back.filier.index");
    }


    public function index()
    {
      
        $data= Filier::orderBy('id' , 'desc')->get();
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

    $filier = Filier::create([
        'name'=>$request->name,
        'description'=>$request->description,
       

    ]);
    return response()->json(['status' => 'succes' , 'data' =>$filier]);
    }

    public function destroy($id){
        $filier = filier::findOrFail($id);
        $filier->delete();
    }

    public function update(Request $request , $f_id){
        
        $validator = Validator::make($request->all(),[
            'name'=>'string|required',
            'description'=>'string|required',
           
           
        ]);
      if($validator->fails()) {
          return response()->json(['status'=>'error' , 'errors'=>$validator->errors()]);
      }
      $filier  =  Filier::findOrFail($f_id);
       
            $filier->name=$request->name;
            $filier->description=$request->description;
            $filier->save();
           
    
       
        return response()->json(['status' => 'succes' , 'data' =>$filier]);
        }
}
