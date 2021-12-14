@section('pageTitle', 'Detail')
@extends('layouts.master')
@section('content')
    <div class="w-100" style="height: 40rem">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ URL::asset('Detail/IMG_4884.jpg') }}" class="d-block w-100 h-100" alt="..."
                        style="object-fit: cover">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('Detail/IMG_5864.jpg') }}" class="d-block w-100 h-100" alt="..."
                        style="object-fit: cover">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('Detail/IMG_5876.jpg') }}" class="d-block w-100 h-100" alt="..."
                        style="object-fit: cover">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container mt-5">
        <h1>{{ $city->name }}, {{ $city->country }}</h1>
        <hr>
        <div class="row">
            <div class="col-md-6 col-lg-3 mt-4">
                <h3>Finance</h3>
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
                <h3>Weather</h3>
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
                <h3>Safety</h3>
                <div>
                    <h2>Crime Rate</h2>
                    <p>{{ $city->detail->crimerate }}</p>
                </div>
                <div>
                    <h2>Lack of Racism</h2>
                    <p>{{ $city->detail->racism }}</p>
                </div>
                <div>
                    <h2>Traffic Safety</h2>
                    <p>{{ $city->detail->traffic }}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <h3>Infrastructure</h3>
                <div>
                    <h2>Hospital Availability</h2>
                    <p>{{ $city->detail->hospital }}</p>
                </div>
                <div>
                    <h2>Quality of Education</h2>
                    <p>{{ $city->detail->education }}</p>
                </div>
                <div>
                    <h2>Internet Speed</h2>
                    <p>{{ $city->detail->internet }}</p>
                </div>
                <div>
                    <h2>Recreational Facilites</h2>
                    <p>{{ $city->detail->recreational }}</p>
                </div>
            </div>
        </div>

    </div>
@endsection
