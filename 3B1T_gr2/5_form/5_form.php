<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Dane użytkownika</h4>
    <!---<form action='./5_form_dane.php' method="post" novalidate>--->
    <form action='./5_form_dane.php' method="post">
      <input type="text" name="surname" placeholder="Nazwisko"
      autofocus autocomplete="off" required
      pattern="[a-zA-ZąężźśćńółĄĘŻŹĆŚŃÓŁ]{2,20}"><br><br>
      <select name="gender">
        <option hidden disabled selected>Wybierz opcje</option>
        <option value="m">Mężczyzna</option>
        <option value="w">Kobieta</option><br><br>
      </select>

      <input type="submit" value="wyślij dane"><br><br>
    </form>
  </body>
</html>
