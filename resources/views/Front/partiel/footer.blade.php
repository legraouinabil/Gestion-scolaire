<footer class="ftco-footer ftco-bg-dark ftco-section mt-5">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"> {{$setting->adresse}} </span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text"> {{$setting->phone}} </span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> {{$setting->email}} </span></a></li>
                </ul>
              </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Recent Blog</h2>
           @forelse ($blogs as $b)
           <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url( {{asset('/img/blog/'.$b->image)}} );"></a>
            <div class="text">
              <h3 class="heading"><a href="#">{{$b->title}}</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
           @empty
               
           @endforelse
           
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Subscribe Us!</h2>
            <form action="#" class="subscribe-form">
              <div class="form-group">
                <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="form-control submit px-3">
              </div>
            </form>
          </div>
          <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="  {{$setting->twiter}}  "><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href=" {{$setting->facebook}} "><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href=" {{$setting->insta}} "><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/aos.js')}}"></script>
<script src="{{asset('front/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('front/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('front/js/google-map.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

  
</body>
</html>