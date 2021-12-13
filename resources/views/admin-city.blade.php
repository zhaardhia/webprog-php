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
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td><button type="button" class="btn btn-primary">Edit</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td><button type="button" class="btn btn-primary">Edit</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td><button type="button" class="btn btn-primary">Edit</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td><button type="button" class="btn btn-primary">Edit</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td><button type="button" class="btn btn-primary">Edit</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>
@endsection
