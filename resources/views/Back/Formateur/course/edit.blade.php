@extends('Back.Formateur.layouts.master')


@section('content')

<div class="row">
    <div class="col-md-6">
       <h2>
        {{$c->title}}
       </h2>

       <p>
        {{$c->description}}
       </p>
    </div>

    <div class="col-md-6">
        <video width="640" height="360" controls>
            <source src="  {{asset('/imgf/course/'. $c->file)}} " type="video/mp4">
            Your browser does not support the video tag.
          </video>
    </div>


</div>



@endsection