<?php
require_once "dbh.inc.php";
session_start();

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $domain = $_POST["domain"];
    if (isset($email) && !empty($email) && isset($domain) && !empty($domain)){

        
        $query = $conn->query("select domain from requests where email_address='$email';");

        $result  = $query->fetch(PDO::FETCH_ASSOC);

        $_SESSION['domainrequest'] = $result['domain'];
        
        header("Location: ../interest.php?mode=alter");
    }
}