<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

<h1>Edit Task</h1>

<a href="/tasks">Back to Task List</a>

<br><br>

<?php if (isset($validation)): ?>
    <div>
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<form action="/tasks/update/<?= $task['id'] ?>" method="post">

    <?= csrf_field() ?>

    <p>
        <label>Title:</label><br>
        <input
            type="text"
            name="title"
            value="<?= old('title', $task['title']) ?>"
        >
    </p>

    <p>
        <label>Status:</label><br>

        <?php $status = old('status', $task['status']); ?>

        <select name="status">
            <option value="pending"
                <?= $status === 'pending' ? 'selected' : '' ?>>
                Pending
            </option>

            <option value="completed"
                <?= $status === 'completed' ? 'selected' : '' ?>>
                Completed
            </option>
        </select>
    </p>

    <p>
        <label>Task Date:</label><br>
        <input
            type="date"
            name="task_date"
            value="<?= old('task_date', $task['task_date']) ?>"
        >
    </p>

    <button type="submit">Update Task</button>

</form>

</body>
</html>