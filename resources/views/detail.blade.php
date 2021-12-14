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
        <h1>Heading 1</h1>
        <hr>
        <div class="row">
            <div class="col-md-6 col-lg-3 mt-4">
                <h3>Heading 3</h3>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <h3>Heading 3</h3>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <h3>Heading 3</h3>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <h3>Heading 3</h3>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mt-4">
                <h3>Heading 3</h3>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
                <div>
                    <h2>Heading 2</h2>
                    <p>Paragraph Text</p>
                </div>
            </div>
        </div>

    </div>
@endsection
