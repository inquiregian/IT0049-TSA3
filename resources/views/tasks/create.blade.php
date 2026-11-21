@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <section class="card">
        <h1>Create Task</h1>

        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <p>
                <label for="title">Task</label><br>
                <input id="title" name="title" type="text"
                       value="{{ old('title') }}" maxlength="255" required>
                @error('title')
                    <br><span>{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="status">Status</label><br>
                <select id="status" name="status" required>
                    <option value="pending" @selected(old('status', 'pending') === 'pending')>Pending</option>
                    <option value="done" @selected(old('status') === 'done')>Completed</option>
                </select>
                @error('status')
                    <br><span>{{ $message }}</span>
                @enderror
            </p>

            <p>
                <label for="task_date">Task date</label><br>
                <input id="task_date" name="task_date" type="date"
                       value="{{ old('task_date', today()->format('Y-m-d')) }}" required>
                @error('task_date')
                    <br><span>{{ $message }}</span>
                @enderror
            </p>

            <button type="submit">Create Task</button>
            <a href="{{ route('tasks.index') }}">Cancel</a>
        </form>
    </section>
@endsection