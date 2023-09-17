@extends('Back.Formateur.layouts.master')


@section('content')

<div class="row">
    <div class="col-md-9">
        <div class="col-md-12">
            <div class="iq-card">
               <div class="d-flex align-items-center justify-content-between pl-2 pr-3">
                  <div class="d-flex iq-algolia-search">
                    <input type="text" name="" id="" placeholder="search..." class="form-control">
                     <div id="powered-by" class="d-flex align-content-center"></div>
                  </div>
                  <div class="d-flex justify-content-between">
                       
                        <div class="d-flex">
                           <button type="button" class="btn mr-2 btn-primary">
                              <i class="ri-grid-fill mr-0"></i>
                           </button>
                           <button type="button" class="btn btn- iq-bg-primary">
                              <i class="ri-list-unordered mr-0"></i>
                           </button>
                        </div>
                     </div>
                     <div class="d-flex stats-data">
                        <div id="stats"></div>
                     </div>
            </div>
            </div>
         </div>
    </div>
    <div class="col-md-3">
        <div class="text-right my-2">
           
            <a href=" {{route('formateur.course.create')}} " class="btn btn-primary "> Add new</a>
        </div> 
    </div>
</div>
   
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    <div class="iq-alert-icon">
       <i class="ri-information-line"></i>
    </div>
    <div class="iq-alert-text"> <b> {{Session::get('success')}}</b></div>
 </div>
   
@endif
    
<div class="row">
    
    @forelse ($courses as $c)
    <div class="col-sm-3">
       <div class="card iq-mb-3">
          <img src=" {{asset('/imgf/course/'.$c->image)}} " class="card-img-top" alt="#">
          <div class="card-body">
             <h4 class="card-title">{{$c->title}}</h4>
             <p class="card-text">{{$c->description}}</p>
            <div class="d-flex justify-content-center">
                <a href=" {{route('formateur.course.show' , $c->id)}} " class="btn btn-primary  btn-sm">voir</a>
                <a href="#" class="btn btn-warning  btn-sm mx-2">download</a>
   
                <form action=" {{route('formateur.course.delete', $c->id)}} " method="POST">
                   @method('delete')
                   @csrf
   
                   <button type="submit" class="btn btn-danger  btn-sm">delete</button>
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