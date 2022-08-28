<?php

namespace App\Http\Controllers\Backend\Stagaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function view(){
        return view('Back.Stagaire.dashbord');
    }
}
