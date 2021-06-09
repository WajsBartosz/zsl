<?php 
session_start();
?>
<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>twarzKSIAZKA</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: pink;">
        <a class="navbar-brand" href="index.php">twarzKSIAZKA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="register.php">Rejestracja</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="login.php">Logowanie</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="rules.php">Regulamin</a>
        </li>
      </li>
    </ul>
  </div>
</nav>
        <div id=register>
        <?php
        echo <<< FORMREGISTER
        <form action="./scripts/adduser.php" method="POST">
        <input type="text" name="login" placeholder="Login" required><br><br>
        <input type="password" name="password" placeholder="Hasło" required><br><br>
        <input type="text" name="email" placeholder="e-mail" required><br><br>
        <input type="text" name="name" placeholder="Imię" required><br><br>
        <input type="text" name="surname" placeholder="Nazwisko" required><br><br>
        <input type="date" name="birthday" placeholder="Data urodzenia" required><br><br>
        <select name="sex" required>
          <option value="" disabled selected hidden>Płeć</option>
          <option value="Mężczyzna">Mężczyzna</option>
          <option value="Kobieta">Kobieta</option>
        </select><br><br>
        <input type="submit" value="Zarejestruj się">
        </form>

        FORMREGISTER;
        
        ?>
        </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>