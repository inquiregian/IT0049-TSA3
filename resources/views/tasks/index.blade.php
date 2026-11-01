@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <section class="card">
        <h1>All Tasks</h1>
        <p class="muted">Tasks are listed by date.</p>

        @if ($tasks->isEmpty())
            <p class="muted">No tasks have been added.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>
                                <span class="status {{ strtolower($task->status) }}">
                                    {{ ucfirst($task->status) }}
                                </span>
                            </td>
                            <td>{{ $task->task_date->format('M j, Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
@endsection