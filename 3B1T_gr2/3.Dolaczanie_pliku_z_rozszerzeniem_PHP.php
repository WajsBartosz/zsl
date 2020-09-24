<!DOCTYPE html>
<html lang=PL dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Początek pliku
    <?php
    echo '<br>Include';
    include './3.1_file.php';
    include_once './3.1_file.php'; // Tylko raz sie doda plik

    echo '<br>Require';
    require './3.1_file.php'; // w require jezeli wystapi blad to przestanie
                              // wykonywac sie kod (fatal error)

    require_once './3.1_file.php' // tylko raz sue doda plik
    ?>
    Koniec pliku
  </body>
</html>
