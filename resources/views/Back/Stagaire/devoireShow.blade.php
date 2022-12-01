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

        
        <div class="col-md-6 my-2">
           
           <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title">
                 
                    formateur</h4>
                <p class="card-text">model</p>
                <p class="card-text">group</p>
            </div>
           </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="alert alert-primary text-center" role="alert">
                <strong>  {{$devoire->last_time}}</strong>
            </div>
           <div class="card rounded-3">
          
            <div class="card-body">
                <img class="img-thumbnail rounded-circle " src="{{asset('/img/devoire/'.$devoire->image)}} " alt="" height="100" width="100">
                <h4 class="card-title ">
                  
                    {{$devoire->title}}</h4>
                <p class="card-text ">{{$devoire->description}}</p>
                <div class="">
                    <a class="btn btn-primary"> voir</a>
                    <a class="btn btn-success"> download</a>
                </div>
            </div>
           
           </div>

           <hr>
           <h3 class="text-info">
            reponse
           </h3>

           <form action=" {{route('back.stagaire.devoireReponse',$devoire->id )}} " method="post">
            @csrf
            <div class="form-group">
            
              <input type="file" name="file_reponse" id="" class="form-control" placeholder="" aria-describedby="helpId">
            
            </div>
            <button class="btn btn-block btn-info" type="submit">
                <i class="fas fa-save    "></i>
                send
            </button>
           </form>
        </div>
          
      
       
    </div>
</div>
@endsection