<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lekcja 6</title>
  </head>
  <body>
    <h4>Dane użytkownika - wprowadzanie</h4>
    <form action="./6_data_show.php" method="get">
      <input type="text" name="login" placeholder="Login"><br><br>
      <input type="password" name="password" placeholder="password"><br><br>
      <h3>Ulubiony kolor</h3>
      <input type="radio" name="color" value="r">Czerwony
      <input type="radio" name="color" value="g">Zielony
      <input type="radio" name="color" value="b" checked>Niebieski<br><br>
      <input type="checkbox" name="regulamin">Regulamin<br><br>
      <input type="submit" value="Wyślij dane">
    </form>
    <?php

    ?>
  </body>
</html>
