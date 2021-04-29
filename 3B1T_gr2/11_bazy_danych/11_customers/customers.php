<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    require_once './connect.php';
    ?>
</head>
<body>
    <h3>Klienci</h3>
    <?php 
    if(!$connect->connect_errno){
    $sql= "select `name`, `surname`,`countries`.`countryName` as `kraj`,`states`.`state` as `wojewodztwo`,`cities`.`city` as `miasto`,`nip`,`postalcode`
    from `customers`
    inner join `cities`
    on `customers`.`cityid`=`cities`.`city_id`
    inner join `states`
    on `cities`.`state_id`=`states`.`state_id`
    inner join `countries`
    on `states`.`country_id`=`countries`.`country_id`";
    $result=$connect->query($sql);
    
    ECHO <<< TABLE
    <table>
        <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Kraj</th>
        <th>Województwo</th>
        <th>Kod pocztowy</th>
        <th>Miasto</th>
        <th>NIP</th>
        <tr>
    TABLE;
    
    while ($customer = $result->fetch_assoc()){
    $postalcode=substr($customer['postalcode'],0,2)."-".substr($customer['postalcode'],2,3);
    echo <<< CUSTOMER
        <tr>
            <td>$customer[name]</td>
            <td>$customer[surname]</td>
            <td>$customer[kraj]</td>
            <td>$customer[wojewodztwo]</td>
            <td>$postalcode</td>
            <td>$customer[miasto]</td>
            <td>$customer[nip]</td>
        </tr>
        CUSTOMER;
    }
    echo "</table>";
    }
    else{
        echo "No connection with database<br>Error: ";
        $connect->connect_errno;
    }
    ?>



    <a href="./shop.php">Back to main site</a>
</body>
</html>