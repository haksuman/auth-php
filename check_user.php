<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    require_once 'User.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (User::login($email, $password)) {
            echo '<div class="message success"><label>Login successful!</label></div>';
        } else {
            echo '<div class="message error"><label>Invalid credentials!</label></div>';
        }
    }
    ?>
</body>
</html>