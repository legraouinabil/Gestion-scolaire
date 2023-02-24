@include('Back.Formateur.partiel.header')


    <!-- Sidebar  -->
    <div class="iq-sidebar" >
      <div class="iq-sidebar-logo d-flex justify-content-between">
         <a href="index.html">
         <img src=" {{asset('/img/setting/'.  $setting->logo)}}" class="img-fluid" alt="">
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
               <li class="@if(Route::currentRouteName() ==  'admin.module') active @endif "><a href="{{route('admin.module')}}" class="iq-waves-effect"><i class="ri-git-repository-line"></i><span>Model</span></a></li>
              
             
               <li class="@if(Route::currentRouteName() ==  'admin.setting') active @endif "><a href="{{route('admin.setting')}}" class="iq-waves-effect"><i class="ri-settings-2-line"></i></i><span>Setting</span></a></li>
              
            
             
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
<div id="header-ajax">
   @include('Back.Admin.layouts.header')
</div>

   <!-- Page Content  -->
  
       <div id="content-page" class="content-page">
          <div class="container-fluid" id="app">
           
               
                 
                     @yield('content')
   

               
            
          </div>
       </div>
    </div>
    <!-- Wrapper END -->

@include('Back.Formateur.partiel.footer')
