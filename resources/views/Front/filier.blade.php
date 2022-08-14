@extends('Front.layouts.master')


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Courses</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Formation <i class="ion-ios-arrow-forward"></i></span>  <span>{{$formation->name}} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
          <div class="container-fluid px-4">
              <div class="row">
                @foreach ($filiers as $f)         
                    <div class="col-md-3 course ftco-animate">
                        <div class="img" style="background-image: url({{$f->image}});"></div>
                        <div class="text pt-4">
                            <p class="meta d-flex">
                                <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                                <span><i class="icon-table mr-2"></i>10 seats</span>
                                <span><i class="icon-calendar mr-2"></i>4 Years</span>
                            </p>
                            <h3><a href="#"> {{$f->name}} </a></h3>
                            <p> {{$f->small_description}}</p>
                            <p><a href="#" class="btn btn-primary">Apply now</a></p>
                        </div>
                    </div>
                @endforeach

                  
              
              </div>
            
          </div>
      </section>


@endsection