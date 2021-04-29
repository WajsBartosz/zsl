<?php 
    require_once "./connect.php";
    foreach($_POST as $key=>$value){
        ${$key}=$value;
        //echo "$key $value";
    }
    
    $country="select * from `countries` where `country` like '$kraj'";
    $result=$connect->query($country);
    while($panstwo=$result->fetch_assoc())
    {
        $tmp=$panstwo['country_id'];
    }
    $sql="INSERT INTO `states` (`state_id`, `country_id`, `state`) VALUES (NULL, $tmp, '$woj')";
    $result2=$connect->query($sql);
    header('location: ../wajs_bartosz.php');

    $connect->close();
?>