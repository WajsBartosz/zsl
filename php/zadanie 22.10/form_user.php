<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="formularz">
    (*) Required Fields
    <form action="./form_user_data.php" method="post">
      Account Type *
      <input type="radio" name="acc" value="Personal Account" required>Personal Account
      <input type="radio" name="acc" value="Business Account" required>Business Account<br><br>
      First Name*<input type="text" name="name" pattern=[A-ZĄĘŚŻŹĆÓŃŁ][a-ząęśżźćńóŁ]{2,10} required><br><br>
      Last name*<input type="text" name="surname" pattern=[A-ZĄĘŚŻŹĆÓŃŁ][a-ząęśżźćńóŁ]{2,20} required><br><br>
      Country/Region*<select name="select" required>
        <option value="Polska">Polska</option>
        <option value="USA">USA</option>
        <option value="Grecja">Grecja</option>
      </select><br><br>
      Street Address*<input type="text" name="adres1" required><br><br>
      Street Address 2<input type="text" name="adres2"><br><br>
      City*<input type="text" name="miasto"><br><br>
      State/Provice*<select name="select2" required>
        <option value="Wielkopolskie">wielkopolskie</option>
        <option value="Zachodniopomorskie">zachodniopomorskie</option>
        <option value="Małopolskie">małopolskie</option>
      </select><br><br>
      ZIP/Postal Code*<input type="text" name="zip" required pattern=[0-9]{5}>
      <h6>Only used for questions related to your order.</h6>
      Phone number*<input type="text" name="telefonix" required pattern=[0-9]{9}>
      <input type="submit" value="wyslij">


    </form>
  </div>
  </body>
</html>
