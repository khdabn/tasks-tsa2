<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>

    <h1>Task List</h1>

    <nav>
        <a href="/">Home</a> |
        <a href="/tasks">Task List</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </nav>
<?php if (session()->get('logged_in')): ?>

    <br>

    <a href="/tasks/new">Add New Task</a>

    <br><br>

<?php endif; ?>
    <br>

    <h2>All Tasks</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Task Date</th>
			<th>Action</th>
        </tr>

        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
                <td><?= esc($task['task_date']) ?></td>
				
<td>
    <?php if (session()->get('logged_in')): ?>

        <a href="/tasks/edit/<?= $task['id'] ?>">Edit</a>

        <form
            action="/tasks/delete/<?= $task['id'] ?>"
            method="post"
            style="display:inline;"
        >
            <?= csrf_field() ?>

            <button
                type="submit"
                onclick="return confirm('Archive this task?')"
            >
                Delete
            </button>
        </form>

    <?php endif; ?>
</td>
            </tr>
			
        <?php endforeach; ?>

    </table>

</body>
</html>