<?php
//credentials
    $host = 'localhost';
    $user = 'root';
    $pass = 'root';
    $db = 'phonebook';

    //Create a connection to the database
    $conn =  new mysqli($host, $user, $pass, $db);

    if ($conn->error){
        die('Could not connect to the database!');
    }
