@extends('layouts.app')

@section('title', 'About This Project')

@section('content')
    <section class="card about-card">
        <div class="about-intro">
            <p class="about-eyebrow">About the project</p>
            <h1>Tasks for Today</h1>
            <p>
                A Laravel task management system that shows tasks scheduled for today
                and provides a complete list organized by date.
            </p>
        </div>

        <div class="about-facts">
            <div class="about-fact">
                <span class="about-label">Developer</span>
                <span class="about-value">Gian Carlo Sarmiento</span>
            </div>

            <div class="about-fact">
                <span class="about-label">Course</span>
                <span class="about-value">IT0049</span>
            </div>
        </div>
    </section>
@endsection