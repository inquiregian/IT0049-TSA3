@extends('layouts.app')

@section('title', 'Today')

@section('content')
    <section class="card">
        <h1>Today's Tasks</h1>
        <p class="muted">{{ today()->format('F j, Y') }}</p>

        @forelse ($tasks as $task)
            <p>
                {{ $task->title }}
                <span class="status {{ strtolower($task->status) }}">
                    {{ ucfirst($task->status) }}
                </span>
            </p>
        @empty
            <p class="muted">There are no tasks scheduled for today.</p>
        @endforelse
    </section>
@endsection