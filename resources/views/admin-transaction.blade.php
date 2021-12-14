@section('pageTitle', 'Transaction List')
@extends('layouts.master')
@section('content')

    <div class="input-group mt-3">
        <input type="search" class="form-control rounded" placeholder="Search city name" aria-label="Search"
            aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary">Search</button>
    </div>

    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="50%">
        <thead>
            <tr>
                <th class="th-sm">Transaction ID</th>
                <th class="th-sm">User ID</th>
                <th class="th-sm">Date</th>
                <th class="th-sm">Payment Method</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>Credit Card</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>Credit Card</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>Credit Card</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>Credit Card</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>Credit Card</td>
            </tr>
        </tbody>
    </table>
@endsection
