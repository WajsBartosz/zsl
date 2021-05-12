<?php
session_start();
 $_SESSION['obudowa']= 200; 
 $_SESSION['kartagraficzna']= 2000;
 $_SESSION['plytaglowna']= 500;
 $_SESSION['XSX']= 2500;
 $_SESSION['monitor']= 700;
 $_SESSION['klawiatura']= 200;
 $_SESSION['myszka'] = 100;
 $_SESSION['podkladka'] = 30;

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep</title>
</head>
<body>
    <h2>Sklep z elektronika</h2>
    <table>
    <tr>Cena:</tr>
    <tr><td>obudowa pc</td><td>200zł</td></tr>
    <tr><td>karta graficzna</td><td>2000zł</td></tr>
    <tr><td>płyta główna</td><td>500zł</td></tr>
    <tr><td>Xbox series X</td><td>2500zł</td></tr>
    <tr><td>Monitor</td><td>700zł</td></tr>
    <tr><td>Myszka</td><td>100zł</td></tr>
    <tr><td>Klawiatura</td><td>200zł</td></tr>
    <tr><td>Podładka</td><td>30zł</td></tr>
    <table><br><br>
    <div>
    <form action="store.php" method="POST">
        <input type="number" name="obudowa" placeholder="obudowa"><br><br>
        <input type="number" name="kartagraficzna" placeholder="karta graficzna"><br><br>
        <input type="number" name="plytaglowna" placeholder="plyta glowna"><br><br>
        <input type="number" name="xsx" placeholder="Xbox series X"><br><br>
        <input type="number" name="monitor" placeholder="monitor"><br><br>
        <input type="number" name="myszka" placeholder="myszka"><br><br>
        <input type="number" name="klawiatura" placeholder="klawiatura"><br><br>
        <input type="number" name="podkladka" placeholder="podkladka"><br><br>
        <input type="submit" id="button">
    </form>
</div>

</body>
</html>
