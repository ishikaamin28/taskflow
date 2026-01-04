<!DOCTYPE html>
<html>
<head>
    <title>View Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<style>
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #e3f2fd, #ffffff);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>

 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container d-flex justify-content-between">
        <span class="navbar-brand">📝 Task Flow</span>
    </div>
</nav>


<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Task Details
        </div>

        <div class="card-body">
            <p><strong>Title:</strong> {{ $task->title }}</p>

            <p><strong>Description:</strong><br>
                {{ $task->description ?? 'No description provided' }}
            </p>

            <p><strong>Priority:</strong>
                <span class="badge bg-info">{{ $task->priority }}</span>
            </p>

            <p><strong>Status:</strong>
                @if($task->status == 'Completed')
                    <span class="badge bg-success">Completed</span>
                @else
                    <span class="badge bg-warning text-dark">Pending</span>
                @endif
            </p>

            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                Back to List
            </a>

            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">
                Edit Task
            </a>
        </div>
    </div>
</div>

</body>
</html>
