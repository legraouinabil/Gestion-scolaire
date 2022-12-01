@extends('Back.Formateur.layouts.master')


@section('content')

<div class="iq-card-body ">
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb bg-primary  ">
           <li class="breadcrumb-item"><a href="#" class="text-white"><i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
           <li class="breadcrumb-item"><a href="#" class="text-white">Library</a></li>
           <li class="breadcrumb-item active text-white" aria-current="page">Data</li>
        </ol>
     </nav>
</div>
 

<div class="row">
    <div class="col-md-3">
<div class="card">
    <div class="card-header bg-primary">
        devoire detail
    </div>
    <img class="card-img-top" src="{{ asset('/img/devoire/'.$devoire->image)}}" alt="">
    <div class="card-body">
        <h4 class="card-title">{{$devoire->title}}</h4>
        <p class="card-text">{{$devoire->description}}</p>
        <small>
            {{$devoire->created_at}}
        </small>
    </div>

    <div class="card-footer d-flex justify-content-between">
       <span>
        {{$devoire->file}} </span> 
        <span>
            <i class="fa fa-file" aria-hidden="true"></i>
        </span>
    </div>
</div>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-header bg-primary">
          stagaire repond
        </div>
        <div class="card-body">
            <ul class="list-group">

                @forelse ($devoire->stagaires as $s)
                <li class="list-group-item d-flex justify-content-between align-items-center ">
                   {{$s->first_name }}| {{$s->last_name}}
                    <span class="badge badge-secondary badge-pill">
                     {{$s->pivot->note}}/20
                    
                        
                        </span>
                    <span class="badge badge-secondary badge-pill"> {{$s->pivot->file_reponse}} </span>
                    <div>
                        <a href="http://" class="btn btn-sm danger">
                        <i class="fa fa-trash" aria-hidden="true"></i></a>
                        <a href="http://" class="btn btn-sm">
                            <i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                </li>
                @empty
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>no onee stagaire!</strong> You should check in on some of those fields below.
                    </div>
                @endforelse
               
               
            </ul>
        </div>
       
      </div>
        
    </div>
</div>
    
@endsection

