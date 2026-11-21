@extends('layouts.app')

@section('title', 'Today')

@section('content')
    <section class="card">
        <h1>Today's Tasks</h1>
        <p class="muted">{{ today()->format('F j, Y') }}</p>

        <div class="task-list">
            @forelse ($tasks as $task)
                <div class="task-row">
                    <span class="task-title">{{ $task->title }}</span>
                    <span class="status {{ strtolower($task->status) }}">
                        {{ in_array(strtolower($task->status), ['done', 'completed']) ? 'Completed' : 'Pending' }}
                    </span>
                </div>
            @empty
                <p class="muted">There are no tasks scheduled for today.</p>
            @endforelse
        </div>
    </section>
@endsection