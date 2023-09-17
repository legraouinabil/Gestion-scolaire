@extends('Back.Formateur.layouts.master')


@section('content')

<div class="container mt-5">
    <div class="row">
      @forelse ($groups as $g)
      <div class="col-lg-6">
         <div class="card iq-mb-3">
            <div class="row no-gutters">
               <div class="col-md-4">
                  <img src="images/page-img/08.jpg" class="card-img" alt="#">
               </div>
               <div class="col-md-8">
                  <div class="card-body">
                     <h4 class="card-title" >
                        <a href=" {{route('back.formateur.createnote' , $g->id)}} ">
                        {{$g->name}}</a>
                     </h4>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in. a little bit longer.</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @empty
          <div class="alert alert-warning text-center">
<h3>
   aucun group defined
</h3>
          </div>
      @endforelse
        
       
    </div>
</div>

@endsection