<?php

if(isset($_GET['ID'])){
    require_once "connection.php";
    $id = $_GET['ID'];

    $deleteContactQuery = "delete from contacts where ID = '$id'";
    $deleteContact = $conn->query($deleteContactQuery);

    if($deleteContact == TRUE){
        header("Location: index.php");
    }
}
