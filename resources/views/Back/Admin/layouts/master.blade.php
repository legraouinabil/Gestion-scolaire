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
         <nav class="iq-sidebar-menu mt-5">
            <ul id="iq-sidebar-toggle" class="iq-menu">

               <li class="@if(Route::currentRouteName() ==  'back.home') active @endif ">
                  <a href="{{route('back.home')}}" class="iq-waves-effect "><i class="ri-home-4-line "></i><span>Dashboard </span></a>
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
