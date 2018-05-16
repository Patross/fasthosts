<?php
require_once "dbh.inc.php";

if (isset($_POST["submit"])) {
    if (isset($_POST["firstName"]) && !empty($_POST["firstName"]) &&
        isset($_POST["lastName"]) && !empty($_POST["lastName"]) &&
        isset($_POST["email"]) && !empty($_POST["email"]) &&
        isset($_POST["domain"]) && !empty($_POST["domain"]) &&
        isset($_POST["telephone"]) && !empty($_POST["telephone"])) {
        
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $domain = $_POST["domain"];
        $telephone = $_POST["telephone"];
        $date = date("Y-m-d");

        if (strlen($firstName) >0 &&
            strlen($firstName) >0 &&
            strlen($email) >5 &&
            strlen($firstName) >3 &&
            strlen($telephone) >10) {
            
            $query = $conn->query("insert into fasthosts.requests(`email_address`,`domain`,`telephone`,`first_name`,`last_name`,`request_date`) values('$email','$domain','$telephone','$firstName','$lastName','$date')");
    }
}
}