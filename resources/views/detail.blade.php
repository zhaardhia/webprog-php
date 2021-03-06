@section('pageTitle', 'Detail')
@extends('layouts.master')
@section('content')

<?=
$width1 = "";
$width2 = 0;

$enum1 = $city->detail->recreational;
$enum2 = $city->detail->hospital;
$enum3 = $city->detail->racism;

if ($enum1 == 'notmuch') {
    $width1 = 'w-25';
} elseif ($enum1 == 'several') {
    $width1 = 'w-50';
} else {
    $width1 = 'w-75';
}

if ($enum2 == 'verybad' || $enum3 == 'verylow') {
    $width2 = 20;
} elseif ($enum2 == 'bad' || $enum3 == 'low') {
    $width2 = 40;
} elseif ($enum2 == 'okay' || $enum3 == 'medium') {
    $width2 = 60;
} elseif ($enum2 == 'good' || $enum3 == 'high') {
    $width2 = 80;
} elseif ($enum2 == 'verygood' || $enum3 == 'veryhigh') {
    $width2 = 90;
}
?>

<div class="w-100">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ $city->images->img1 }}" class="d-block w-100" alt="..." style="object-fit: cover; height: 30rem;">
            </div>
            <div class="carousel-item">
                <img src="{{ $city->images->img2 }}" class="d-block w-100" alt="..." style="object-fit: cover; height: 30rem;">
            </div>
            <div class="carousel-item">
                <img src="{{ $city->images->img3 }}" class="d-block w-100" alt="..." style="object-fit: cover; height: 30rem;">
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
        @include('layouts.userlistdetail')
    </div>

    <hr>
    <div class="row">
        <div class="col-md-6 col-lg-3 mt-4">
            <h3 class="text-decoration-underline">Finance</h3>
            <div>
                <h4>Cost of Living</h4>
                <p>$ {{ $city->detail->costofliving }}</p>
            </div>
            <div>
                <h4>Average Salary</h4>
                <p>$ {{ $city->detail->salary }}</p>
            </div>
            <div>
                <h4>Tax and Customs</h4>
                <p>{{ $city->detail->tax }}%</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-4">
            <h3 class="text-decoration-underline">Weather</h3>
            <div>
                <h4>Seasons</h4>
                <p>{{ $city->detail->seasons }}</p>
            </div>
            <div>
                <h4>Temperature</h4>
                <p>{{ $city->detail->temperature }}</p>
            </div>
            <div>
                <h4>Humidity</h4>
                <p>{{ $city->detail->humidity }}%</p>
            </div>
            <div>
                <h4>AQI</h4>
                <p>{{ $city->detail->aqi }}</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-4">
            <h3 class="text-decoration-underline">Safety</h3>
            <div>
                <h4>Crime Rate</h4>
                <p>{{ $city->detail->crimerate }}%</p>
            </div>
            <div>
                <h4>Lack of Racism</h4>
                <!-- <p>{{ $city->detail->racism }}</p> -->
                <div class="progress" style="height: 1.5rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $width2 }}%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ $city->detail->racism }}</div>
                </div>
            </div>
            <div>
                <h4>Traffic Safety</h4>
                <div class="progress" style="height: 1.5rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $width2 }}%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ $city->detail->traffic }}</div>
                </div>
                <!-- <p>{{ $city->detail->traffic }}</p> -->
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-4">
            <h3 class="text-decoration-underline">Infrastructure</h3>
            <div>
                <h4>Hospital Availability</h4>
                <div class="progress" style="height: 1.5rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $width2 }}%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ $city->detail->hospital }}</div>
                </div>
                <!-- <p>{{ $city->detail->hospital }}</p> -->
            </div>
            <div>
                <h4>Quality of Education</h4>
                <div class="progress" style="height: 1.5rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $width2 }}%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{ $city->detail->education }}</div>
                </div>
                <!-- <p>{{ $city->detail->education }}</p> -->
            </div>
            <div>
                <h4>Internet Speed</h4>
                <p>{{ $city->detail->internet }} Mbps / second</p>
            </div>

            <div>
                <h4>Recreational Facilites</h4>
                <div class="progress" style="height: 1.5rem;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated {{ $width1 }}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- <p>{{ $width1 }}</p> -->
                <!-- <p>{{ $city->detail->recreational == 'notmuch' ? 'he' : 'ho' }}</p> -->
            </div>
        </div>
    </div>

</div>
@endsection