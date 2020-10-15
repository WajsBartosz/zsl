<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanko</title>
  </head>
  <body>
    <table>

    <form method="get" action="./6_zadanie_data.php">
    <tr><th>  Name<input type="text" name="Name"><br><br>
      Sex<input type="radio" name="Sex" value="Mężczyzna">Mężczyzna
      <input type="radio" name="Sex" value="Kobieta">Kobieta<br><br>
      Eye color<select name="color">
        <option>Brązowe</option>
        <option>Niebieskie</option>
        <option>Zielone</option>
        <option>Czerwone</option>
      </select>
      <br><br>
      Check all that apply<br><input type="checkbox" name="wzrost">Ponad 190cm<br>
      <input type="checkbox" name="waga" >Ponad 100 kg<br><br>
      Opisz swoje umiejętności:<br>
      <textarea name="text" rows="10" cols="30">
    </textarea>
    <br><br>
    <input type="submit" value="Wyślij">

    </form>
  </table>
  </body>
</html>
