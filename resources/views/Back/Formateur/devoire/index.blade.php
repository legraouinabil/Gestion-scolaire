@extends('Back.Formateur.layouts.master')


@section('content')

<nav class="breadcrumb">
    <a class="breadcrumb-item" href="#">devoire</a>
    <a class="breadcrumb-item" href="#">devoire</a>
    <span class="breadcrumb-item active">devoire</span>
</nav>
<div>
    @if(count($errors) >0)
    <ul class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li class="d-block+">
              
                {{$error}}
            </li>
        @endforeach
    </ul>
    @endif

    @if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        <div class="iq-alert-icon">
           <i class="ri-information-line"></i>
        </div>
        <div class="iq-alert-text"> <b> {{Session::get('message')}}</b></div>
     </div>
       
    @endif
</div>
<div class="row">
    <div class="col-md-8">
       <div class="card">
        <div class="card-header bg-primary">
            list devoir
        </div>
        <div class="card-body ">
<div class="row">

    @forelse ($devoires as $d)
    <div class="col-md-4 my-2">
        <div class="card">
            <div class="card-header">
                Header
            </div>
            <div class="card-body">
                <img src=" {{asset('/img/devoire/'.$d->image)}} " class="card-img-top" alt="" height="100" width="100">
                <h4 class="card-title">{{$d->title}}</h4>
                <p class="card-text">{{$d->description}}</p>
                <span>
                    created_at:{{$d->created_at}}
                </span>
            </div>
            <div class="card-footer text-muted">
             <a href=" {{route('back.formateur.devoireDetail', $d->id)}} " class="btn btn-dark btn-sm">voir</a>
             <a href="" class="btn btn-info btn-sm">download</a>
             <form action="  {{route('back.formateur.deleteDevoire', $d->id)}} " method="POST">
                @csrf
            @method('delete')
        
             <button href="" class="btn btn-danger btn-sm" type="submit">
               <i class="fa fa-trash" aria-hidden="true"></i>
             </button>
            </form>
            </div>
        </div>
            </div>
    @empty
        <div class="alert alert-warning" role="alert">
            <strong>
                
                not devoire created at!!!!</strong>
        </div>
    @endforelse
   
  
</div>
        </div>
        
       
       </div>
 
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary">
             add devoire
            </div>
           
            <form action=" {{route('back.formateur.addDevoire')}} " method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <label for="inputName">title</label>
                <input type="text" class="form-control " name="title" id="title">
                <div class="invalid-feedback">
                    Validation message
                </div>
                <label for="description">description</label>
                <textarea name="description" id="description" cols="30" rows="10"  class="form-control ">

                </textarea>
               
                <div class="invalid-feedback">
                    Validation message
                </div>

                
                <div class="form-group">
                    <select class="custom-select" name="group_id" required>
                        <option value="">Open this select menu</option>
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
        <div class="col-md-12 mb-2">
            <img id="preview-image-before-upload" src="  "
                alt="preview image" style="max-height: 250px;">
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

@section('script')
    <script>

   
    </script>
@endsection