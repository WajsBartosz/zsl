<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name=$_GET['Name'];
    $sex=$_GET['Sex'];
    $eyecolor=$_GET['color'];
    if (isset($_GET['waga']))
    {
      $waga='Ważysz ponad 100 kg';
    }
    else
    {
      $waga='Nie ważysz ponad 100 kg';
    }
    if (isset($_GET['wzrost']))
    {
      $wzrost='Masz ponad 190cm';
    }
    else
    {
      $wzrost='Nie masz ponad 190cm';
    }
    $umiejetnosci=$_GET['text'];
    echo <<<DATA
    Name: $name<br>
    Sex: $sex<br>
    Eye color: $eyecolor<br>
    Wzrost: $wzrost<br>
    Waga: $waga<br>
    Twoje umiejętności: $umiejetnosci<br>
    DATA;
    ?>
  </body>
</html>
