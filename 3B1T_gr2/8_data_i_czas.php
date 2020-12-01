<?php
  echo 'dzień-miesiąc-rok:  ',date('d-m-y'),'<br>'; //19-11-20
  echo date('d-M-Y'),'<br>'; //19-Nov-2020
  echo date('d-F-Y'),'<br>'; //19-November-2020

  echo date('G:i:s'),'<br>'; //9:19:15
  echo date('H:i:s'),'<br>'; //09:19:15
  echo date('G:i:sa'),'<br>'; //15:19:48pm


  setlocale(LC_TIME, "PL_pl");
  echo strftime("%d %B %Y"); // 19 listopad 2020

  ?>
  <script>
    setTimeout(function(){location.reload();},1000);
  </script>


<?php
//getdate()
  $date= getdate();
  // echo $date
  echo '<pre>';
  print_r($date);
  echo '</pre>';
  echo 'Dzień roku: ', $date['yday'], '<br>';

//rok przestępny
 echo date("L"),'<br>';
 if (date("L"))
 {
   echo "Rok przestępny";
 }


 ?>
