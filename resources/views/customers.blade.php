@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<h1>Customer Accounts</h1>
<p>Sample customer records from a static PHP array in CustomerController.</p>
<div class="table-wrap">
<table>
    <thead><tr><th>#</th><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $customer['full_name'] }}</td>
                <td>{{ $customer['email'] }}</td>
                <td>{{ $customer['phone'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
