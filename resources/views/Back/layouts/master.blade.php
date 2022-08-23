@include('Back.partiel.header')


    <!-- Sidebar  -->
    <div class="iq-sidebar">
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
        
       </div>
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
       
       </div>
    <!-- TOP Nav Bar END -->
    <!-- Responsive Breadcrumb End-->
       <!-- Page Content  -->
       <div id="content-page" class="content-page">
          <div class="container-fluid" id="app">
           
               
                 
                     @yield('content')
                    

               
            
          </div>
       </div>
    </div>
    <!-- Wrapper END -->

@include('Back.partiel.footer')
