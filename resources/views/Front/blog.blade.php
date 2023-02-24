@extends('Front.layouts.master')


@section('content')




<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">

            @foreach ($blogs as $blog)
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                  <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url({{asset('/img/blog/'.$blog->image)}});">
                                    <div class="meta-date text-center p-2">
                      <span class="day">26</span>
                      <span class="mos">June</span>
                      <span class="yr">2019</span>
                    </div>
                  </a>
                  <div class="text bg-white p-4">
                    <h3 class="heading"><a href="#">{{$blog->title}}</a></h3>
                    <p>{{$blog->description}}</p>
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0"><a href=" {{route('front.blogDetail' , $blog->id)}} " class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                        <p class="ml-auto mb-0">
                            <a href="#" class="mr-2">Admin</a>
                            <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                        </p>
                    </div>
                  </div>
                </div>
              </div>
               
            @endforeach

</div>
    </div>
</section>


@endsection