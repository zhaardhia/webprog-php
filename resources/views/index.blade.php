@section('pageTitle', 'Relocate')
@extends('layouts.master')
@section('content')

    <div class="hero-index">
        <div class="container text-center p-4">
            <div class="col-12">
                <h1 class="hero-text m-2">Don't be afraid to #Relocate🗺️</h1>

                <h5 class="mt-5">Learn how to become a digital nomad and where the finest areas to live <br>
                    and work as a location independent remote worker can be found. Explore locations based on <br>
                    their cost of living, internet speed, weather, and other factors</h5 class="mt-4">

                <a type="button" href="/register" class="btn btn-join mt-4">Join Relocate</a>
            </div>

        </div>
    </div>

    <div class="container mt-3">

        <div class="row justify-content-center flex-wrap">

        @if( count($cities) == 0)
            <div class="d-flex justify-content-center text-center">
                <p class="text-black fs-1">😥 No City Found 😥</p>
            </div>
        @else
         @foreach ($cities as $city)

            <div class="col-12 col-lg-4 mt-5">
                <a href="/details/{{ $city->name }}">
                    <div class="card h-75">
                        <img src="{{$city->images->img1}}" class="card-img h-100" alt="...">
                        <div class="card-img-overlay d-flex text-center justify-content-center align-items-center">
                            <span class="card-title">{{ $city->name }}<br>{{ $city->country }}</span>
                        </div>
                    </div>
                </a>
            </div>

            @endforeach
        @endif


        </div>

    </div>

@endsection
