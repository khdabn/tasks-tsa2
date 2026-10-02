<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<a href="/">Back to Home</a>

<br><br>

<?php if (isset($validation)): ?>
    <div>
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<?php if (isset($loginError)): ?>
    <p><?= esc($loginError) ?></p>
<?php endif; ?>

<form action="/login" method="post">

    <?= csrf_field() ?>

    <p>
        <label>Username:</label><br>
        <input
            type="text"
            name="username"
            value="<?= old('username') ?>"
        >
    </p>

    <p>
        <label>Password:</label><br>
        <input
            type="password"
            name="password"
        >
    </p>

    <button type="submit">Login</button>

</form>

</body>
</html>