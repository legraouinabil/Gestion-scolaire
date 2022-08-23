<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filier;
use App\Models\Formation;
use Illuminate\Support\Facades\Validator;

class FilierController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view(){
        return view("Back.filier.index");
    }


    public function index()
    {
      
        $data['filier']= Filier::orderBy('id' , 'desc')->get();
        $data['formation']= Formation::select('id' , 'name')->orderBy('id' , 'desc')->get();

        foreach($data['filier'] as $f){
        
            $f->setAttribute('formation', $f->formation);
        }
        return response()->json($data);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'small_description' => 'required',
            'dureé' => 'required',
            'formation_id' => 'bail|required|exists:formations,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
        $imageName = NULL;
        if ($image = $request->file('image')) {
            $destinationPath = 'img/filier';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
    
        Filier::create($input);
    
        return response()->json(['success'=> 'Post created successfully']);
    
       }

    public function destroy($id){
        $filier = filier::findOrFail($id);
        $filier->delete();
    }

   

    public function update(Request $request , $id){
        $f = Filier::find($id);
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'small_description' => 'required',
        'dureé' => 'required',
        'formation_id' => 'bail|required|exists:formations,id',
      
    ]);

    $input = $request->all();
    $imageName = NULL;
    if ($image = $request->file('file')) {
        $destinationPath = 'img/filier/';
        $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;
        unlink('img/filier/'.$f->image);
    }
    
    $f->update($input);

    return response()->json(['success'=> 'Post update successfully']);
    
        }
}
