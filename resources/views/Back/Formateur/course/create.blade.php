@extends('Back.Formateur.layouts.master')


@section('content')

<div class="container">
    @if(count($errors) >0)
    <ul class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li class="d-block">
              
                {{$error}}
            <li/>
        @endforeach
    <ul/>
    @endif

   </div>
<div class="row">
   


    <div class="col-lg-12">
     
         <div class="iq-card">
           
            
             <form action="{{route('formateur.course.store')}} " method="POST" enctype="multipart/form-data">
                 @csrf
                 <input type="hidden" name="formateur_id" value=" {{Auth::id()}} ">
             <div class="card-body">
                 <label for="inputName">title</label>
                 <input type="text" class="form-control " name="title" id="title">
                 <div class="invalid-feedback">
                     Validation message
                 </div>
                <div class="form-group">
                  <label for="description">description</label>
                  <textarea name="description" id="description" cols="30" rows="10"  class="form-control ">
  
                  </textarea>
                </div>
                
                 <div class="invalid-feedback">
                     Validation message
                 </div>
 
                 
                 <div class="form-group">
                     <select class="custom-select" name="group_id" required>
                         <option value="">Choose groupe</option>
                         @foreach ($groupes as $g)
                         <option value="  {{$g->id}} ">{{$g->name}}</option>
                         @endforeach
                       
                     </select>
                     <div class="invalid-feedback">Example invalid custom select feedback</div>
                  </div>
 
                  <div class="form-group">
                     <label for="exampleInputdatetime">Date and Time Input</label>
                     <input type="date" class="form-control" id="exampleInputdatetime"  name="last_time">
                  </div>
                 
                  <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" >
                        <label class="custom-file-label" for="validatedCustomFile">Choose image...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                     </div>
                </div>
                
         <div class="form-group">
             <div class="custom-file">
                 <input type="file" class="custom-file-input" id="validatedCustomFile" name="file" >
                 <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                 <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div>
         </div>
 
         
                  
               
                 <!-- TODO: This is for server side, there is another version for browser defaults -->
             </div>
             <div class="card-footer text-muted">
                 <button type="submit" class="btn btn-primary">Submit</button>
                 <button type="submit" class="btn iq-bg-danger">cancle</button>
             </div>
         </form>
         </div>
     </div>
    </div>


@endsection