<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form method="post" action="save_user.php">
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" required><br>
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>