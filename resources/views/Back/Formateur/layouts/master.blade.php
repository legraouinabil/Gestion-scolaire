@include('Back.Formateur.partiel.header')


    <!-- Sidebar  -->
    <div class="iq-sidebar"
      
    >
      <div class="iq-sidebar-logo d-flex justify-content-between">
         <a href="index.html">
         <img src="images/logo.gif" class="img-fluid" alt="">
         <span>Vito</span>
         </a>
         <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                     <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                  </div>
               </div>
            </div>
      </div>
      <div id="sidebar-scrollbar">
         <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
               <li class="iq-menu-title"><i class="ri-subtract-line "></i><span>Dashboard</span></li>
               <li class="@if(Route::currentRouteName() ==  'back.formateur.home') active @endif ">
                  <a href="{{route('back.formateur.home')}}" class="iq-waves-effect "><i class="ri-home-4-line "></i><span>Dashboard</span></a>
               </li>
               <li class="@if(Route::currentRouteName() ==  'back.formateur.course') active @endif ">
                  <a href="{{route('back.formateur.course')}}" class="iq-waves-effect "><i class="ri-home-4-line "></i><span>Courses</span></a>
               </li>
               <li class="@if(Route::currentRouteName() ==  'back.formateur.devoire') active @endif ">
                  <a href="{{route('back.formateur.devoire')}}" class="iq-waves-effect "><i class="ri-home-4-line "></i><span>Devoire</span></a>
               </li>
               <li class="@if(Route::currentRouteName() ==  'back.formateur.note') active @endif ">
                  <a href="{{route('back.formateur.note')}}" class="iq-waves-effect "><i class="ri-home-4-line "></i><span>Note</span></a>
               </li>
              
            </ul>
         </nav>
         <div class="p-3"></div>
      </div>
   </div>
  
   <!-- TOP Nav Bar -->
   <div class="iq-top-navbar">
      <div class="iq-navbar-custom">
         <div class="iq-sidebar-logo">
            <div class="top-logo">
               <a href="index.html" class="logo">
               <img src="images/logo.gif" class="img-fluid" alt="">
               <span>vito</span>
               </a>
            </div>
         </div>
         <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="navbar-left">
          
           
         </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
            </button>
            <div class="iq-menu-bt align-self-center">
               <div class="wrapper-menu">
                  <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                  <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
               </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto navbar-list">
                  <li class="nav-item">
                     <a class="search-toggle iq-waves-effect language-title" href="#"><img src="images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                    
                  </li>
                  
                  <li class="nav-item">
                     <a href="#" class="search-toggle iq-waves-effect">
                        <div id="lottie-beil"></div>
                        <span class="bg-danger dots"></span>
                     </a>
                     <div class="iq-sub-dropdown">
                        <div class="iq-card shadow-none m-0">
                           <div class="iq-card-body p-0 ">
                              <div class="bg-primary p-3">
                                 <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                              </div>

                             
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a href="#" class="search-toggle iq-waves-effect">
                       <div id="lottie-mail"></div>
                        <span class="bg-primary count-mail"></span>
                     </a>
                     <div class="iq-sub-dropdown">
                        <div class="iq-card shadow-none m-0">
                           <div class="iq-card-body p-0 ">
                              <div class="bg-primary p-3">
                                 <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                              </div>
                          
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <ul class="navbar-list">
                <li>
                  <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                     <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                     <div class="caption">
                        <h6 class="mb-0 line-height text-white">Nik jone</h6>
                        <span class="font-size-12 text-white">Available</span>
                     </div>
                  </a>
                  <div class="iq-sub-dropdown iq-user-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                           <div class="bg-primary p-3">
                              <h5 class="mb-0 text-white line-height">Hello Nik jone</h5>
                              <span class="text-white font-size-12">Available</span>
                           </div>
                           <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-file-user-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">My Profile</h6>
                                    <p class="mb-0 font-size-12">View personal profile details.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-profile-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Edit Profile</h6>
                                    <p class="mb-0 font-size-12">Modify your personal details.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-account-box-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Account settings</h6>
                                    <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-lock-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Privacy Settings</h6>
                                    <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                 </div>
                              </div>
                           </a>
                           <div class="d-inline-block w-100 text-center p-3">
                              <form action=" {{route('logout')}} " method="POST">
                                 @csrf
                                 <button type="submit" class="iq-sub-card iq-bg-primary-hover">log out</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </nav>
         

      </div>
   </div>
   <!-- TOP Nav Bar END -->
   <!-- Page Content  -->
       <div id="content-page" class="content-page">
          <div class="container-fluid" id="app">
           
               
                 
                     @yield('content')
   

               
            
          </div>
       </div>
    </div>
    <!-- Wrapper END -->

@include('Back.Formateur.partiel.footer')
