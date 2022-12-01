<?php

namespace App\Http\Controllers\Backend\Stagaire;

use App\Http\Controllers\Controller;
use App\Models\Devoire;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevoirController extends Controller
{
    public function index(){
        $data['stagaire'] = Auth::guard('stagaire')->user();
     
        $data['devoires'] = Devoire::select( 'id', 'title' , 'description', 'image' , 'created_at' )
        ->where( 'group_id' ,  $data['stagaire']->group_id)
        ->get();
   //  dd( $data['devoires']);
        return view('Back.Stagaire.devoire')->with($data);
       }

       public function show($id){
        $data['stagaire'] = Auth::guard('stagaire')->user();
     
        $data['devoire'] = Devoire::findOrFail($id);
       
  
        return view('Back.Stagaire.devoireShow')->with($data);
       }


       public function reponseDevoire(Request $request,$id){
        $data['devoire'] = Devoire::findOrFail($id);
        $data['stagaire'] = Auth::guard('stagaire')->user();
     
      
       $data['devoire'] ->stagaires()->attach( $data['stagaire']->id,['file_reponse' =>$request->file_reponse]);
       return 'success';

       }
       
   }

