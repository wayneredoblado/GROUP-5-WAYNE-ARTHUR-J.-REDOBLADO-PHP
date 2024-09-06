<?php

function read_file($test) {
    if (file_exists($test)) {
        $content = file_get_contents($test);
        return $content;
    } else {
        return "File does not exist.";
    }
}

function write_file($test, $content) {
    if (file_put_contents($test, $content)) {
        return "Content written to file successfully.";
    } else {
        return "Failed to write content to file.";
    }
}


function check_file_exists($test) {
    if (file_exists($test)) {
        return "File exists.";
    } else {
        return "File does not exist.";
    }
}


function read_file_lines($test) {
    if (file_exists($test)) {
        $lines = file($test, FILE_IGNORE_NEW_LINES);
        return $lines;
    } else {
        return "File does not exist.";
    }
}


$test = 'group5.txt';
$content = 'BSIT 3L GROUP 5!';

echo "Checking if file exists: " . check_file_exists($test) . "\n";
echo "Writing to file: " . write_file($test, $content) . "\n";
echo "Reading file: " . read_file($test) . "\n";
echo "Reading file lines:\n";
$lines = read_file_lines($test);
foreach ($lines as $line) {
    echo $line . "\n";
}

?>