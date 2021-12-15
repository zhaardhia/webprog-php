@extends('layouts.master')
@section('content')
<div>
    <h1>User</h1>
    <h5>ID: {{$transaction->user_id}}</h5>
    <h5>Name: {{$transaction->user->name}}</h5>
    <h5>Email: {{$transaction->user->email}}</h5>

    <h1>Payment Method</h1>
    <h5>ID: {{$transaction->paymentmethod_id}}</h5>
    <h5>Type: {{$transaction->paymentmethod->name}}</h5>
</div>
@endsection
