@extends('admin.layouts.main')
@section('content')

@if(session('message'))
<div class="container mt-3 alert alert-success">
    <span>{{session('message')}}!</span>
</div>
@endif


<div class="container mt-4">
    <h4>Order List</h4>
    <table class="table display">
        <thead>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Phone Number</th>
            <th>Customer Note</th>


            <th>Payment Status</th>


            <th>Action</th>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->name}}</td>
                <td>{{$order->address}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->note}}</td>
                <td>{{$order->payment_status}}</td>

                
            @endforeach
        </tbody>
    </table>
</div>


@endsection