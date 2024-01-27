<?php

$filename = 'myfile.txt';
$fileContent = "web d practical file.";

$file = fopen($filename, 'w');

fwrite($file, $fileContent);

fclose($file);

echo "File created and content written.\n";

$file = fopen($filename, 'a');

$additionalContent = "\n Additional text appended to the file.";

fwrite($file, $additionalContent);

fclose($file);

echo "Data appended to the file.\n";

?>
