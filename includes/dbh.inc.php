<?php
$servername = "patrossdev.ddns.net";
$username = "Patross";
$password = "P47r0551233";

try {
    $conn = new PDO("mysql:host=$servername;dbname=fasthostsPatross", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    // echo "Connection failed: " . $e->getMessage();
    }

