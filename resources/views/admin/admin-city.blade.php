@section('pageTitle', 'City List')
@extends('layouts.master')
@section('content')

    <div class="input-group mt-3">
        <button type="button" class="btn btn-outline-success w-100">Add new city</button>
    </div>
    <div class="input-group">
        <input type="search" class="form-control rounded" placeholder="Search city name" aria-label="Search"
            aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary">Search</button>
    </div>

    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="50%">
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
                <td><button type="button" class="btn btn-primary">Edit</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
