<?php
  // wersja PHP 7.4.9
  echo PHP_VERSION,'<br>';

  // echo phpinfo();

  $potega = 2 ** 10;
  echo $potega;


  echo 'a'.'b'.'c'; // a+b+c wyświetli abc
  echo 'a','b','c<br>'; // wyświetli a wyświetli b wyświetli c

  // operatory bitowe
  // and &, or |, not ~, xor ^, <<, >>

$x = 0b1010;
echo "$x<br>"; //10
$x = $x << 1;
echo "$x<br>"; //10100(2) =>4+16=20

$x = $x >> 2; // 101(2) =>1+4=5
echo "$x<br>";

  // porównanie
  $x = 10;
  $y = 10.0;
  echo $x <=> $y;
  $result = $x <=> $y;
  echo "$result<br><hr>";


  $x=10;
  $x=10;

  if ($x==$y) {
    echo 'Zmienne są identyczne<br>';
  }
  else {
    echo 'Zmienne są nieidentyczne<br>';
  }

  echo gettype($x); // integer
  echo gettype($y), '<hr>'; // double

  ########################

  /*
  preiknrementacja ++$x  dodaje 1
  predekrementacja --$x  odejmuje 1
  postinkrementacja $x++ dodaje 1 dopiero po operacji nastepnego
  zmienienia wartosci zmiennej
  postdekrementacja $x-- odejmuje 1 dopiero po operacji nastepnego
  zmienienia wartosci zmiennej
  */

  $x=2;
  echo $x; //2
  $x=$x--;
  $x=$x+3;
  echo $x; //5
  $x=$x++;
  echo $x; //5
  $x=++$x;
  echo $x, '<br>'; //6
  $y=++$x;
  $y=++$x*2+3;
  echo $x, '<br>'; //8
  echo $y, '<hr>';  //19

  $x=2;
  echo $x++, '<br>'; // 2
  echo ++$x, '<br>'; // 4
  echo $x, '<br>'; // 4
  $y=$x++;
  echo $y, '<br>'; // 4
  $y=++$x;
  echo $y, '<br>'; // 6
  echo ++$y, '<br>'; // 7

  // operatory rzytowania
  // bool, int, float, string, array, object, unset

  $text='123abc';
  $text1=0;
  $text2=20;

  echo 'Typ danych zmiennej $text:', gettype($text), '<br>';
  $x=(int)$text;
  echo $x, '<br>';
  echo 'Typ danych zmiennej $text:', gettype($x), '<br>';
  echo 'Typ danych zmiennej $text:', gettype($text), '<br>';

  $x=(bool)$text1;
  echo $x; // false (0 nie wyswietla)


















 ?>
