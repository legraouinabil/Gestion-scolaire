<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Contracts\Validation\Validator;

class BlogController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function view(){
       return view("Back.Admin.blog.index");
   }


   public function index()
   {
     
       $data= Blog::orderBy('id' , 'desc')->get();
       return response()->json($data);
   }

   public function store(Request $request){
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $input = $request->all();
    $imageName = NULL;
    if ($image = $request->file('image')) {
        $destinationPath = 'img/blog';
        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;
    }

    Blog::create($input);

    return response()->json(['success'=> 'Post created successfully']);

   }

   public function destroy($id){
       $blog = Blog::findOrFail($id);
       $blog->delete();
   }

   public function update(Request $request , $id){
    $blog = Blog::find($id);
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable'
    ]);

    $input = $request->all();
    $imageName = NULL;
    if ($image = $request->file('image')) {
        $destinationPath = 'img/blog/';
        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;
        unlink('img/blog/'.$blog->image);
    }
    
    $blog->update($input);

    return response()->json(['success'=> 'blog update successfully']);
    
}}

