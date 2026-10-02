<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
</head>
<body>

<h1>New Task</h1>

<a href="/tasks">Back to Task List</a>

<br><br>

<?php if (isset($validation)): ?>
    <div>
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<form action="/tasks/create" method="post">

    <?= csrf_field() ?>

    <p>
        <label>Title:</label><br>
        <input
            type="text"
            name="title"
            value="<?= old('title') ?>"
        >
    </p>

    <p>
        <label>Status:</label><br>

        <select name="status">
            <option
                value="pending"
                <?= old('status') === 'pending' ? 'selected' : '' ?>
            >
                Pending
            </option>

            <option
                value="completed"
                <?= old('status') === 'completed' ? 'selected' : '' ?>
            >
                Completed
            </option>
        </select>
    </p>

    <p>
        <label>Task Date:</label><br>
        <input
            type="date"
            name="task_date"
            value="<?= old('task_date') ?>"
        >
    </p>

    <button type="submit">Add Task</button>

</form>

</body>
</html>