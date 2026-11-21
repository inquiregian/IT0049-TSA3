@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <section class="card">
        <h1>Edit Task</h1>

        <form method="POST" action="{{ route('tasks.update', $task) }}">
            @csrf
            @method('PUT')

            <p>
                <label for="title">Task</label><br>
                <input id="title" name="title" type="text"
                       value="{{ old('title', $task->title) }}" maxlength="255" required>
                @error('title')
                    <br><span>{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="status">Status</label><br>
                <select id="status" name="status" required>
                    <option value="pending"
                        @selected(strtolower(old('status', $task->status)) === 'pending')>
                        Pending
                    </option>
                    <option value="done"
                        @selected(in_array(strtolower(old('status', $task->status)), ['done', 'completed'], true))>
                        Completed
                    </option>
                </select>
                @error('status')
                    <br><span>{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="task_date">Task date</label><br>
                <input id="task_date" name="task_date" type="date"
                       value="{{ old('task_date', $task->task_date->format('Y-m-d')) }}" required>
                @error('task_date')
                    <br><span>{{ $message }}</span>
                @enderror
            </p>

            <button type="submit">Save Changes</button>
            <a href="{{ route('tasks.index') }}">Cancel</a>
        </form>
    </section>
@endsection