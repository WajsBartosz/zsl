<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    require_once './connect.php';
    ?>
</head>
<body>
    <h3>Products</h3>
    <?php 
    if(!$connect->connect_errno){
    $sql= "SELECT * FROM `products`";
    $result=$connect->query($sql);
    ECHO <<< TABLE
    <table>
        <tr>
            <th>product name</th>
            <th>list price</th>
            <th>weight</th>
            <th>color</th>

        </tr>
    TABLE;
    
    while ($product = $result->fetch_assoc()){
    echo <<< CUSTOMER
        <tr>
        <td>$product[product_name]</td>
        <td>$product[list_price]</td>
        <td>$product[weight]</td>
        <td>$product[color]</td>
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