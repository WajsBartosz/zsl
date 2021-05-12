<?php
    require_once "./connect.php";
    $id=$_GET['id'];
    $sql="delete from `clients` where `client_id`=$id";
    $result=$connect->query($sql);
    if($connect->affected_rows){
        header('location: ../wajs_bartosz.php');
    }

    $connect->close();

?>