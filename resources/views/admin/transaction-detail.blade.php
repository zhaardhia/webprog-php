@extends('layouts.master')
@section('content')
<div class="container w-100 mx-auto justify-content-center d-flex">
    <div class="card mt-5">
        <div class="card-header">
            Transaction detail for {{$transaction->user->name}}
        </div>
        <div class="card-body mt-2">
            <div class="d-flex justify-content-center">
                <img height="100" width="100" src="{{$transaction->user->picture}}" alt="" class="mw-100 w-50 h-auto text-center mx-auto" style="object-fit: cover;">
            </div>

            <div class="mt-2">
                <h5 class="card-title">User email: {{$transaction->user->email}}</h5>
                <p class="card-text">Payment Method: {{$transaction->paymentmethod->name}}</p>
            </div>

            <a href="#" class="btn btn-info mt-2" onclick="history.go(-1)">Back</a>

        </div>
    </div>
    <!-- <div>
        <div>
            <h1>User</h1>
            <h5>ID: {{$transaction->user_id}}</h5>
            <h5>Name: {{$transaction->user->name}}</h5>
            <h5>Email: {{$transaction->user->email}}</h5>
        </div>


        <div>
            <h1>Payment Method</h1>
            <h5>ID: {{$transaction->paymentmethod_id}}</h5>
            <h5>Type: {{$transaction->paymentmethod->name}}</h5>
        </div>
    </div> -->


</div>
@endsection