<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,tr,td,th{
    border: solid 1px grey;
    border-collapse: collapse;
    padding: 10px;
    text-align: center;
}   
        #red{
            color: red;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    require_once './scripts/connect.php';
    ?>
</head>
<body>
    <h3>Klienci</h3>
    <?php 
    if(!$connect->connect_errno){
    $sql= "select `id`,`name`, `surname`,`countries`.`countryName` as `kraj`,`states`.`state` as `wojewodztwo`,`cities`.`city` as `miasto`,`nip`,`postalcode`
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
        <th>Id</th>
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
            <td>$customer[id]</td>
            <td>$customer[name]</td>
            <td>$customer[surname]</td>
            <td>$customer[kraj]</td>
            <td>$customer[wojewodztwo]</td>
            <td>$postalcode</td>
            <td>$customer[miasto]</td>
            <td>$customer[nip]</td>
            <td><a href="./scripts/delete.php?id=$customer[id]">Usuń</a></td>
            <td><a href="./11_customers.php?update_id=$customer[id]">Aktualizuj</a></td>

        </tr>
        CUSTOMER;
        
    }
    echo "</table><hr><h4>Dodawanie użytkownika</h4>";
    if (isset($_SESSION['error'])){
        echo '<div id="red"><h4>'.$_SESSION['error']."<h4></div>";
        unset($_SESSION['error']);
    }
    if(isset($_GET['add_user'])){
        if($_GET['add_user']=1)
        echo "Pomyślnie dodano użytkownika: $_GET[name] $_GET[surname]<hr>";
        else
        echo "Błędnie uzupełniono dane<hr>";
    }
    echo <<<FORMADDUSER
        <form action="./scripts/add_user.php" method="POST">
        <input type="text" name="
        ="name" placeholder="Imię"><br><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br><br>
        <input type="number" name="postalCode" placeholder="Kod pocztowy"><br><br>
    FORMADDUSER;
// wyświetlenie miasta pobranego z bazy danych z tabeli cities
$sq1 = "SELECT * FROM cities";
$result = $connect->query($sq1);
echo '<SELECT name="city">';
while ($city = $result->fetch_assoc ()) {
echo "<option value=\"$city[city_id]\">$city[city]</option>";
}
echo "</SELECT><br><br>";
// <input type="text" name="city" placeholder="Miasto"><br><br>
echo <<<FORMADDUSER
        <input type="date" name="birthday" placeholder="Data urodzenia"><br><br>
        <input type="number" name="height" placeholder="Wzrost"><br><br>
        <input type="number" name="nip" placeholder="NIP"><br><br>
        <input type="submit" value="Dodaj użytkownika">
        </form>
    FORMADDUSER;

    if(isset($_GET['update_id'])){
        echo "<hr>Aktualizacja użytkownika id: $_GET[update_id]<br><br>";
        $sql="select * from `customers`
        inner join `cities`
        on `customers`.`cityid`=`cities`.`city_id`
        where id=$_GET[update_id]";
        $result=$connect->query($sql);
        $user=$result->fetch_assoc();
        echo <<<UPDATEUSER
        <form action="./scripts/update_user.php" method="POST">
        <input type="text" name="name" value="$user[name]"><br><br>
        <input type="text" name="surname" value="$user[surname]"><br><br>
        <input type="number" name="postalCode" value="$user[postalCode]"><br><br>
    UPDATEUSER;
// wyświetlenie miasta pobranego z bazy danych z tabeli cities
$sq1 = "SELECT * FROM cities";
$result = $connect->query($sq1);
echo '<SELECT name="city">';
while ($city = $result->fetch_assoc ()) {
echo "<option value=\"$city[city_id]\">$city[city]</option>";
}
echo "<option selected=\"selected\">$user[city]</option>";
echo "</SELECT><br><br>";
// <input type="text" name="city" placeholder="Miasto"><br><br>
echo <<<UPDATEUSER
<input type="date" name="birthday" value="$user[birthday]"><br><br>
<input type="number" name="height" value="$user[height]"><br><br>
<input type="number" name="nip" value="$user[nip]"><br><br>
<input type="submit" value="Aktualizuj">
</form>
UPDATEUSER;
    }
    }
    else{
        echo "No connection with database<br>Error: ";
        $connect->connect_errno;
    }
    ?>



</body>
</html>