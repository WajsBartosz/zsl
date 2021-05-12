<?php
function polep($r){
  $polep=pi()*pow($r,2);
  return $polep;
}
function poleb($r,$h){
  $poleb=2*pi()*$r*$h;
  return $poleb;
}
function polec($polep,$poleb){
  $polec=2*$polep+$poleb;
  return $polec;
}
function objetosc($r,$h){
  $objetosc=pi()*pow($r,2)*$h;
  return $objetosc;
}

 ?>
