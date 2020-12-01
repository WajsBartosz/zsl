<?php
function nodicy(){
  if(date("L")==1)
  {
    return $nodicy=366;
  }
  else
  {
    return $nodicy=365;
  }

}
function duteoty($nodicy){
  $date= getdate();
  return $duteoty=$nodicy-$date['yday'];

}


 ?>
