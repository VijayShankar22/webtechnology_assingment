<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $data = "Name: $name\nEmail: $email\nPhone: $phone\nGender: $gender\nCourse: $course\n\n";

    $file_path = 'data.txt';

    $file = fopen($file_path, 'a');

    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo "Data has been successfully saved to $file_path";
    } else {
        echo "Error: Unable to open the file.";
    }
}
?>
