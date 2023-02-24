@extends('Front.layouts.master')


@section('content')



  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Address</h3>
              <p>{{$cantact->adresse}}</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://1234567920">{{$cantact->phone}}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:info@yoursite.com">{{$cantact->email}}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Website</h3>
              <p><a href="#">yoursite.com</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>
      
      <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
          <div class="container">
              <div class="row d-flex align-items-stretch no-gutters">
                  <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <div>
                      @if (Session::has('success'))
                      <div class="alert alert-success" role="alert">
                          <div class="iq-alert-icon">
                             <i class="ri-information-line"></i>
                          </div>
                          <div class="iq-alert-text"> <b> {{Session::get('success')}}</b></div>
                       </div>
                         
                      @endif
                    </div>
                      <form  method="POST" action="{{route('front.cantact.send')}}">
                        @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name" name="name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email"  name="email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject"  name="subject">
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch">
                      <div >
                        {!!$cantact->maps!!}
                      </div>
                  </div>
              </div>
          </div>
      </section>




@endsection