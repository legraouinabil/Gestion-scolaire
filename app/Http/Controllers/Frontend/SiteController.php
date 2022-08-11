<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Filier;
use App\Models\Formateur;
use App\Models\Formation;
use App\Models\Stagaire;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        
        $data['formations']   = Formation::orderBy('id' , 'desc')->take(4)->get();
        $data['filiers']   = Filier::orderBy('id' , 'desc')->take(4)->get();
        $data['formateurs']   = Formateur::orderBy('id' , 'desc')->take(4)->get();
        $data['blogs']   = Blog::orderBy('id' , 'desc')->take(3)->get();


        $data['filier_count'] = Filier::count();
        $data['formateur_count'] = Formateur::count();
        $data['stagaire_count'] = Stagaire::count();


        return view('Front.index')->with($data);

    }

    public function formation($id){

        $data['formation'] = Formation::findOrFail($id);
        $data['filiers'] = Filier::where('formation_id' , $id)->get();
        
        return view('Front.filier')->with($data);
    }
}
