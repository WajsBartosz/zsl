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
        require_once './connect.php';
        if (!$connect->connect_errno){
            $sql="SELECT *,`city`.`id` FROM `customers` inner join `city` on `customers`.`cityid`=`city`.`id` ";
            $result = $connect->query($sql);

            while($customer = $result->fetch_assoc()){
                echo <<< CUSTOMER
                Id: $customer[id]<br>
                Imię i nazwisko: $customer[name] $customer[surname]<br>
                Miasto: $customer[city]
                <hr>

                CUSTOMER;
            }


            $connect->close();
        }
        else{
            echo 'Błędne połączenie z bazą danych<br>Błąd: ',
            $connect->connect_errno;
        }
    ?>
    
</body>
</html>