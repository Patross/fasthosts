<?php 
require_once 'dbh.inc.php';
session_start();


function GoBack()
{
    header("Location: ../domains.php");
}
if(isset($_POST["submit"])){
    if(!empty($_POST["domain"])){
        $domain = $_POST["domain"];
        $query = $conn->query("Select * from domains where suffix like '$domain';");

        $result = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['domains'] = $result;
        header("Location: ../domains.php?suffix=$domain");
    }
    else{
        GoBack();
    }
}