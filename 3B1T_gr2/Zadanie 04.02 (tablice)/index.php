
<!DOCTYPE html>
<html lang="PL">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tablice</title>
</head>
<body>
   <?php
   if(!isset($_POST['submit'])){
      echo <<< FORM
         Podaj ilość swoich ulubionych kolorów:<br>
         <form method="post">
            <input type="number" name="color">
            <input type="submit" name="submit">
         </form>
      FORM;
   }
   else if(isset($_POST['submit'])) {
      for ($i=1;$i<=$_POST['color'];$i++){
      
         echo <<< FORM
         <form method="POST" action="./color.php">
         <label for="fcolors">Kolor nr. $i: </label>
         <input type=text name="fcolors[]">
         <br><br>
         FORM;
      }
      echo "<input type='submit' value='wyślij'></form>";
   }
   
   ?>
   
</body>
</html>
