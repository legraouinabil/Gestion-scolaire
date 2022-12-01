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
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Header
                </div>
                <div class="card-body">
                    <img src=" {{ asset('/img/stagaire/'.$stagaire->image) }} " alt="" class="card-img-top rounded-circle">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        Header
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
        
                               
                                <div class="col-md-4 my-2">
                                    <div class="card rounded-5">
                                        <img class="card-img-top" src="{{asset('front/images/aaa.png') }}" alt="" height="200" width="100">
                                        <div class="card-body">
                                            <h4 class="card-title text-primary">
                                                <i class="fas fa-server    "></i>
                                                Service</h4>
                                            <p class="card-text">description</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('front/images/ggg.png') }} " alt="" height="200" width="100">
                                        <div class="card-body">
                                            <h4 class="card-title text-primary">
                                                <i class="fas fa-book-open    "></i>
                                                Course</h4>
                                            <p class="card-text">description</p>
                                        </div>
                                    </div>
                                </div> <div class="col-md-4 my-2">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('front/images/vvv.png') }}" alt="" height="200" width="100">
                                        <div class="card-body">
                                            <h4 class="card-title text-primary" >
                                                <a href=" {{route('back.stagaire.devoire')}} ">
                                                    
                                                <i class="fas fa-calendar    "></i>
                                                Devoire
                                                </a>
                                            </h4>
                                            <p class="card-text">description</p>
                                        </div>
                                    </div>
                                </div> <div class="col-md-4">
                                    <div class="card">
                                        <img class="card-img-top"src="{{asset('front/images/vvv.png') }}" alt="" height="200" width="100">
                                        <div class="card-body">
                                            <h4 class="card-title text-primary">
                                               <i class="fas fa-book    "></i>
                                                Note</h4>
                                            <p class="card-text">description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                  
                </div>
                
                
            </div>
        </div>
    </div>
   
  </div>


 
@endsection