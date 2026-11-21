<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task Completed</title>
</head>
<body>
    <h1>Task Completed</h1>

    <p>The following task was marked as done:</p>

    <p><strong>{{ $task->title }}</strong></p>
    <p>Scheduled date: {{ $task->task_date->format('F j, Y') }}</p>
</body>
</html>