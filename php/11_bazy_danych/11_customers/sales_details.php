<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales details</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    require_once './connect.php';
    ?>
</head>
<body>
<h3>Sales details</h3>
<?php 
    if(!$connect->connect_errno){
    $sql= "SELECT * FROM `sales_details`";
    $result=$connect->query($sql);
    ECHO <<< TABLE
    <table>
        <tr>
            <th>transaction number</th>
            <th>product id</th>
            <th>quantity</th>
            <th>price</th>
            <th>discount</th>
        </tr>
    TABLE;
    
    while ($sales_details = $result->fetch_assoc()){
    echo <<< CUSTOMER
        <tr>
        <td>$sales_details[transaction_no]</td>
        <td>$sales_details[product_id]</td>
        <td>$sales_details[quantity]</td>
        <td>$sales_details[price]</td>
        <td>$sales_details[discount]</td>
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