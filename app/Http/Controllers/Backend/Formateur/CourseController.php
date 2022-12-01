<?php

namespace App\Http\Controllers\Backend\Formateur;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
  

    public function index()
    {
        $data['formateur'] = auth::guard('formateur')->user();
        $data['courses'] = Course::where('formateur_id' , $data['formateur']->id  )->get();

        return view('Back.Formateur.course.index')->with($data);
      
    }


    public function create()
    {
        return view('Back.Formateur.course.create');
    }

    public function show($id)
    {
        $data['course'] = Course::findOrFail($id);
        return view('Back.Formateur.course.create')->with($data);
    }

}
