<?php
require_once './scripts/ostroslup.php';
echo <<< ostroslup
<h2>Ostrosłup</h2>
<img src="img/ostroslup.png">
<hr>
ostroslup;

if (!isset($_POST['a']) || !isset($_POST['h']) || !isset($_POST['h1']))
{
  echo <<< FORM
    <h2>Dane</h2>
    <form method="post">
    <input type="number" name="a" placeholder="a"><br><br>
    <input type="number" name="h" placeholder="h"><br><br>
    <input type="number" name="h1" placeholder="H"><br><br>
    <input type="submit" value="Wyślij">
    </form>
    <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
  FORM;
}


else {
  $a=$_POST['a'];
  $h=$_POST['h'];
  $h1=$_POST['h1'];

  if (is_numeric($a)==false || is_numeric($h)==false || is_numeric($h1)==false)
  {
    echo <<< FORM
      <h2>Dane</h2>
      <form method="post">
      <input type="number" name="a" placeholder="a"><br><br>
      <input type="number" name="h" placeholder="h"><br><br>
      <input type="number" name="h1" placeholder="H"><br><br>
      <input type="submit" value="Wyślij">
      </form>
      Dane podane w formularzu muszą być liczbami!<br><br>
      <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
    FORM;
  }
  else if ($a<=0 || $h<=0 || $h1<=0)
  {
    echo <<< FORM
      <h2>Dane</h2>
      <form method="post">
      <input type="number" name="a" placeholder="a"><br><br>
      <input type="number" name="h" placeholder="h"><br><br>
      <input type="number" name="h1" placeholder="H"><br><br>
      <input type="submit" value="Wyślij">
      </form>
      Dane podane w formularzu muszą być liczbami dodatnimi<br><br>
      <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
    FORM;
  }

  else {
    $pole=pole($a,$h);
    $objetosc=objetosc($a,$h1);

  echo <<< FORM
    <h2>Dane</h2>
    <form method="post">
    <input type="number" name="a" value=$a><br><br>
    <input type="number" name="h" value=$h><br><br>
    <input type="number" name="h1" value=$h1><br><br>
    <input type="submit" value="Wyślij">
    </form>
  FORM;
  echo "Pole: ",number_format($pole,2,'.',''),"cm","<sup>2</sup><br><br>";
  echo "Objętość: ",number_format($objetosc,2,'.',''), "cm","<sup>3</sup><br><br>";
  echo <<< POWROT
  <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
  POWROT;
}
}
 ?>
