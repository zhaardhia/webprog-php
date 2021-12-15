@section('pageTitle', 'Detail')
@extends('layouts.master')
@section('content')

<?= 
$width1 = "";
$width2 = 0;

$enum1 = $city->detail->recreational;
$enum2 = $city->detail->hospital;
$enum3 = $city->detail->racism;

if ($enum1 == "notmuch") {
    $width1 = 'w-25';
  } else if ($enum1 == "several") {
    $width1 = "w-50";
  } else {
    $width1 = "w-75";
  }

if ($enum2 == "verybad" || $enum3 == "verylow") {
    $width2 = 20;
}else if ($enum2 == "bad" || $enum3 == "low") {
    $width2 = 40;
}else if ($enum2 == "okay" || $enum3 == "medium") {
    $width2 = 60;
}else if ($enum2 == "good" || $enum3 == "high") {
    $width2 = 80;
}else if ($enum2 == "verygood" || $enum3 == "veryhigh") {
    $width2 = 90;
}


?>

<div class="w-100">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ URL::asset('Detail/IMG_4884.jpg') }}" class="d-block w-100" alt="..." style="object-fit: cover; height: 30rem;">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::asset('Detail/IMG_5864.jpg') }}" class="d-block w-100" alt="..." style="object-fit: cover; height: 30rem;">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::asset('Detail/IMG_5876.jpg') }}" class="d-block w-100" alt="..." style="object-fit: cover; height: 30rem;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
    <div class="container mt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1>{{ $city->name }}, {{ $city->country }}</h1>
            
            <div>
                <img src="{{ URL::asset('Detail/IMG_5876.jpg') }}" class="rounded-circle mw-100" style="height: 2rem; width: 2rem;" alt="">
                <img src="{{ URL::asset('Detail/IMG_5876.jpg') }}" class="rounded-circle mw-100" style="height: 2rem; width: 2rem;" alt="">
                <img src="{{ URL::asset('Detail/IMG_5876.jpg') }}" class="rounded-circle mw-100" style="height: 2rem; width: 2rem;" alt=""> <br>
                <small style="cursor: pointer;">Relocate Users</small>
            </div>

        </div>
      
        <hr>
        <div class="row">
            <div class="col-md-6 col-lg-3 mt-4">
                <h3 class="text-decoration-underline">Finance</h3>
                <div>
                    <h2>Cost of Living</h2>
                    <p>{{ $city->detail->costofliving }}</p>
                </div>
                <div>
                    <h2>Average Salary</h2>
                    <p>{{ $city->detail->salary }}</p>
                </div>
                <div>
                    <h2>Tax and Customs</h2>
                    <p>{{ $city->detail->tax }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <h3 class="text-decoration-underline">Weather</h3>
                <div>
                    <h2>Seasons</h2>
                    <p>{{ $city->detail->seasons }}</p>
                </div>
                <div>
                    <h2>Temperature</h2>
                    <p>{{ $city->detail->temperature }}</p>
                </div>
                <div>
                    <h2>Humidity</h2>
                    <p>{{ $city->detail->humidity }}</p>
                </div>
                <div>
                    <h2>AQI</h2>
                    <p>{{ $city->detail->aqi }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <h3 class="text-decoration-underline">Safety</h3>
                <div>
                    <h2>Crime Rate</h2>
                    <p>{{ $city->detail->crimerate }}</p>
                </div>
                <div>
                    <h2>Lack of Racism</h2>
                    <!-- <p>{{ $city->detail->racism }}</p> -->
                    <div class="progress" style="height: 1.5rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $width2 }}%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ $city->detail->racism }}</div>
                    </div> 
                </div>
                <div>
                    <h2>Traffic Safety</h2>
                    <div class="progress" style="height: 1.5rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $width2 }}%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ $city->detail->traffic }}</div>
                    </div> 
                    <!-- <p>{{ $city->detail->traffic }}</p> -->
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <h3 class="text-decoration-underline">Infrastructure</h3>
                <div>
                    <h2>Hospital Availability</h2>
                    <div class="progress" style="height: 1.5rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $width2 }}%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ $city->detail->hospital }}</div>
                    </div> 
                    <!-- <p>{{ $city->detail->hospital }}</p> -->
                </div>
                <div>
                    <h2>Quality of Education</h2>
                    <div class="progress" style="height: 1.5rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $width2 }}%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ $city->detail->education }}</div>
                    </div>  
                    <!-- <p>{{ $city->detail->education }}</p> -->
                </div>
                <div>
                    <h2>Internet Speed</h2>
                    <p>{{ $city->detail->internet }} Mbps / second</p>
                </div>

                <div>
                    <h2>Recreational Facilites</h2>
                    <div class="progress" style="height: 1.5rem;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated {{ $width1 }}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>                   
                    <!-- <p>{{ $width1 }}</p> -->
                    <!-- <p>{{ $city->detail->recreational == "notmuch" ? "he" : "ho" }}</p> -->
                </div>
            </div>
        </div>

    </div>
@endsection
