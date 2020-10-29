<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>

    <?php
    if (!empty($_GET['surname']))     //empty sprawdza czy jest puste a isset czy jest wypelnione, ! powoduje przeciwienstwo danej komendy
    {
      ob_clean();
      $surname=ucwords(strtolower(trim($_GET['surname'])));
      $name=ucwords(strtolower(trim($_GET['name'])));
      echo "Imię i naziwsko: $name  $surname <hr>";
      echo "<a href=./5_formularz_2.php?>Powrót do formularzu</a>";
    }
    else
    {
      echo <<<FORM
      <form method="get">
        Nazwisko:   <input type="text" name="surname" autofocus></input><br><br>
        Imię:   <input type="text" name="name"><br><br></input>
        <input type="submit" value="Wyślij"><hr>
      </form>
    FORM;
    }

     ?>

  </body>
</html>
