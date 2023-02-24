@extends('Back.Formateur.layouts.master')


@section('content')


<div class="row">
   
    <div class="col-lg-12">
          <div class="iq-card">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">New Course Information</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <div class="new-user-info">
                   <form action=" {{ route('formateur.course.store') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="formateur_id" value="{{Auth::id()}}">
                      <div class="row">
                         <div class="form-group col-md-12">
                            <label for="fname">title</label>
                            <input type="text" class="form-control" id="fname" name="title" placeholder="First Name">
                         </div>
                         <div class="form-group col-md-12">
                            <label for="lname">description:</label>
                           <textarea  id="" cols="30" rows="5" class="form-control" name="description"></textarea>
                         </div>
                        
                         <div class="form-group col-sm-12">
                            <label>filier:</label>
                            <select class="form-control" id="selectcountry">
                               <option>Select Country</option>
                               <option>Caneda</option>
                               <option>Noida</option>
                               <option >USA</option>
                               <option>India</option>
                               <option>Africa</option>
                            </select>
                         </div>

                         <div class="form-group col-sm-12">
                           <label>groupe:</label>
                           <select class="form-control" id="selectcountry">
                              <option>Select Country</option>
                              <option>Caneda</option>
                              <option>Noida</option>
                              <option >USA</option>
                              <option>India</option>
                              <option>Africa</option>
                           </select>
                        </div>
                        
                         <div class="form-group col-sm-12">
                           <label>image:</label>
                           <input type="file"  class="file-control" name="image" />
                         </div>
                       

                         <div class="form-group col-sm-12">
                           <label>file:</label>
                           <input type="file"  class="file-control" name="file" />
                         </div>
                     
                      <button type="submit" class="btn btn-primary">Add New User</button>
                   </form>
                </div>
             </div>
          </div>
    </div>
 </div>

@endsection