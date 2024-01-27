<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION["age"] = $_POST["age"];
    $_SESSION["city"] = $_POST["city"];
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
    <title>Multi-Page Form - Summary</title>
</head>
<body>
    <h2>Summary</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
        </tr>
        <tr>
            <td><?php echo $_SESSION["name"]; ?></td>
            <td><?php echo $_SESSION["email"]; ?></td>
            <td><?php echo $_SESSION["age"]; ?></td>
            <td><?php echo $_SESSION["city"]; ?></td>
        </tr>
    </table>
</body>
</html>
