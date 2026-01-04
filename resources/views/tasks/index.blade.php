<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
/* =========================
   GLOBAL
========================= */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* =========================
   LIGHT MODE
========================= */
body {
    background: #f8f9fa;
    color: #212529;
}

/* =========================
   DARK MODE BASE
========================= */
.dark-mode {
    background-color: #121212 !important;
    color: #e0e0e0 !important;
}

/* =========================
   NAVBAR
========================= */
.dark-mode .navbar {
    background-color: #000 !important;
}

/* =========================
   HEADINGS
========================= */
.dark-mode h1,
.dark-mode h2,
.dark-mode h3 {
    color: #ffffff !important;
}

/* =========================
   TABLE – COMPLETE OVERRIDE
========================= */
.dark-mode .table {
    background-color: #1e1e1e !important;
    color: #e0e0e0 !important;
}

/* TABLE HEADER */
.dark-mode thead th {
    background-color: #2c2c2c !important;
    color: #ffffff !important;
    border-color: #444 !important;
}

/* TABLE BODY ROW */
.dark-mode tbody tr {
    background-color: #1e1e1e !important;
}

/* TABLE CELLS (MOST IMPORTANT FIX) */
.dark-mode tbody td {
    background-color: #1e1e1e !important;
    color: #e0e0e0 !important;
    border-color: #444 !important;
}

/* STRIPED ROW FIX */
.dark-mode .table-striped > tbody > tr:nth-of-type(odd),
.dark-mode .table-striped > tbody > tr:nth-of-type(even) {
    background-color: #1e1e1e !important;
}

/* =========================
   BADGES
========================= */
.dark-mode .badge.bg-warning {
    background-color: #fbc02d !important;
    color: #000 !important;
}

.dark-mode .badge.bg-success {
    background-color: #2e7d32 !important;
}

/* =========================
   BUTTONS
========================= */
.dark-mode .btn-primary {
    background-color: #1976d2 !important;
}

.dark-mode .btn-warning {
    background-color: #f9a825 !important;
    color: #000 !important;
}

.dark-mode .btn-danger {
    background-color: #d32f2f !important;
}

.dark-mode .btn-info {
    background-color: #0288d1 !important;
}

/* =========================
   FOOTER
========================= */
.dark-mode footer {
    background-color: #000 !important;
    color: #aaa !important;
}

</style>



</head>
<body>
    
<style>
    /* LIGHT MODE DEFAULT 
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #e3f2fd, #ffffff);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
*/

    /* DARK MODE BACKGROUND FIX 
    .dark-mode body {
        background: #121212 !important;
    }
*/
</style>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container d-flex justify-content-between">
        <span class="navbar-brand"><b>📝 Task Flow</b></span>

        <button class="btn btn-light btn-sm" onclick="toggleDarkMode()">
            🌙 Dark Mode
        </button>
    </div>
</nav>


<div class="container">


    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><b>TASK MANAGEMENT SYSTEM</b></h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            + Add New Task
        </a>
    </div>


    <br><br>

    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>


        @forelse ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->priority }}</td>
                <td>
                    @if($task->status == 'Completed')
                        <span class="badge bg-success">Completed</span>
                    @else
                        <span class="badge bg-warning text-dark">Pending</span>
                    @endif
                </td>
                                    

                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">
                        ✏️ Edit
                    </a>

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure you want to delete this task?')">
                       🗑️ Delete
                        </button>



                    </form>

                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-info">
                        👁️ View

                    </a>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-muted py-4">
                    📭 No tasks yet. Click "Add New Task" to get started.
                </td>
            </tr>

        @endforelse
    </tbody>
    </table>

</div>

<script>
function toggleDarkMode() {
    document.documentElement.classList.toggle('dark-mode');
    document.body.classList.toggle('dark-mode');

    localStorage.setItem(
        'theme',
        document.body.classList.contains('dark-mode') ? 'dark' : 'light'
    );
}

window.onload = function () {
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark-mode');
        document.body.classList.add('dark-mode');
    }
};
</script>



</body>
<footer class="text-center text-muted mt-4">
    <small>© 2026 Task Manager | Built with Laravel</small>
</footer>

</html>
