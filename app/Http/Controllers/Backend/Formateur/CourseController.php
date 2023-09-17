<?php

namespace App\Http\Controllers\Backend\Formateur;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
  

    public function index()
    {
        $data['formateur'] = auth::guard('formateur')->user();
        $data['courses'] = Course::where('formateur_id' , $data['formateur']->id  )->orderBy('id' , 'desc')->get();
      
       
     
        return view('Back.Formateur.course.index')->with($data);
      
    }


    public function create()
    {
        $data['formateur'] = auth::guard('formateur')->user();
        $data['groupes'] = Group::select('id' , 'name')
        ->where('filier_id' ,  $data['formateur']->filier_id)
        ->get();
     //  dd($data['groupes']);
        return view('Back.Formateur.course.create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'file' => 'required|mimes:video/avi,video/mpeg,video/quicktime,csv,txt,xlx,xls,pdf|max:200000',
    ]);

    $course=$request->all();
    $imageName = NULL;
    if ($image = $request->file('image')) {
        $destinationPath = 'imgf/course';
        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $course['image'] = $imageName;
    }
    $vedioName = NULL;
    if ($vedio = $request->file('file')) {
        $destinationPath = 'imgf/course';
        $vedioName = date('YmdHis') . "." . $vedio->getClientOriginalExtension();
        $vedio->move($destinationPath, $vedioName);
        $course['file'] = $vedioName;
    }
    Course::create($course);
   
    return redirect()->route('back.formateur.course')->with('success', 'coursses added!');
    }

    public function show($id)
    {
        $data['c'] = Course::findOrFail($id);
        return view('Back.Formateur.course.edit')->with($data);
    }


    public function destroy($id){
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('success', 'course deleted  successfuly!');
    }

}
