@extends('Back.Formateur.layouts.master')


@section('content')


    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="iq-card">
                <div class="iq-card-body p-0">
                   <div class="iq-edit-list">
                      <ul class="iq-edit-profile d-flex nav nav-pills">
                         <li class="col-md-6 p-0">
                            <a class="nav-link active" data-toggle="pill" href="#personal-information">
                               Personal Information
                            </a>
                         </li>
                         <li class="col-md-6 p-0">
                            <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                               Change Password
                            </a>
                         </li>
    
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-12">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <div class="iq-alert-icon">
                   <i class="ri-information-line"></i>
                </div>
                <div class="iq-alert-text"> <b> {{Session::get('success')}}</b></div>
             </div>
               
            @endif

            @if (Session::has('fail'))
            <div class="alert alert-danger" role="alert">
                <div class="iq-alert-icon">
                   <i class="ri-information-line"></i>
                </div>
                <div class="iq-alert-text"> <b> {{Session::get('fail')}}</b></div>
             </div>
               
            @endif
             <div class="iq-edit-list-data">
                <div class="tab-content">
                   <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                       <div class="iq-card">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Personal Information</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <form action=" {{route('formateur.profile.update' ,  Auth::id())}} " method="POST" enctype="multipart/form-data">
                              @method('PUT')
                              @csrf
                               <div class="form-group row align-items-center">
                                  <div class="col-md-12">
                                     <div class="profile-img-edit">
                                        <img class="profile-pic" src=" {{asset('img/formateur/'.$formateur->image )}} " alt="profile-pic">
                                        <div class="p-image">
                                          <i class="ri-pencil-line upload-button"></i>
                                          <input class="file-upload" type="file" name="image" value=" {{$formateur->image}} " accept="image/*"/>
                                       </div>
                                     </div>
                                  </div>
                               </div>
                               <div class=" row align-items-center">
                                 <div class="col-md-6">
                                    <div class="form-group col-sm-12">
                                       <label for="fname">First Name:</label>
                                       <input type="text" class="form-control" id="fname" name="first_name" value="{{$formateur->first_name}}">
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label for="lname">Last Name:</label>
                                       <input type="text" class="form-control" id="lname" name="last_name" value="{{$formateur->last_name}}">
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label for="uname">Phone:</label>
                                       <input type="text" class="form-control" id="uname"  name="phone" value="{{$formateur->phone}}">
                                    </div>

                                    <div class="form-group col-sm-12">
                                      <label>Address:</label>
                                      <textarea class="form-control" rows="5" name="adresse" >{{$formateur->adresse}} </textarea>
                                       
                                     
                                   </div>
                                 </div>
                                 
                                
                                 
                                    <div class="col-md-6">

                                       <div class="iq-card py-0 my-0">
                                          <div class="iq-card-header d-flex justify-content-between ">
                                             <div class="iq-header-title">
                                                <h4 class="card-title">Social Media</h4>
                                             </div>
                                          </div>
                                          <div class="iq-card-body">
                                             <div class="acc-edit">
                                                <form>
                                                   <div class="form-group">
                                                      <label for="facebook">Facebook:</label>
                                                      <input type="text" class="form-control" id="facebook" value="www.facebook.com">
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="twitter">Twitter:</label>
                                                      <input type="text" class="form-control" id="twitter" value="www.twitter.com">
                                                   </div>
                                                  
                                                   <div class="form-group">
                                                      <label for="instagram">Instagram:</label>
                                                      <input type="text" class="form-control" id="instagram" value="www.instagram.com">
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="youtube">You Tube:</label>
                                                      <input type="text" class="form-control" id="youtube" value="www.youtube.com">
                                                   </div>
                  
                                                 
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 
                                  
                                 
                                    <div class="col-md-3 mx-3">
                                       <button type="submit" class="btn btn-primary ">Submit</button>
                                    <button type="reset" class="btn iq-bg-danger">Cancle</button>
                                 </div>
                             
                               </div>
                            </form>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                       <div class="iq-card">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Change Password</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <form action=" {{route('formateur.password.update' , Auth::id())}} " method="POST">
                              @method('PUT')
                              @csrf
                               <div class="form-group">
                                  <label for="cpass">Current Password:</label>
                                  <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                     <input type="Password" class="form-control" id="cpass" value="" name="currentPassword">
                                  </div>
                               <div class="form-group">
                                  <label for="npass">New Password:</label>
                                  <input type="Password" class="form-control" id="npass" value="" name="newPassword">
                               </div>
                               <div class="form-group">
                                  <label for="vpass">Verify Password:</label>
                                     <input type="Password" class="form-control" id="vpass" value="" name="verifyPassword">
                               </div>
                               <button type="submit" class="btn btn-primary mr-2">Submit</button>
                               <button type="reset" class="btn iq-bg-danger">Cancle</button>
                            </form>
                         </div>
                      </div>
                   </div>
                  
                </div>
             </div>
          </div>
       </div>
    </div>

</div>


@endsection