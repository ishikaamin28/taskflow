<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
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


<div class="container">
    <div class="card shadow-lg">
        <div class="card-body">

<h4>Edit Task</h4>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Title:</label><br>
    <input type="text" name="title" value="{{ $task->title }}" class="form-control" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" class="form-control">{{ $task->description }}</textarea><br><br>

    <label>Priority:</label><br>
    <select name="priority" class="form-select">
        <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
        <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
        <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
    </select><br><br>

    <label>Status:</label><br>
    <select name="status" class="form-select">
        <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
    </select><br><br>

    <button type="submit" class="btn btn-success">Update Task</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>

</form>

<br>

</div>
</div>
</div>

</body>
</html>
