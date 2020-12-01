<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta http-equiv="Content-Language" content="pl">
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>

    <?php
    require_once 'functions.php';
      setlocale(LC_ALL, 'PL_pl');
      $dayoftheyear=date('z');
      $weekoftheyear=date('W');
      $date1=strftime("%d %B %Y");
      $time1=date('H:i:s');
      $day=strftime("%A");
      $date=date('Y-m-d');
      $time=date('G:i');
      $nodicy=nodicy();
      $duteoty=duteoty($nodicy);
       echo <<< FORM
       <p>Data i czas</p>
       <form method="post">
       <input type="date" name="date" value="$date"><br><br>
       <input type="time" name="time" value="$time"><br><br>
       <input type="text" name="day" value="$day"><br><br>
       <input type="text" size="30"  name="datetimeday" value="$date1, $time1 | $day"><br><br>
      </form>
      FORM;
      echo <<< list
        <ul>
          <li>Number of days in current year:$nodicy </li>
          <li>Day of the year: $dayoftheyear </li>
          <li>Week of the year: $weekoftheyear</li>
          <li>Days unlit the end of the year: $duteoty </li>
        </ul>
      list;
    ?>


  </body>
</html>
