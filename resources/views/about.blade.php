@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="card">
    <span class="tag">About this project</span>
    <h1>About PC Parts POS</h1>
    <p>PC Parts POS is a foundational web application designed to demonstrate Laravel's Model-View-Controller workflow for a computer parts shop.</p>
    <p>In this TFA5 version, the Customers and Users pages are rendered from static PHP arrays defined in their controllers. No database is used for the account listings.</p>
    <h2>Learning goals</h2>
    <p>Practice Laravel routes, Artisan-generated controllers, Blade templates, navigation, and <code>@@foreach</code> loops.</p>
</div>
@endsection
