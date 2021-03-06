@section('pageTitle', 'City List')
@extends('layouts.master')
@section('content')

<div class="container">
    <div class="input-group mt-3">
        <a href="/create-city" class="btn btn-outline-success w-100">Add new city</a>
    </div>
    <div class="input-group mt-3">
        <input type="search" class="form-control rounded" placeholder="Search city name" aria-label="Search"
            aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary">Search</button>
    </div>

    <table class="table table-striped table-bordered table-sm mt-3" cellspacing="0" width="50%">
        <thead>
            <tr>
                <th class="th-sm">ID</th>
                <th class="th-sm">Name</th>
                <th class="th-sm">Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
            <tr>
                <td>{{$city->id}}</td>
                <td>{{$city->name}}</td>
                <td>{{$city->country}}</td>
                <td><a href="/update-city/{{$city->id}}" class="btn btn-primary">Edit</a></td>
                <td><a href="/destroy-city/{{$city->id}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
