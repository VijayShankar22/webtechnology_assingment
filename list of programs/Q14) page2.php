<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <form action="page3.php" method="post">
        <div>
            <p>Name: <?php echo $_SESSION["name"]; ?></p>
        </div>

        <div>
            <p>Email: <?php echo $_SESSION["email"]; ?></p>
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" required>
        </div>

        <div>
            <label for="city">City:</label>
            <input type="text" name="city" required>
        </div>

        <div>
            <input type="submit" value="Next">
        </div>
    </form>
</body>
</html>
