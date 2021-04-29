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
    <h3>Customers</h3>
    <?php 
    if(!$connect->connect_errno){
    $sql= "SELECT * FROM `customers`";
    $result=$connect->query($sql);
    ECHO <<< TABLE
    <table>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>NIP</th>
            <th>ZIP code</th>
            <th>city</th>
            <th>address</th>
        </tr>
    TABLE;
    
    while ($customer = $result->fetch_assoc()){
    echo <<< CUSTOMER
        <tr>
        <td>$customer[name]</td>
        <td>$customer[surname]</td>
        <td>$customer[NIP]</td>
        <td>$customer[postal_code]</td>
        <td>$customer[city]</td>
        <td>$customer[address]</td>
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