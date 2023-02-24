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
                    <div class="col-md-12 mt-2">
                      
                       <div class="card">
                       
                        <div class="card-body d-flex ">
                          <div >
                              <h1  > 
                                <i class="fa fa-book" aria-hidden="true"></i>
                              </h1>
                          </div>
                          <div class="mx-5">
                            <h4 class="card-title">{{$d->title}}</h4>
                            <p class="card-text">{{$d->description}}</p>
                            <p class="card-text">{{$d->last_time}}</p>
                          </div>
                         
                        </div>
                        <div class="card-footer ">
                         <div class="d-flex justify-content-between">
                              <span class="badge  badge-primary">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                              
                                date de creation: {{$d->created_at}}
                            
                              </span>
                              <span class="badge  badge-primary">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                date de creation: {{$d->last_time}}
                              </span>
                              <span class="badge  badge-success">
                                <i class="fa fa-share" aria-hidden="true"></i>
                              envoyer devoire
                              </span>
                         </div>
                        </div>
                       </div>
                       
                        
                    </div>

                    
                    @empty
                       <div class="col-md-12">
                        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                          
                          <strong >not devoire existe right now.</strong>
                        </div>
                       </div>
                    @endforelse
                   
                  
               
              
            </div>
        </div>
    </div>
</div>


@endsection