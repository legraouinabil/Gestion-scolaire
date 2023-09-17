<?php

namespace App\Http\Controllers\Backend\Formateur;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Modul;
use App\Models\Stagaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
   public function index()
   {
      $formateur = auth::guard('formateur')->user();
      $data['groups'] = Group::where('filier_id', 'like', $formateur->filier_id)->get();
      return view('Back.Formateur.note.index')->with($data);
   }

   public function create($id)
   {
      $group = Group::findOrFail($id);
      $data['stagaires'] = Stagaire::where('group_id', 'like', $group->id)->get();
      $data['moduls'] = Modul::where('filier_id', 'like', $group->filier_id)->get();
      return view('Back.Formateur.note.create')->with($data);
   }

   public function addNote(Request $request, $sid){
     
      $data['stagaire'] =  Stagaire::findOrFail($sid);
   
    
     $data['stagaire']->moduls()->attach( $data['stagaire']->id,['note1' =>$request->note1]);
     return 'success';

     }
}
