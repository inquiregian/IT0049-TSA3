@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <section class="card profile-card">
        <div class="profile-header">
            <div class="profile-avatar">
                {{ strtoupper(substr($user->full_name ?: $user->username, 0, 1)) }}
            </div>

            <div>
                <p class="profile-eyebrow">Account Overview</p>
                <h1>User Profile</h1>
                <p class="profile-subtitle">Your Tasks for Today account information</p>
            </div>
        </div>

        <div class="profile-details">
            <div class="profile-detail">
                <span class="profile-label">Username</span>
                <span class="profile-value">{{ $user->username }}</span>
            </div>

            <div class="profile-detail">
                <span class="profile-label">Full name</span>
                <span class="profile-value">{{ $user->full_name }}</span>
            </div>

            <div class="profile-detail profile-detail-wide">
                <span class="profile-label">Email address</span>
                <span class="profile-value">{{ $user->email }}</span>
            </div>
        </div>
    </section>
@endsection