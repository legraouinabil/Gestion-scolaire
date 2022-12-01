<?php

namespace App\Http\Controllers\Backend\Stagaire;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
     $data['courses'] = Course::select('title' , 'description', 'file' )->take(10)->get();
     return view('Back.Stagaire.course')->with($data);
    }
}
