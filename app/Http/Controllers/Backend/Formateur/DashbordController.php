<?php

namespace App\Http\Controllers\Backend\Formateur;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Filier;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function view(){
        $data['formateur'] = auth::guard('formateur')->user();

        
     $filier =  Filier::where('id' ,$data['formateur']->filier_id)->first();
  $data['groupes']  = Group::where('filier_id' ,$filier->id)->get();
  $data['courses']  = Course::where('formateur_id' ,  $data['formateur']->id)
  ->orderBy('id' , 'desc')
  ->take(4)->get();



 

  

 // dd( $filier);
      
        return view('Back.Formateur.dashbord')->with($data , $filier);
    }
}
