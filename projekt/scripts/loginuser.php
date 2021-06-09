<?php 
 session_start();
 require_once './connect.php';

    foreach ($_POST as $key => $value){
        $$key = $value;
    }

    $sql="SELECT `login`,`haslo`,`id` FROM `użytkownicy` WHERE `login`='$login' and `haslo`='$password'";
    $result=$connect->query($sql);
    $użytkownicy = $result->fetch_assoc();
        if($użytkownicy['login']==$login && $użytkownicy['haslo']==$password){
            $_SESSION['logged']=true;
            $_SESSION['loggedu']=$użytkownicy['id'];
            header("location: ../index.php?$_SESSION[loggedu]");
    }
    else{
        $_SESSION['faillogin']="Niepoprawny login lub hasło!";
        header('location: ../login.php');
    }
    $connect->close();


?>