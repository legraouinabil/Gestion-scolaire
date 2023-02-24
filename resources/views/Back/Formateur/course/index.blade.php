@extends('Back.Formateur.layouts.master')


@section('content')


    <div class="text-right my-2">
        <a href=" {{route('formateur.course.create')}} " class="btn btn-primary "> Add new</a>
    </div> 

    
<div class="row">
    
    @forelse ($courses as $c)
    <div class="col-sm-3">
       <div class="card iq-mb-3">
          <img src=" {{asset('/imgf/course/'.$c->image)}} " class="card-img-top" alt="#">
          <div class="card-body">
             <h4 class="card-title">{{$c->title}}</h4>
             <p class="card-text">{{$c->description}}</p>
            <div class="flex justify-content-center">
                <a href=" {{route('formateur.course.show' , $c->id)}} " class="btn btn-primary">voir</a>
                <a href="#" class="btn btn-warning">download</a>
   
                <form action=" {{route('formateur.course.delete', $c->id)}} " method="POST">
                   @method('delete')
                   @csrf
   
                   <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </div>
          </div>
       </div>
    </div>
        
    @empty
        <h3 class="text-center ">

        </h3>

    @endforelse
  

</div>
    
@endsection