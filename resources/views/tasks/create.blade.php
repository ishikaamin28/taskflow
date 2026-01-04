<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
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

<h2>Add New Task</h2>
@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title" class="form-control" required>
    <br><br>

    <label>Description:</label><br>
    <textarea name="description" class="form-control"></textarea>
    <br><br>

    <label>Priority:</label><br>
    <select name="priority" class="form-select">
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select><br><br>

    <button type="submit" class="btn btn-success">Save Task</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>

</form>

<br>


</div>
</div>
</div>

</body>
</html>
