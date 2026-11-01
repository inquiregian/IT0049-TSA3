@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <section class="card">
        <h1>User Profile</h1>

        <p><strong>Username:</strong> {{ $user->username }}</p>
        <p><strong>Full name:</strong> {{ $user->full_name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </section>
@endsection