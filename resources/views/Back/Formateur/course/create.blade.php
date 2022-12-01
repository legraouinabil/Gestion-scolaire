@extends('Back.Formateur.layouts.master')


@section('content')


<div class="row">
    <div class="col-lg-3">
          <div class="iq-card">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Add New User</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <form>
                   <div class="form-group">
                      <div class="add-img-user profile-img-edit">
                         <img class="profile-pic img-fluid" src="images/user/11.png" alt="profile-pic">
                         <div class="p-image">
                           <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                           <input class="file-upload" type="file" accept="image/*">
                        </div>
                      </div>
                     <div class="img-extension mt-3">
                        <div class="d-inline-block align-items-center">
                            <span>Only</span>
                           <a href="javascript:void();">.jpg</a>
                           <a href="javascript:void();">.png</a>
                           <a href="javascript:void();">.jpeg</a>
                           <span>allowed</span>
                        </div>
                     </div>
                   </div>
                   <div class="form-group">
                    <div class="add-img-user profile-img-edit">
                       <img class="profile-pic img-fluid" src="images/user/11.png" alt="profile-pic">
                       <div class="p-image">
                         <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                         <input class="file-upload" type="file" accept="image/*">
                      </div>
                    </div>
                   <div class="img-extension mt-3">
                      <div class="d-inline-block align-items-center">
                          <span>Only</span>
                         <a href="javascript:void();">.jpg</a>
                         <a href="javascript:void();">.png</a>
                         <a href="javascript:void();">.jpeg</a>
                         <span>allowed</span>
                      </div>
                   </div>
                 </div>
                  
                </form>
             </div>
          </div>
    </div>
    <div class="col-lg-9">
          <div class="iq-card">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">New User Information</h4>
                </div>
             </div>
             <div class="iq-card-body">
                <div class="new-user-info">
                   <form>
                      <div class="row">
                         <div class="form-group col-md-12">
                            <label for="fname">title</label>
                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                         </div>
                         <div class="form-group col-md-12">
                            <label for="lname">description:</label>
                           <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
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
                            <label>group:</label>
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
                            <label>model:</label>
                            <select class="form-control" id="selectcountry">
                               <option>Select Country</option>
                               <option>Caneda</option>
                               <option>Noida</option>
                               <option >USA</option>
                               <option>India</option>
                               <option>Africa</option>
                            </select>
                         </div>
                       
                     
                      <button type="submit" class="btn btn-primary">Add New User</button>
                   </form>
                </div>
             </div>
          </div>
    </div>
 </div>

@endsection