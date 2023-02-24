<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormSubmitted;
use App\Models\Blog;
use App\Models\Filier;
use App\Models\Formateur;
use App\Models\Formation;
use App\Models\Setting;
use App\Models\Stagaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\ViewException;

class SiteController extends Controller
{
    public function index()
    {

        $data['formations']   = Formation::orderBy('id', 'desc')->take(4)->get();
        $data['filiers']   = Filier::orderBy('id', 'desc')->take(4)->get();
        $data['formateurs']   = Formateur::orderBy('id', 'desc')->take(4)->get();
        $data['blogs']   = Blog::orderBy('id', 'desc')->take(3)->get();


        $data['filier_count'] = Filier::count();
        $data['formateur_count'] = Formateur::count();
        $data['stagaire_count'] = Stagaire::count();


        return view('Front.index')->with($data);
    }

    public function formation($id)
    {

        $data['formation'] = Formation::findOrFail($id);
        $data['filiers'] = Filier::where('formation_id', $id)->get();

        return view('Front.filier')->with($data);
    }

    public function showFilier($id, $f_id)
    {

        $form = Formation::findOrFail($id);


        $data['filier'] = Filier::where('id', $f_id)
            ->where('formation_id', $form->id)
            ->first();

            if($data['filier']  == null){
               return redirect('/notfound');
             }
      
             return view('Front.filierDetail')->with($data);

       
    }


    public function blogdetail($id){
        $data['blog'] = Blog::findOrFail($id);
        return view('Front.blogDetail')->with($data);
    }

    public function blog(){
        $data['blogs']  = Blog::select('id' , 'title'  , 'description' , 'image')->orderBy('id' , 'desc')->get();


        return view('Front.blog')->with($data);
    }


    public function cantact(){
      $data['cantact'] =Setting::first();
        return view('Front.cantact')->with($data);
    }

    public function send(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        'subject' => 'required',
    ]);

    // Send the email
    Mail::to('abdo.papiyo@gmail.com')->send(new ContactFormSubmitted($request->all()));

    // Redirect back with a success message
    return back()->with('success', 'Thank you for contacting us!');
}


   

  
}
