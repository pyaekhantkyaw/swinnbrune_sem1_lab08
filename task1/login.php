<?php include 'header.inc'; ?>

<h2>Login Form</h2>

<form action="process.php" method="post">

    <p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </p>

    <p>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </p>

    <input type="hidden" name="token" value="P1066228822">

    <p>
        <input type="submit" value="Login">
    </p>

</form>

<?php include 'footer.inc'; ?>