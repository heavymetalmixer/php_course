<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        User name: <br>
        <input type="text" name="username"><br>
        Age: <br>
        <input type="text" name="age"><br>
        E-mail: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
    if (isset($_POST["login"])) {
        // No special characters allowed in their usual way. Useful to prevent execution
        // of scripts from input
        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        // // Only integers allowed
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        // // Only valid characters for e-mails allowed
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        // Returns an empty string if there are any non-numbers in the input
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        // Returns an empty string if there are "illegal" characters for e-mails in the input
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($email)) {
            echo "That wasn't a valid e-mail<br>";
        }
        else {
            echo "Your e-mail is {$email}<br>";
        }
    }
?>
