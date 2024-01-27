<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Save Data to File</title>
</head>
<body>
    <form method="post" action="save data.php">
        <label for="name">Name:</label>
        <input type="text" name="Name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="Email" required><br>

        <label for="phone">Phone No:</label>
        <input type="tel" name="Phone" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>

        <label for="course">Course:</label>
        <select name="course" required>
            <option value="btech">B.Tech</option>
            <option value="mtech">M.Tech</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
