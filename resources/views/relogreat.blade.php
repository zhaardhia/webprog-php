@section('pageTitle', 'Relogreat')

@extends('layouts.master')
@section('content')

{{-- Dark Mode Hero --}}
<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Relogreat+</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Get an enhanced Relocate experience for only less than $2 a month. It keeps the server alive
                and it will help us a lot. 25% of the earnings will go to the "<a href="https://covid19responsefund.org/en/">Covid-19 Response Fund</a>".</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="#bottom" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold" role="button" aria-pressed="true">Start now</a>

            </div>
        </div>
    </div>
</div>

{{-- Features (cards) --}}

<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom text-center">what will you get from Relogreat+?</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-top">Granted access to our community</h2>
                    <p>Join our discord and Slack server</p>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"> Deeper research and analysis
                    </h2>
                    <p>More detailed information and wider range of data on the city</p>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill"></use>
                            </svg>
                            <small>California</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3"></use>
                            </svg>
                            <small>5d</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Call to action --}}

<div id="bottom" class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">So what are you waiting for?</h1>
    <div class="col-lg-6 mx-auto">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a class="btn btn-primary btn-lg px-4 gap-3" href="/checkout">$15 / Month</a>
            <!-- <a type="button" class="btn btn-primary btn-lg px-4 gap-3">Rp. 180,000.00 / Year</a> -->
        </div>
    </div>
</div>


@endsection