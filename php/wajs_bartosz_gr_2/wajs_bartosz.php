<!DOCTYPE html>
<html lang="pl">
<head>
    <style>
        td,table,th,tr{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    require_once "./scripts_bartosz/connect.php";
    ?>
</head>
<body>
    <h3>Klienci</h3>
    <?php
        if(!$connect->connect_errno){
            ECHO <<<TABLE
            <table>
                <tr>
                <th>Kod pocztowy</th>
                <th>Województwo</th>
                <th>Ulica</th>
                <th>Kraj</th>
                <th>Nazwisko</th>
                <th>Id</th>
                <tr>
            TABLE;
            $sql="select `postal_code` as `zip`, `state` as `wojewodztwo`, `street`, `country` as `kraj`,`surname`,`client_id`
            from `clients`
            inner join `cities`
            on `clients`.`city_id`=`cities`.`city_id`
            inner join `states`
            on `cities`.`state_id`=`states`.`state_id`
            inner join `countries`
            on `states`.`country_id`=`countries`.`country_id`";
            $result=$connect->query($sql);
            while($customer= $result->fetch_assoc()){
                $zip=substr($customer['zip'],0,2)."-".substr($customer['zip'],2,3);
                echo <<< CUSTOMER
                    <tr>
                        <td>$zip</td>
                        <td>$customer[wojewodztwo]</td>
                        <td>$customer[street]</td>
                        <td>$customer[kraj]</td>
                        <td>$customer[surname]</td>
                        <td>$customer[client_id]</td>
                        <td><a href="./scripts_bartosz/usun_wajs.php?id=$customer[client_id]">Usuń</a></td>
                    </tr>
                CUSTOMER;
            }
            ECHO <<< FORM
            </table><br><br><h3>Dodaj województwo</h3>
            <form method=post action="./scripts_bartosz/state_add.php">
            <input type="text" name="woj" placeholder="Województwo"><br><br>
            <select name="kraj" id="kraj">
        FORM;
            $sql2="select * from `countries`";
            $result2=$connect->query($sql2);
            while($country=$result2->fetch_assoc()){
                echo <<< countries
                    <option>$country[country]</option>
                countries;
            }
            echo "</select><br><br><input type='submit' value='dodaj województwo'>";
        }
        else{
            echo "Brak połączenia z bazą danych<br>Error: ";
            $connect->connect_errno;
        }
    
    
    
    
    
    $connect->close();
    ?>
</body>
</html>