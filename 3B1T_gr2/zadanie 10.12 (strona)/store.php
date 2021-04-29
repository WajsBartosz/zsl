<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep z elektronika</title>
<body>
<?php
    $cena=0;
    $ilosc=0;
    $wart="";



    
    if(!empty($_POST['obudowa']))
    {
        $a=$_POST['obudowa'];
        $obudowa=$_POST['obudowa'] * $_SESSION['obudowa'];
        $ilosc+=$_POST['obudowa'];
        $cena+=$obudowa;
        if($a > 1)
        {
            $wart .= "<h2>Kupiłeś :<br><br> $a obudowy, </h2>";
        }
        else
        {
            $wart .= "<h2>Kupiłeś :<br><br> $a obudowę, </h2>";
        }
    }
    if(!empty($_POST['kartagraficzna']))
    {
        $b=$_POST['kartagraficzna'];
        $kartagraficzna=$_POST['kartagraficzna']* $_SESSION['kartagraficzna'];
        $ilosc+=$_POST['kartagraficzna'];
        $cena+=$kartagraficzna;
        if($b > 1)
        {
            $wart .= "<h2> $b karty graficzne, </h2>";
        }
        else
        {
            $wart .= "<h2> $b kartę graficzną, </h2>";
        }
    }
    if(!empty($_POST['plytaglowna']))
    {
        $c=$_POST['plytaglowna'];
        $plytaglowna=$_POST['plytaglowna']* $_SESSION['plytaglowna'];
        $ilosc+=$_POST['plytaglowna'];
        $cena+=$plytaglowna;
        if($c > 1)
        {
            $wart .= "<h2> $c płyt głównych, </h2>";
        }
        else
        {
            $wart .= "<h2> $c płytę główną, </h2>";
        }
    }
    if(!empty($_POST['xsx']))
    {
        $d=$_POST['xsx'];
        $xsx=$_POST['xsx'] * $_SESSION['xsx'];
        $ilosc+=$_POST['xsx'];
        $cena+=$xsx;
        if($d > 1)
        {
            $wart .= "<h2> $d Xbox series X, </h2>";
        }
        else
        {
            $wart .= "<h2> $d Xbox series X, </h2>";
        }
    }
    if(!empty($_POST['monitor']))
    {
        $e=$_POST['monitor'];
        $Monitor=$_POST['monitor'] * $_SESSION['monitor'];
        $ilosc+=$_POST['monitor'];
        $cena+=$Monitor;
        if($e > 1)
        {
            $wart .= "<h2> $e monitorów, </h2>";
        }
        else
        {
            $wart .= "<h2> $e monitor, </h2>";
        }
    }
    if(!empty($_POST['myszka']))
    {
        $f=$_POST['myszka'];
        $myszka=$_POST['myszka'] * $_SESSION['myszka'];
        $ilosc+=$_POST['myszka'];
        $cena+=$myszka;
        if($f > 1)
        {
            $wart .= "<h2> $f myszek, </h2>";
        }
        else
        {
            $wart .= "<h2> $f myszkę, </h2>";
        }
    }
    if(!empty($_POST['klawiatura']))
    {
        $g=$_POST['klawiatura'];
        $klawiatura=$_POST['klawiatura'] *  $_SESSION['klawiatura'];
        $ilosc+=$_POST['klawiatura'];
        $cena+=$klawiatura;
        if($g > 1)
        {
            $wart .= "<h2> $g klawiatur, </h2>";
        }
        else
        {
            $wart .= "<h2> $g klawiaturę, </h2>";
        }
    }
    if(!empty($_POST['podkladka']))
    {
        $h=$_POST['podkladka'];
        $podkladka=$_POST['podkladka'] * $_SESSION['podkladka'] ;
        $ilosc+=$_POST['podkladka'];
        $cena+=$podkladka;
        if($h > 1)
        {
            $wart .= "<h2> $h podkładki, </h2>";
        }
        else
        {
            $wart .= "<h2> $h podkładkę, </h2>";
        }
    }
    echo $wart;
    echo "<br>";
    echo "<h3>W sumie kupiłeś ".$ilosc." towarów w naszym sklepie!</h3>";
    echo "<h3><br>całkowity koszt wynosi: $cena zł</h3>";

    if($cena == 0){
        echo "<h3>Musisz coś kupić</h3>";
    }

?>





</body>
</html>