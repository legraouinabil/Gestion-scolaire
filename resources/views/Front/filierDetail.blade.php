@extends('Front.layouts.master')


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Courses</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span><span>{{$filier->formation->name}} <i class="ion-ios-arrow-forward"></i></span> <span>{{$filier->name}} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
        <div class="row">
  <div class="col-lg-8 ftco-animate">
    <h2 class="mb-3">{{$filier->name}}</h2>
 
    <p>
      <img src="{{asset('front/images/image_2.jpg')}}" alt="" class="img-fluid">
    </p>
    <p> {{$filier->description}} </p>
    <p> {{$filier->small_description}} </p>


    <h3>
      Why You Learn In Coach
    </h3>
   
    <div class="card">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
       <table class="table">
        <thead>
          <tr>
            <th>model name</th>
            <th> cofession</th>
            <th>number hours</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($filier->modules as $model)
              
            <tr>
              <td scope="row"> {{$model->name}} </td>
              <td>{{$model->cofession}}</td>
              <td>{{$model->nbHours}}</td>
            </tr>
          @endforeach
        
        </tbody>
       </table>
      </div>
    </div>
    
   


  
  </div> <!-- .col-md-8 -->

  <div class="col-lg-4 sidebar ftco-animate">
  
    <div class="sidebar-box ftco-animate">
   <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center bg-primary">
      {{$filier->formation->name}}
    
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
   
     dureé
      <span class="badge badge-secondary badge-pill">{{$filier->dureé}}</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center disabled">
      numbers of models
      <span class="badge badge-secondary badge-pill">{{$filier->modules->count()}}</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center disabled">
      stagaires numbers
      <span class="badge badge-secondary badge-pill">{{$filier->stagaires->count()}}</span>
    </li> <li class="list-group-item d-flex justify-content-between align-items-center disabled">
      langue
      <span class="badge badge-secondary badge-pill">Francais</span>
    </li>
   </ul>
    

  
    </div>

    <div class="sidebar-box ftco-animate">
      <h3>Popular Articles</h3>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
            <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
            <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
            <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
    </div>

    <div class="sidebar-box ftco-animate">
      <h3>Tag Cloud</h3>
      <ul class="tagcloud m-0 p-0">
        <a href="#" class="tag-cloud-link">School</a>
        <a href="#" class="tag-cloud-link">Kids</a>
        <a href="#" class="tag-cloud-link">Nursery</a>
        <a href="#" class="tag-cloud-link">Daycare</a>
        <a href="#" class="tag-cloud-link">Care</a>
        <a href="#" class="tag-cloud-link">Kindergarten</a>
        <a href="#" class="tag-cloud-link">Teacher</a>
      </ul>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3>Archives</h3>
      <ul class="categories">
          <li><a href="#">December 2018 <span>(30)</span></a></li>
          <li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
        <li><a href="#">September 2018 <span>(6)</span></a></li>
        <li><a href="#">August 2018 <span>(8)</span></a></li>
      </ul>
    </div>


    <div class="sidebar-box ftco-animate">
      <h3>Paragraph</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
    </div>
  </div><!-- END COL -->
</div>
    </div>
</section>


@endsection