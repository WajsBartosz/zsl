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

    foreach ($_POST as $key => $value){
        //echo "$key: $value<br>";
        // dynamiczne tworzenie zmiennych
        $$key = $value;
        //echo "$value ";
    }

    // echo $name, $surname, $zip, $city, $birthday, $height, $nip;
    $sql="INSERT INTO `customers`(`id`, `cityid`, `name`, `surname`, `nip`, `postalCode`, `birthday`, `height`, `create_date`) VALUES (NULL,'$city','$name','$surname','$nip','$zip','$birthday','$height',current_timestamp())";
    $connect->query($sql);
    //header('location: ../11_customers.php');
    if($connect->affected_rows!= -1){
        header("location: ../11_customers.php?add_user=1&name=$name&surname=$surname");
    }
    else{
        header('location: ../11_customers.php?add_user=0');
    }

    $connect->close();


?>