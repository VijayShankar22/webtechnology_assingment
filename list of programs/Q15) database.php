<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Data from mydata.txt</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Branch</th>
    </tr>

    <?php
    $data = file("mydata.txt", FILE_IGNORE_NEW_LINES);

    foreach ($data as $line) {
        $record = explode(",", $line);

        echo "<tr>";
        echo "<td>" . htmlspecialchars($record[0]) . "</td>";
        echo "<td>" . htmlspecialchars($record[1]) . "</td>";
        echo "<td>" . htmlspecialchars($record[2]) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
