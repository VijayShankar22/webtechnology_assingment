<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $validUsername = "user";
    $validPassword = "password";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $validUsername && $password == $validPassword) {
    
        header("Location: Q17) success.php");
        exit();
    } else {
    
        $errorMessage = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>

    <?php if (isset($errorMessage)): ?>
        <p style="color: red;"><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
