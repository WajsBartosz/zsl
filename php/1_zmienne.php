<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
<?php
    $name='Janusz';
    $surname='Nowak';
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";
    // konkatenacja .
    echo "Nazwisko: $surname".'<hr>';


    // typy danych
    // boolean
      $prawda = true;
      $fałsz = false;

      echo $prawda; // =1
      echo $fałsz; // nic nie wyświetli

    // integer
      $calkowita = 20;
      $binarna = 0b1011; //11  0b na starcie
      $oct = 010; //8   0 na starcie
      $hex = 0xa; //10  0x na starcie

      echo "<hr>$calkowita<hr>";
      echo "$binarna<hr>";
      echo "$oct<hr>";
      echo "$hex<hr>";


    // składnia heredoc
    $name = 'Anna';
    $text = <<< ETYKIETA
      Imię; $name <br>
      Imię1; $name <hr>
ETYKIETA;

    echo $text;

    $surname='Kowal' ;
    echo <<< E
    Nazwisko: $surname<hr>
E;


    // składnia nowdoc
    // interpretuje calość jako tekst a nie wartość zmienną
    echo <<< 'E'
    Nazwisko: $surname<hr>
E;


    $city='Poznań';
    echo "Nazwa zmiennej; \$city, wartość zmiennej: $city" ;






    ?>
  </body>
</html>
