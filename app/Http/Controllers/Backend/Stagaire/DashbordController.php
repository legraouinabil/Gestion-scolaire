<?php

namespace App\Http\Controllers\Backend\Stagaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function view(){
        $data['stagaire'] = Auth::guard('stagaire')->user();
     
        return view('Back.Stagaire.home')->with($data);
    }
}
