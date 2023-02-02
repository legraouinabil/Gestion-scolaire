@extends('Front.layouts.master')


@section('content')



  <div class="container  mt-5">
    <div class="row">

        
        <div class="col-md-3">
            <div class="card border-primary">
               
                <div class="card-body text-center">
                 <div class="mx-5 border-primary border-primary" >
                    <img src=" {{ asset('/img/stagaire/'.$stagaire->image) }} " alt="" class="card-img-top rounded-circle " width="20" height="90">
                 </div>
                    <h4 class="card-title text-center">Title</h4>
                    <p class="card-text text-center">Text</p>
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
                <div class="card-footer text-muted">
                    Footer
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="card border-primary">
                    <div class="card-header">
                       Espace stagaire
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row">
        
                               
                                <div class="col-md-4 my-2">
                                    <div class="card rounded-5">
                                        <img class="card-img-top" src="{{asset('front/images/aaa.png') }}" alt="" height="200" width="100">
                                        <div class="card-body">
                                            <h4 class="card-title text-primary">
                                                <a href=" {{route('back.stagaire.devoire')}} ">
                                                <i class="fas fa-server    "></i>
                                              
                                                Service
                                            
                                            </a></h4>
                                            <p class="card-text">description</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('front/images/ggg.png') }} " alt="" height="200" width="100">
                                        <div class="card-body">
                                            <h4 class="card-title text-primary">
                                                <a href=" {{route('back.stagaire.course')}} ">
                                                <i class="fas fa-book-open    "></i>
                                              
                                                Course

                                                </a>
                                            </h4>
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
                                                <a href=" {{route('back.stagaire.devoire')}} ">
                                               <i class="fas fa-book    "></i>
                                                
                                                Note
                                            </a>
                                            </h4>
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