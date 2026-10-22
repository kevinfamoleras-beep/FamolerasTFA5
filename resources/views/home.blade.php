@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="card">
    <span class="tag">Laravel TFA5</span>
    <h1>Welcome to PC Parts POS</h1>
    <p>A simple point-of-sale website for a PC parts shop, built with Laravel routes, controllers, and Blade views.</p>
    <p>Browse the temporary customer and user account lists using the navigation links.</p>
    <a class="button" href="{{ route('customers') }}">View Customers</a>
    <a class="button" href="{{ route('users') }}">View Users</a>
</div>
@endsection
