<?php
require_once './scripts/szescian.php';
echo <<< szescian
<h2>Sześcian</h2>
<img src="img/szescian.png">
<hr>
szescian;

if (!isset($_POST['a']))
{
  echo <<< FORM
    <h2>Dane</h2>
    <form method="post">
    <input type="number" name="a" placeholder="a"><br><br>
    <input type="submit" value="Wyślij">
    </form>
    <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
  FORM;
}


else {
  $a=$_POST['a'];
  if (is_numeric($a)==false)
  {
    echo <<< FORM
      <h2>Dane</h2>
      <form method="post">
      <input type="number" name="a" placeholder="a"><br><br>
      <input type="submit" value="Wyślij">
      </form>
      Dane podane w formularzu muszą być liczbami!<br><br>
      <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
    FORM;
  }
  else if ($a<=0)
  {
    echo <<< FORM
      <h2>Dane</h2>
      <form method="post">
      <input type="number" name="a" placeholder="a"><br><br>
      <input type="submit" value="Wyślij">
      </form>
      Dane podane w formularzu muszą być liczbami dodatnimi<br><br>
      <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
    FORM;
  }

  else {
  $pole=pole($a);
  $objetosc=objetosc($a);
  $dlugosc=dlugosc($a);
  $wpisanej=wpisanej($a);
  $opisanej=opisanej($a);
  echo <<< FORM
    <h2>Dane</h2>
    <form method="post">
    <input type="number" name="a" value=$a><br><br>
    <input type="submit" value="Wyślij">
    </form>
  FORM;


  echo "Pole: ",number_format($pole,2,'.',''), "cm","<sup>2</sup><br><br>";
  echo "Objętość: ",number_format($objetosc,2,'.',''), "cm","<sup>3</sup><br><br>";
  echo "Długość przekątnej: ",number_format($dlugosc,2,'.',''),"cm","<br><br>";
  echo "Promień kuli wpisanej w sześcian: ",number_format($wpisanej,2,'.',''), "cm","<br><br>";
  echo "Promień kuli opisanej na sześcianie: ",number_format($opisanej,2,'.',''), "cm","<br><br>";
  echo <<< POWROT
  <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>

  POWROT;
}
}
 ?>
