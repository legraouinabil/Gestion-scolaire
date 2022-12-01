@extends('Back.Formateur.layouts.master')


@section('content')
    


<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Groupes</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                       
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                 
                  <ul class="align-items-center  list-inline p-0 m-0 ">

                     @forelse ($groupes as $g)
                     <div class="col-md-4 iq-user inline">
                        <img class="avatar-70 rounded-circle" src="images/user/04.jpg" alt="">
                     </div>
                     <li class="col-md-12">
                       
                        <h5 class="mb-0 "> {{$g->name}} </h5>
                        <p class="text-primary mb-0"> {{$g->anneé}}</p>
                     </li>
                     @empty
                     <p class="text-primary mb-0">aucun courses published</p>
                     @endforelse
                   
                    
                  </ul>
               </div>
            </div>
         </div>
   
         <div class="col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Courses</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                       
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                 
                  <ul class="align-items-center  list-inline p-0 m-0 ">

                     @forelse ($courses as $c)
                     <div class="col-md-4 iq-user inline">
                        <img class="avatar-70 rounded-circle" src="images/user/04.jpg" alt="">
                     </div>
                     <li class="col-md-12">
                       
                        <h5 class="mb-0 "> {{$c->title}} </h5>
                        <p class="text-primary mb-0">500 Likes</p>
                     </li>
                     @empty
                     <p class="text-primary mb-0">aucun courses published</p>
                     @endforelse
                   
                    
                  </ul>
               </div>
            </div>
         </div>

         <div class="col-lg-4">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Social Data</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                        </span>
                       
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                 
                  <ul class="d-flex align-items-center list-inline p-0 m-0 text-center">
                     <li class="col-md-4">
                        <div class="iq-user mb-3">
                           <img class="avatar-70 rounded-circle" src="images/user/04.jpg" alt="">
                        </div>
                        <h5 class="mb-0 ">Terry Aki</h5>
                        <p class="text-primary mb-0">500 Likes</p>
                     </li>
                    
                  </ul>
               </div>
            </div>
         </div>
    </div>
</div>

@endsection