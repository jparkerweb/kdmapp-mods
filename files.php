<?php
    // Specify the directory to scan for files
    $dir    = 'images/reference/Fightning Arts';
    // Store the scandir results in a variable
    $files = scandir($dir);
    // Encode the array in JSON and echo it
    header('Content-Type: application/json');
    echo json_encode($files);
?>
