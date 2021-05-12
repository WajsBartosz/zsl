<?php 
 session_start();
 require_once './connect.php';
    // print_r($_POST);
    foreach ($_POST as $key => $value) {
      // echo "$value ";  
      if (empty($value)){
          //header('location:../11_customers.php');
          $_SESSION['error']= 'Wypełnij wszystkie dane!';
          echo "<script>history.back()</script>";
          exit();
      }
    }

    $connect->close();


?>