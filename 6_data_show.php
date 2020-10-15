<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane usera</title>
  </head>
  <body>
    <h3>Dane wprowadzone w formularzu</h3>
    <?php
    echo '<pre>',print_r($_GET),'</pre>';
    $pass=$_GET['password'];
    $color=$_GET['color'];
    switch($color)
    {
      case 'r':
      $color='czerwony';
      break;
      case 'g':
      $color='zielony';
      break;
      case 'b':
      $color='niebieski';
      break;
    }
    if(isset($_GET[regulamin]))
    {
      $regulamin='Regulamin został zatwierdzony';
    }
    else
    {
      $regulamin='Regulamin nie został zatwierdzony';
    }

    echo<<< DATA
      Login: $_GET[login]<br>
      Hasło: {$_GET['password']}<br>
      Hasło: $pass<br>
      Ulubiony kolor: $color<br>
      $regulamin<br>  

    DATA;
    ?>
  </body>
</html>
