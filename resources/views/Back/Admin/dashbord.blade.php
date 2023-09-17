@extends('Back.Admin.layouts.master')


@section('content')
    





<div class="row">
  <div class="col-md-6 col-lg-3">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
       <div class="iq-card-body">
          <div class="text-center"><span>Nombre Stagaire</span></div>
          <div class="d-flex justify-content-between align-items-center">
             <div class="value-box">
                <h2 class="mb-0"><span class="counter"><b>{{$stagaire_count}}</b></span></h2>
                <p class="mb-0 text-secondary line-height"> 26.84% </p>
             </div>
             <div class="iq-iconbox iq-bg-danger">
              <i class="fa fa-graduation-cap"></i>
           
             </div>
          </div>
             <div class="iq-progress-bar mt-5">
             <span class="bg-danger" data-percent="80"></span>
          </div>
       </div>
    </div>
 </div>
 <div class="col-md-6 col-lg-3">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
       <div class="iq-card-body">
          <div class="text-center"><span>Nombre Formateur</span></div>
          <div class="d-flex justify-content-between align-items-center">
             <div class="value-box">
                <h2 class="mb-0"><span class="counter"><b>{{$formateur_count}}</b></span></h2>
                <p class="mb-0 pl-2 text-secondary line-height"> 8.64% </p>
             </div>
             <div class="iq-iconbox iq-bg-info">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
             </div>
          </div>
             <div class="iq-progress-bar mt-5">
             <span class="bg-info" data-percent="50"></span>
          </div>
       </div>
    </div>
 </div>
 <div class="col-md-6 col-lg-3">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
       <div class="iq-card-body">
          <div class="text-center"><span>Nombre Filier</span></div>
          <div class="d-flex justify-content-between align-items-center">
             <div class="value-box">
                <h2 class="mb-0"><span class="counter"><b>{{$filier_count}}</b></span></h2>
                <p class="mb-0 pl-2 text-secondary line-height"> 0.86% </p>
             </div>
             <div class="iq-iconbox iq-bg-success">
                <i class="ri-arrow-up-line"></i>
             </div>
          </div>
          <div class="iq-progress-bar mt-5">
             <span class="bg-success" data-percent="66"></span>
          </div>
       </div>
    </div>
 </div>
 <div class="col-md-6 col-lg-3">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
       <div class="iq-card-body">
          <div class="text-center"><span>Nombre Blog</span></div>
          <div class="d-flex justify-content-between align-items-center">
             <div class="value-box">
                <h2 class="mb-0"><span class="counter"><b>{{$blog_count}}</b></span></h2>
                <p class="mb-0 pl-2 text-secondary line-height"> 25.5% </p>
             </div>
             <div class="iq-iconbox iq-bg-primary">
                <i class="ri-arrow-up-line"></i>
             </div>
          </div>
             <div class="iq-progress-bar mt-5">
             <span class="bg-primary" data-percent="70"></span>
          </div>
       </div>
    </div>
</div>
   <div class="row ">
    <div class="col-md-8">
     
      <canvas id="myChart" class="height-500 "></canvas>

    </div>
    <div class="col-md-4">
    <canvas id="stackedBar" class="height-500 "></canvas>
    </div>
   </div>

   


@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
 
  fetch(" {{ route('back.chartStagaire')}} ")
        .then(response => response.json())
        .then( json => {
      
          console.log("ok");
   
  
    const data= {
      labels: json.labels,
      datasets: [{
        label: "nombre of stagaire on year",
        backgroundColor: [
    
      '#827af3',
      'red',
      'green',
      'yellow',
      'rgb(255, 99, 132)',
    
    ],
        borderColor: 'rgb(255, 99, 132)',
        data: json.data,
      }]
    };
  
    const config = {
      type: 'bar',
      data: data,
      options: {}
    };
    const config2 = {
      type: 'doughnut',
      data: data,
      options: {}
    };
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    const stackedBar = new Chart(
      document.getElementById('stackedBar'),
      config2
    );



        });

     
  </script>

    
<script>
   
  </script>
<script>
  const stackedBar = new Chart(
    document.getElementById('stackedBar'),
    config2
  );
</script>
 


<script>


</script>
   
@endsection