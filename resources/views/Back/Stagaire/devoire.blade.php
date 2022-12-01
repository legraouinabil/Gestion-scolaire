@extends('Front.layouts.master')


@section('content')
<section class="hero-wrap hero-wrap-2 my-5" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Espace stagaire</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home<i class="ion-ios-arrow-forward"></i></a></span> <span>blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
           
                <div class="row">
                    @forelse ($devoires as $d)
                    <div class="col-md-3 mt-5">
                       <div class="bg-primary rounded-3 text-white">
                        <img src=" {{asset('/img/devoire/'.$d->image)}} " class="card-img-top rounded-3" alt="" height="150" width="100">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href=" {{route('back.stagaire.devoireShow', $d->id)}} "  class="text-white">
                                {{$d->title}}
                            </a></h4>
                            <p class="card-text">{{$d->description}}</p>
                            <small class="card-text">{{$d->created_at}}</small>
                        </div>
                       </div>
                        
                    </div>
                    @empty
                        
                    @endforelse
                   
                  
               
              
            </div>
        </div>
    </div>
</div>


@endsection