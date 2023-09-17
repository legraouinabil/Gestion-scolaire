

 <div class="bg-top navbar-light">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
            <div class="col-md-4 d-flex align-items-center">
                <a href="{{route('front.home')}}">
                  <img src=" {{asset('/img/setting/'.  $setting->logo)}}" class="img-fluid" alt="" height="80" width="80">
               </a>
            </div>
            <div class="col-lg-8 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <div class="text">
                            <span>Email</span>
                            <span>{{$setting->email}}</span>
                        </div>
                    </div>
                    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                        <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <div class="text">
                            <span>Call</span>
                            <span>Call Us:{{$setting->phone}}</span>
                        </div>
                    </div>
                    <div class="col-md topper d-flex align-items-center justify-content-end">
                        <p class="mb-0">
                          @if (Auth::guard('stagaire')->check() || Auth::guard('formateur')->check() )
                          
                          <form action=" {{route('logout')}}  " method="POST">
                            @csrf
                    <button class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center" type="submit">
                        <i class="fas fa-unlock"></i>
                        <span>log out</span>
                      </button>
                    
                    </form>
                            @else
                            <a href="/stagaire/login" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                              <span>Espace privé</span>
                          </a>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <form action="#" class="searchform order-lg-last">
      <div class="form-group d-flex">
        <input type="text" class="form-control pl-3" placeholder="Search">
        <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
      </div>
    </form>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item  @if(Route::currentRouteName() ==  'front.home') active @endif "><a href="{{route('front.home')}}   " class="nav-link pl-0">Home</a></li>
          
             
           <li class="dropdown open nav-item  @if(Route::currentRouteName() ==  'front.filier') active @endif ">
            <a class="nav-link" dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Formation
                </button>
            <div class="dropdown-menu" aria-labelledby="triggerId">
              @foreach ($formations as $f)
                  
              <a class="dropdown-item" href=" {{route('front.filier' , $f->id)}} ">{{$f->name}}
             
              </a>
             
              @endforeach
             
             
            </div>
          </li>
            
            </li>
          
            <li class="nav-item  @if(Route::currentRouteName() ==  'front.blog') active @endif ">
              <a href=" {{route('front.blog')}}" class="nav-link">Blog</a>
            </li>
          <li class="nav-item @if(Route::currentRouteName() ==  'front.cantact') active @endif">
            <a href="  {{route('front.cantact')}} " class="nav-link">Contact</a>
          </li>
          @if (Auth::guard('stagaire')->check())
          <li class="nav-item @if(Route::currentRouteName() ==  '') active @endif"><a href="   " class="nav-link">Courses</a></li>
         @endif
         @if (Auth::guard('formateur')->check())
         <li class="nav-item"><a href=" {{route('back.formateur.home') }}  "class="nav-link">Dashbord</a></li>
        @endif

        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->




@if(Route::currentRouteName() ==  'front.home')
<section class="home-slider owl-carousel" >
  <div class="slider-item" style="background-image:url({{asset('front/images/bg_1.jpg')}});">
      <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h1 class="mb-4">Education Needs Complete Solution</h1>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <p><a href="{{route('front.cantact')}}" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
      </div>
    </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url({{asset('front/images/bg_2.jpg')}});">
      <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h1 class="mb-4">University, College School Education</h1>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
      </div>
    </div>
    </div>
  </div>
</section>

@else
<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('front/images/bg_1.jpg')}});">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Courses</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Formation <i class="ion-ios-arrow-forward"></i></span>  <span> <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
@endif