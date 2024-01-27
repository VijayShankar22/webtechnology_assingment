<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $gender = $_POST["gender"];

    if ($gender === "male") {
        echo "Welcome Mr. $name";
    } elseif ($gender === "female") {
        echo "Welcome Ms. $name";
    }
}
?>