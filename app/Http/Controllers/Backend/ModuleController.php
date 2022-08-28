<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Filier;
use App\Models\Formation;
use App\Models\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ModuleController extends Controller
{
 
    public function view(){
        return view("Back.Admin.Modul.index");
    }


    public function index()
    {
      
        $data["modul"]= Modul::orderBy('id' , 'desc')->get();
        $data["formation"]= Formation::orderBy('id' , 'desc')->get();
        return response()->json($data);
    }
    public function droopDownfilier($id){
        $data["filiers"] = Filier::select('id' , 'name')->where('formation_id' ,  $id)->get();
        return response()->json($data);

    }
    public function store(Request $request){
        
    $validator = Validator::make($request->all(),[
        'name'=>'string|required',
        'description'=>'string|required',
        'nbHours'=>'required',
        'cofession'=>'required',
        'filier_id'=>'bail|required|exists:filiers,id',
       
       
    ]);
  if($validator->fails()) {
      return response()->json(['status'=>'error' , 'errors'=>$validator->errors()]);
  }

    $Modul = Modul::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'nbHours'=>$request->nbHours,
        'cofession'=>$request->cofession,
        'filier_id'=>$request->filier_id,

    ]);
    return response()->json(['status' => 'succes' , 'data' =>$Modul]);
    }

    public function destroy($id){
        $Modul = Modul::findOrFail($id);
        $Modul->delete();
    }

    public function update(Request $request , $f_id){
        
        $validator = Validator::make($request->all(),[
            'name'=>'string|required',
            'description'=>'string|required',
            'nbHours'=>'required',
            'cofession'=>'required',
            'filier_id'=>'bail|required|exists:filiers,id',
           
        ]);
      if($validator->fails()) {
          return response()->json(['status'=>'error' , 'errors'=>$validator->errors()]);
      }
      $Modul  =  Modul::findOrFail($f_id);
       
            $Modul->name=$request->name;
            $Modul->description=$request->description;
            $Modul->nbHours=$request->nbHours;
            $Modul->cofession=$request->cofession;
            $Modul->filier_id=$request->filier_id;
            $Modul->save();
           
    
       
        return response()->json(['status' => 'succes' , 'data' =>$Modul]);
        }
}
