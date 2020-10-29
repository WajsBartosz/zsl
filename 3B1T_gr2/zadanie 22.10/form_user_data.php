<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $acc=$_POST['acc'];
      $name=$_POST['name'];
      $surname=$_POST['surname'];
      $kraj=$_POST['select'];
      $adres1=$_POST['adres1'];
      $adres2=$_POST['adres2'];
      $miasto=$_POST['miasto'];
      $kod=$_POST['zip'];
      $kod1=substr($kod,0,2);
      $kod2=substr($kod,2);
      $woj=$_POST['select2'];
      $tel=$_POST['telefonix'];
      if(!empty($adres2))
      {
      echo <<< formularz
        Konto: $acc<br>
        Imię i nazwisko: $name $surname<br>
        Kraj: $kraj<br>
        Adres 1: $adres1<br>
        Adres 2: $adres2<br>
        Kod pocztowy i miasto: $miasto $kod1-$kod2<br>
        Województwo: $woj<br>
        Numer telefonu: $tel
formularz;
}
    else{
      echo <<< formularz
        Konto: $acc<br>
        Imię i nazwisko: $name $surname<br>
        Kraj: $kraj<br>
        Adres 1: $adres1<br>
        Kod pocztowy i miasto: $miasto $kod1-$kod2<br>
        Województwo: $woj<br>
        Numer telefonu: $tel
formularz;
    }
     ?>
  </body>
</html>
