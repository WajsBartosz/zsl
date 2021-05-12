<?php
require_once './scripts/walec.php';
echo <<< walec
<h2>Walec</h2>
<img src="img/walec.png">
<hr>
walec;

if (!isset($_POST['r']) || !isset($_POST['h']))
{
  echo <<< FORM
    <h2>Dane</h2>
    <form method="post">
    <input type="number" name="r" placeholder="r"><br><br>
    <input type="number" name="h" placeholder="h"><br><br>
    <input type="submit" value="Wyślij">
    </form>
    <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
  FORM;
}


else {
  $r=$_POST['r'];
  $h=$_POST['h'];
  if (is_numeric($r)==false || is_numeric($h)==false)
  {
    echo <<< FORM
      <h2>Dane</h2>
      <form method="post">
      <input type="number" name="r" placeholder="a"><br><br>
      <input type="number" name="h" placeholder="h"><br><br>
      <input type="submit" value="Wyślij">
      </form>
      Dane podane w formularzu muszą być liczbami!<br><br>
      <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
    FORM;
  }
  else if ($r<=0 || $h<=0)
  {
    echo <<< FORM
      <h2>Dane</h2>
      <form method="post">
      <input type="number" name="r" placeholder="a"><br><br>
      <input type="number" name="h" placeholder="h"><br><br>
      <input type="submit" value="Wyślij">
      </form>
      Dane podane w formularzu muszą być liczbami dodatnimi<br><br>
      <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
    FORM;
  }

  else {
    $polep=polep($r);
    $poleb=poleb($r,$h);
    $polec=polec($polep,$poleb);
    $objetosc=objetosc($r,$h);

  echo <<< FORM
    <h2>Dane</h2>
    <form method="post">
    <input type="number" name="r" value=$r><br><br>
    <input type="number" name="h" value=$h><br><br>
    <input type="submit" value="Wyślij">
    </form>
  FORM;


  echo "Pole podstawy: ",number_format($polep,2,'.',''), "cm","<sup>2</sup><br><br>";
  echo "Pole powierzchni bocznej: ",number_format($poleb,2,'.',''),"cm","<sup>2</sup><br><br>";
  echo "Pole powierzchni całkowitej: ",number_format($polec,2,'.',''),"cm","<sup>2</sup><br><br>";
  echo "Objętość: ",number_format($objetosc,2,'.',''), "cm","<sup>3</sup><br><br>";
  echo <<< POWROT
  <a href="3_zadanie_formularze_geometria.html">Powrót do strony głownej</a>
  POWROT;

}
}
 ?>
