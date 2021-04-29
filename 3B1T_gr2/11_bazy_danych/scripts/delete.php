<?php
    // print_r($_GET);
    $id=$_GET['id'];
    $sql = "DELETE FROM `customers` WHERE `customers`.`id` = $id";
    //$sql = "DELETE FROM `customers` WHERE `customers`.`name` = 'JAN'";
    require_once "./connect.php";
    //mysqli_query($connect,$sql);
    //printf(mysqli_affected_rows($connect));
    $connect->query($sql);
    // echo $connect->affected_rows;
    if($connect->affected_rows){
        header('location: ../11_3_customers.php?delete=1');
    }else{
        header('location: ../11_3_customers.php?delete=0');
    }
    
    $connect->close();

?>