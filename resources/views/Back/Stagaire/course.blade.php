@extends('Front.layouts.master')


@section('content')

<section class="hero-wrap hero-wrap-2 my-5" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>


<div class="container">
    <div class="row">
        @forelse ($courses as $c)
        <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src=" {{$c->file}} " alt="">
              <div class="card-body">
                <h4 class="card-title">{{$c->title}}</h4>
                <p class="card-text">{{$c->description}}</p>
                <a href="#" class="btn btn-primary">voir</a>
                <a href="#" class="btn btn-warning">download</a>
              </div>
            </div>
        </div>
        @empty
            <div class="text center text-info">
               <h3>
                aucun courses publiched !!!!!
               </h3>
            </div>
        @endforelse
    

    </div>
    
</div>
@endsection