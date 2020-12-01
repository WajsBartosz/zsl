<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ilość członków rodziny</title>
  </head>
  <body>
    <?php if (isset($_POST['send'])){
      echo "<h4>Dane członków rodziny:</h4><br>";
      $tmp=1;
      for ($i=1;$i<=count($_POST);$i++)
      {
        $count='person'.$i;
        if (!empty($_POST[$count]))
        {
          echo "Osoba $tmp: ",$_POST[$count],"<br><br>";
          $tmp++;
        }
      }
    }
    else if(!empty($_POST['family'])) {
      ?>
      <h4>Ilość członków rodziny: <?php echo $_POST['family']?></h4>
      <?php
        $x=$_POST['family'];
        echo '<form method="post">';
        for ($i=1; $i<=$x;$i++){
          echo "<input type=\"text\" name=\"person$i\" placeholder=\"Osoba $i\"><br><br>";
        }
        echo '<input type="submit" name="send" value="wyślij">';
        echo '</form>';
      ?>
      <?php
    }else {
      header('location: ./');
    }
    ?>

  </body>
</html>
