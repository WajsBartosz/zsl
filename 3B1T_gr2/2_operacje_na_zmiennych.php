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
  $y = 1;
  echo $x <=> $y;
  $result = $x <=> $y;
  echo $result;

 ?>
