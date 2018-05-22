<?php
require_once "dbh.inc.php";
session_start();

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    if (isset($email) && !empty($email)){        
        header("Location: ../interest.php?mode=alter");
    }
}