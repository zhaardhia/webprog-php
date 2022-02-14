@section('pageTitle', 'Transaction List')
@extends('layouts.master')
@section('content')

<div class="container mt-3">
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
            @forelse ($transactions as $transaction)

            <tr>
                <td>{{$transaction->id}}</td>
                <td>{{$transaction->user->id}}</td>
                <td>{{$transaction->created_at}}</td>
                <td>{{$transaction->paymentmethod->id}}</td>
                <td><a href="/admin-transaction/{{$transaction->id}}">View Details</a></td>
            </tr>

            @empty
            <tr>
                <td>No transactions available... </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection