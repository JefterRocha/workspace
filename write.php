<?php

    $dbPath = 'database.txt';

    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    
    $write = fopen($dbPath, 'a');
    fwrite($write, "\n$name|$lastName|$email");
    
    echo "Dados inseridos no banco...<br>";
    echo "$name | $lastName | $email";
?>
