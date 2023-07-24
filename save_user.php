<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    require_once 'User.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create a new User object and save it
    $user = new User($email, $password);
    $user->save();
    ?>
    <div class="message">
        Registration successful. You can now log in.
    </div>
</body>
</html>