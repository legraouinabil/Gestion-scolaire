@extends('Back.Formateur.layouts.master')


@section('content')


    <div class="text-right my-2">
        <button class="btn btn-primary "> Add new</button>
    </div> 

    
<div class="row">
    
    @forelse ($courses as $c)
    <div class="col-sm-3">
       <div class="card iq-mb-3">
          <img src=" {{$c->file}} " class="card-img-top" alt="#">
          <div class="card-body">
             <h4 class="card-title">{{$c->title}}</h4>
             <p class="card-text">{{$c->description}}</p>
             <a href="#" class="btn btn-primary">voir</a>
             <a href="#" class="btn btn-warning">download</a>
          </div>
       </div>
    </div>
        
    @empty
        <h3 class="text-center ">

        </h3>

    @endforelse
  

</div>
    
@endsection