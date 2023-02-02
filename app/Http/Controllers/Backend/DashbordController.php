<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Filier;
use App\Models\Formateur;
use App\Models\Stagaire;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashbordController extends Controller
{
    public function index(){
        $data['stagaire_count'] = Stagaire::count();
        $data['blog_count'] = Blog::count();
        $data['formateur_count'] = Formateur::count(); 
        $data['filier_count'] = Filier::count(); 
        $data['stagaire_count'] = Stagaire::count();
        return view('Back.Admin.dashbord')->with($data);
        
    }
    public function chartStagaire(){
        $entries = Stagaire::select([
            DB::raw('YEAR(created_at) as year'),
            DB::raw('COUNT(*) as count'),
            
        ])
        ->groupBy('Year')
        ->get();

        $year = ['2022' , '2021' ,'2020','2019','2018'];

            $count= [];

         
            foreach ($entries as $entry) {
              $count[]= $entry->count;
            }

        return [
            'labels' => array_values($year),
          
                'data'  => array_values($count),
              
        ];
    }
}
