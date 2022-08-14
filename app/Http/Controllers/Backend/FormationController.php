<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Back.formation.index');
    }

    public function getFormation(){

        $data['formations'] = Formation::orderBy('id' , 'desc')->get();
        return response()->json($data);
        
    }

}
