@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <section class="card">
        <h1>All Tasks</h1>
        <p class="muted">Tasks are listed by date.</p>

        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @auth
            <p><a href="{{ route('tasks.create') }}">Create Task</a></p>
        @endauth

        @if ($tasks->isEmpty())
            <p class="muted">No tasks have been added.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                        <th class="date-cell">Date</th>
                        @auth
                            <th>Actions</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>
                                <span class="status {{ strtolower($task->status) }}">
                                    {{ in_array(strtolower($task->status), ['done', 'completed']) ? 'Completed' : 'Pending' }}
                                </span>
                            </td>
                            <td class="date-cell">{{ $task->task_date->format('M j, Y') }}</td>
                            @auth
                                <td class="actions-cell">
                                    <div class="task-actions">
                                        <a class="edit-action"
                                           href="{{ route('tasks.edit', $task) }}">
                                            Edit
                                        </a>

                                        <form class="archive-form" method="POST"
                                              action="{{ route('tasks.destroy', $task) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="archive-button" type="submit"
                                                    onclick="return confirm('Archive this task?')">
                                                Archive
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
@endsection