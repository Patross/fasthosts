<?php
include_once "dbh.inc.php";

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

                $query = $conn->query("select id from fasthosts.domains where `suffix`='$domain';");
                $result = $query->fetch(PDO::FETCH_ASSOC);
                $domainId = $result['id'];

            if ($_GET['mode'] == "new") {
                
                $query = $conn->prepare("insert into fasthosts.requests(:email_address,:telephone,:first_name,:last_name,:request_date,:domain_id)
                             values(?,?,?,?,NOW(),?);");
                $query->execute(array(
                    ':email_address' => $email,
                    ':telephone' =>$telephone,
                    ':first_name' => $firstName,
                    ':last_name' => $lastName,
                    ':request_date' => date("Y-m-d"),
                    ':domain_id' => $domainId

                ));

            } else {
                $query = $conn->prepare("update fasthosts.requests set
                 `email_address`=':email_address', `telephone`=:telephone, `first_name`=:first_name,
                  `last_name`=:last_name, `request_date`=:request_date,`domain_id`=:domain_id where `email_address`=:email_address;");
            }
            $query->execute(array(
                ':email_address' => $email,
                ':telephone' =>$telephone,
                ':first_name' => $firstName,
                ':last_name' => $lastName,
                ':request_date' => date("Y-m-d"),
                ':domain_id' => $domainId

            ));
        }       
    }
}