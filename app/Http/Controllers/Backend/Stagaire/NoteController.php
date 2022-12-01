<?php

namespace App\Http\Controllers\Backend\Stagaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        $data['courses'] = Course::select('title' , 'description', 'file' )->take(10)->get();
        return view('Back.Stagaire.note')->with($data);
       }
   }

