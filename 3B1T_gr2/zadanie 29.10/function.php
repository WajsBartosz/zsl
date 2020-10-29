<?php
function suma($x,$y){
  $wynik=$x+$y;
  return $wynik;
}
function roznica($x,$y){
  $wynik=$x-$y;
  return $wynik;
}
function iloczyn($x,$y){
  $wynik=$x*$y;
  return $wynik;
}
function iloraz($x,$y){
  if ($y!=0)
  {
  $wynik=$x/$y;
  return $wynik;
  }
  else
  {
  echo <<<js
  <script>alert("Nie dziel przez 0");</script>
  js;
  }
}





 ?>
