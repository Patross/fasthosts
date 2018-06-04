<?php
require_once "dbh.inc.php";
session_start();

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    if (isset($email) && !empty($email)){
        $query = $conn->query("select * from requests where `email_address` = '$email';"); 
        $_SESSION['emailtoalter'] =  $result = $query->fetch(PDO::FETCH_ASSOC);
        header("Location: ../interest.php?mode=alter");
    }
}