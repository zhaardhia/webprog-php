@section('pageTitle', 'Relogreat')

@extends('layouts.master')
@section('content')

    <div class="text-secondary px-4 py-5 text-center"
        style="background-image: url('https://wallpaperaccess.com/full/123112.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Relogreat+</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4 text-white">Get an enhanced Relocate experience for just a one time payment of $15. It
                    keeps the server alive
                    and it will benefit you greatly.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="#bottom" class="btn btn-primary mt-4 fw-bold" role="button" aria-pressed="true">Start now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom text-center">What will you get from Relogreat+?</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 justify-content-center">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url('https://r1.ilikewallpaper.net/iphone-12-pro-wallpapers/download-103204/skyline-city-scenery.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-top">Granted access to our community</h2>
                        <p>Join our discord and Slack server</p>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url('https://images.unsplash.com/photo-1502899576159-f224dc2349fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTd8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"> Deeper research and analysis
                        </h2>
                        <p>More detailed information and wider range of data on the city</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



    <div id="bottom" class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">So what are you waiting for?</h1>
        <div class="col-lg-6 mx-auto">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a class="btn btn-primary btn-lg px-4 gap-3" href="/checkout">One Time Payment: $15 </a>

            </div>
        </div>
    </div>


@endsection
