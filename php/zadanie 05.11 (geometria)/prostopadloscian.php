<?php
require_once './scripts/prostopadloscian.php';
echo <<< PROSTOPADLOSCIAN
<h2>Prostopadłościan</h2>
<img src="img/prostopadloscian.png">
<hr>
PROSTOPADLOSCIAN;

if (!isset($_POST['a']) || !isset($_POST['b']) || !isset($_POST['c']))
{
  echo <<< FORM
    <h2>Dane</h2>
    <form method="post">
    <input type="number" name="a" placeholder="a"><br><br>
    <input type="number" name="b" placeholder="b"><br><br>
    <input type="number" name="c" placeholder="c"><br><br>
    <input type="submit" value="Wyślij">
    </form>
    <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
  FORM;
}


else {
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  if (is_numeric($a)==false || is_numeric($b)==false || is_numeric($c)==false)
  {
    echo <<< FORM
      <h2>Dane</h2>
      <form method="post">
      <input type="number" name="a" placeholder="a"><br><br>
      <input type="number" name="b" placeholder="b"><br><br>
      <input type="number" name="c" placeholder="c"><br><br>
      <input type="submit" value="Wyślij">
      </form>
      Dane podane w formularzu muszą być liczbami!<br><br>
      <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
    FORM;
  }

  else if ($a<=0 || $b<=0 || $c<=0)
  {
    echo <<< FORM
      <h2>Dane</h2>
      <form method="post">
      <input type="number" name="a" placeholder="a"><br><br>
      <input type="number" name="b" placeholder="b"><br><br>
      <input type="number" name="c" placeholder="c"><br><br>
      <input type="submit" value="Wyślij">
      </form>
      Dane podane w formularzu muszą być liczbami dodatnimi<br><br>
      <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
    FORM;
  }

  else {

  $pole=pole($a,$b,$c);
  $objetosc=objetosc($a,$b,$c);
  $dlugosc=dlugosc($a,$b,$c);


  echo <<< FORM
    <h2>Dane</h2>
    <form method="post">
    <input type="number" name="a" value=$a><br><br>
    <input type="number" name="b" value=$b><br><br>
    <input type="number" name="c" value=$c><br><br>
    <input type="submit" value="Wyślij">
    </form>
  FORM;


  echo "Pole: ",number_format($pole,2,'.',''),"cm","<sup>2</sup><br><br>";
  echo "Objętość: ",number_format($objetosc,2,'.',''),"cm","<sup>3</sup><br><br>";
  echo "Długość przekątnej: ",number_format($dlugosc,2,'.',''),"cm","<br><br>";
  echo <<< POWROT
  <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
  POWROT;


}
}
 ?>
