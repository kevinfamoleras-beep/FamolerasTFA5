@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<h1>User Accounts</h1>
<p>Sample system user records from a static PHP array in UserController.</p>
<div class="table-wrap">
<table>
    <thead><tr><th>#</th><th>Username</th><th>Full Name</th><th>Role</th></tr></thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user['username'] }}</td>
                <td>{{ $user['full_name'] }}</td>
                <td>{{ $user['role'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
