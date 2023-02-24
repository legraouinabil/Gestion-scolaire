@extends('Front.layouts.master')


@section('content')





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
                            <h3><a href=" {{route('front.filierDetail', [$f->formation->id , $f->id])}} "> {{$f->name}} </a></h3>
                            <p> {{$f->small_description}}</p>
                            <p><a href="#" class="btn btn-primary">Apply now</a></p>
                        </div>
                    </div>
                @endforeach

                  
              
              </div>
            
          </div>
      </section>


@endsection