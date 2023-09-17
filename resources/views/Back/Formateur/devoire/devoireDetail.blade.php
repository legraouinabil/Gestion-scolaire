@extends('Back.Formateur.layouts.master')


@section('content')



<div class="row">
    
    <div class="col-md-12">
      <div class="iq-card">
      
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

