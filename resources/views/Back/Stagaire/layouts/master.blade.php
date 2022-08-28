@include('Back.partiel.header')

@if(Auth::guard('formateur'))
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
               <li class="@if(Route::currentRouteName() ==  'back.home') active @endif ">
                  <a href="{{route('back.home')}}" class="iq-waves-effect "><i class="ri-home-4-line "></i><span>Dashboard 1</span></a>
               </li>
              
              
               <li  class="@if(Route::currentRouteName() ==  'admin.formation') active @endif "><a href=" {{route('admin.formation')}} " class="iq-waves-effect" aria-expanded="false"><i class="ri-chat-check-line"></i><span>Formation</span></a></li>
              
               <li class="@if(Route::currentRouteName() ==  'admin.filier') active @endif "><a href="{{route('admin.filier')}}" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Filier</span></a></li>
               <li class="@if(Route::currentRouteName() ==  'admin.formateur') active @endif "><a href="{{route('admin.formateur')}}" class="iq-waves-effect"><i class="fa fa-users"></i><span>Formateur</span></a></li>
               <li class="@if(Route::currentRouteName() ==  'admin.stagaire') active @endif ">
                  <a href="{{route('admin.stagaire')}}" class="iq-waves-effect " ><i class="fa fa-graduation-cap"></i><span>Stagaire</span></a>
               
               </li>
               <li class="@if(Route::currentRouteName() ==  'admin.blog') active @endif "><a href="{{route('admin.blog')}}" class="iq-waves-effect"><i class="ri-message-line"></i><span>Blog</span></a></li>
               <li class="@if(Route::currentRouteName() ==  'admin.module') active @endif "><a href="{{route('admin.module')}}" class="iq-waves-effect"><i class="ri-message-line"></i><span>Model</span></a></li>
               <li>
                  <a href="" class="iq-waves-effect " ><i class="ri-shopping-cart-line"></i><span>Group</span></a>
               
               </li>
               <li><a href="" class="iq-waves-effect"><i class="ri-message-line"></i><span>Setting</span></a></li>
              
            
               <li>
                  <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                     <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                     <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                     <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                     <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                     <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                     <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-line"></i>Pricing 1</a></li>
                     <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                     <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                     <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                  </ul>
               </li>
               <li>
                  <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                     <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                        <ul>
                           <li>
                              <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                     <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                  </ul>
               </li>
            </ul>
         </nav>
         <div class="p-3"></div>
      </div>
   </div>
   @else
   <div class="iq-sidebar">
<li>

   <a href="">aaaaaaaaaa</a>
</li>
   </div>
   @endif
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
            <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
               <li class="nav-item">
                   <a href="index.html" class="nav-link font-weight-bold search-box-toggle"><i class="ri-home-4-line"></i></a>
               </li>
               <li><a href="chat.html" class="nav-link"><i class="ri-message-line"></i></a></li>
               <li><a href="e-commerce-product-list.html" class="nav-link"><i class="ri-file-list-line"></i></a></li>
               <li><a href="profile.html" class="nav-link"><i class="ri-question-answer-line"></i></a></li>
               <li><a href="todo.html" class="nav-link router-link-exact-active router-link-active"><i class="ri-chat-check-line"></i></a></li>
               <li><a href="app/index.html" class="nav-link"><i class="ri-inbox-line"></i></a></li>
            </ul>
            <div class="iq-search-bar">
               <form action="#" class="searchbox">
                  <input type="text" class="text search-input" placeholder="Type here to search...">
                  <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                  <div class="searchbox-datalink">
                     <h6 class="pl-3 pt-3">Pages</h6>
                     <ul class="m-0 pl-3 pr-3 pb-3">
                        <li class="iq-bg-primary-hover rounded"><a href="index.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-4-line pr-2"></i>Dashboard</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="dashboard-1.html" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-3-line pr-2"></i>Dashboard-1</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="chat.html" class="nav-link"><i class="ri-message-line pr-2"></i>Chat</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="calendar.html" class="nav-link"><i class="ri-calendar-2-line pr-2"></i>Calendar</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="profile.html" class="nav-link"><i class="ri-profile-line pr-2"></i>Profile</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="todo.html" class="nav-link"><i class="ri-chat-check-line pr-2"></i>Todo</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="app/index.html" class="nav-link"><i class="ri-mail-line pr-2"></i>Email</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-list.html" class="nav-link"><i class="ri-message-line pr-2"></i>Product Listing</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-detail.html" class="nav-link"><i class="ri-file-list-line pr-2"></i>Product Details</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="pages-faq.html" class="nav-link"><i class="ri-compasses-line pr-2"></i>Faq</a></li>
                        <li class="iq-bg-primary-hover rounded"><a href="form-wizard.html" class="nav-link"><i class="ri-clockwise-line pr-2"></i>Form-wizard</a></li>
                     </ul>
                  </div>
               </form>
            </div>
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
                     <div class="iq-sub-dropdown">
                        <a class="iq-sub-card" href="#"><img src="images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                        <a class="iq-sub-card" href="#"><img src="images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                        <a class="iq-sub-card" href="#"><img src="images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                        <a class="iq-sub-card" href="#"><img src="images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                        <a class="iq-sub-card" href="#"><img src="images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

                     </div>
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

                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Emma Watson Nik</h6>
                                       <small class="float-right font-size-12">Just Now</small>
                                       <p class="mb-0">95 MB</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">New customer is join</h6>
                                       <small class="float-right font-size-12">5 days ago</small>
                                       <p class="mb-0">Jond Nik</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Two customer is left</h6>
                                       <small class="float-right font-size-12">2 days ago</small>
                                       <p class="mb-0">Jond Nik</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">New Mail from Fenny</h6>
                                       <small class="float-right font-size-12">3 days ago</small>
                                       <p class="mb-0">Jond Nik</p>
                                    </div>
                                 </div>
                              </a>
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
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Nik Emma Watson</h6>
                                       <small class="float-left font-size-12">13 Jun</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                       <small class="float-left font-size-12">20 Apr</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Why do we use it?</h6>
                                       <small class="float-left font-size-12">30 Jun</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Variations Passages</h6>
                                       <small class="float-left font-size-12">12 Sep</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                       <small class="float-left font-size-12">5 Dec</small>
                                    </div>
                                 </div>
                              </a>
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
                              <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
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

@include('Back.partiel.footer')
