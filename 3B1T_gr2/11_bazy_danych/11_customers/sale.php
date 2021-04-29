<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    require_once './connect.php';
    ?>
</head>
<body>
    <h3>Sale</h3>
    <?php 
    if(!$connect->connect_errno){
    $sql= "SELECT * FROM `sales`";
    $result=$connect->query($sql);
    ECHO <<< TABLE
    <table>
        <tr>
            <th>customer id</th>
            <th>date</th>
            <th>shipping</th>
            <th>pick up date</th>
        </tr>
    TABLE;
    
    while ($sale = $result->fetch_assoc()){
    echo <<< SALE
        <tr>
        <td>$sale[client_id]</td>
        <td>$sale[date]</td>
        <td>$sale[shipping]</td>
        <td>$sale[pick_up_date]</td>
        </tr>
        SALE;
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