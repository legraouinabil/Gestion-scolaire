<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function view(){
       return view("Back.blog.index");
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

   public function update(Request $request , $f_id){
       
       $validator = Validator::make($request->all(),[
           'name'=>'string|required',
           'description'=>'string|required',
          
          
       ]);
     if($validator->fails()) {
         return response()->json(['status'=>'error' , 'errors'=>$validator->errors()]);
     }
     $blog  =  Blog::findOrFail($f_id);
      
           $blog->name=$request->name;
           $blog->description=$request->description;
           $blog->save();
          
   
      
       return response()->json(['status' => 'succes' , 'data' =>$blog]);
       }
}

