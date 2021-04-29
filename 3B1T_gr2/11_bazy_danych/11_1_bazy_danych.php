<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klienci</title>
</head>
<body>
    <h3>Klienci</h3>
    <?php 
        //połączenie z bazą danych
         // $connect= mysqli_connect("localhost","root","","zsl_3b1tg2");
        $connect= @new mysqli("localhost","root","","zsl_3b1tg2");
        // @- operator ignorowania błędów
            //print_r($connect);
        //echo "<hr>".$connect->connect_error."<br>";
        //echo "<hr>Error: ".$connect->connect_errno."<br>";

        /*
            0- prawidłowe połączenie z db
            2002- server
            1045- user
            1045- hasło 
            1049- nazwa db
        */

        $sql= "SELECT * FROM `customers`";
        $result= $connect->query($sql);
        
        while($row= $result->fetch_assoc()){
            // echo print_r($row);
            echo <<<SHOW
            Imię i nazwisko: $row[name] $row[surname], 
            data urodzenia: $row[birthday]
            wzrost: $row[height]<br>
            SHOW;
        }
        
        $connect->close();
    ?>
    
</body>
</html>