@section('pageTitle', 'Relocate')
@extends('layouts.master')
@section('content')

    <div class="bg-primary">
        <div class="container text-center p-4">
            <div class="col-12">
                <h1>Relocate</h1>

                <h5 class="mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis fugiat porro
                    quasi atque a beatae sint at harum labore. Sint cumque deleniti error nostrum accusantium non,
                    praesentium quam veritatis? Aliquam.</h5 class="mt-4">

                <button type="button" class="btn btn-secondary mt-5">Primary</button>
            </div>

        </div>
    </div>

    <div class="container mt-3">

        <div class="row justify-content-center flex-wrap">

            @foreach ($cities as $city)

                <div class="col-12 col-lg-4 mt-4">
                    <a href="/details/{{ $city->name }}">
                        <div class="card h-100">
                            <img src="https://images.unsplash.com/photo-1598135753163-6167c1a1ad65?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&w=1000&q=80"
                                class="card-img-top h-75" alt="...">
                            <div class="card-body">
                                <p class="card-text">{{ $city->name }}, {{ $city->country }}</p>
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>

    </div>

@endsection
