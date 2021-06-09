<?php 
session_start();
require_once './scripts/connect.php';
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
  <?php 
  if ($_SESSION['logged']==false){
  ?>
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
<div class="container2">
<p>Witamy na twarzKSIAZKA!

twarzKSIAZKA tworzy technologie i usługi, które umożliwiają użytkownikom nawiązywanie kontaktów, budowanie społeczności oraz rozwijanie działalności. Niniejszy Regulamin reguluje sposób korzystania przez użytkownika z twarzKSIAZKAa, z wyjątkiem sytuacji, w których wyraźnie stwierdzimy, że zastosowanie mają odrębne postanowienia (a nie niniejszy Regulamin).

Nie pobieramy opłat za korzystanie z twarzKSIAZKA ani innych produktów i usług objętych niniejszym Regulaminem.

Nie sprzedajemy danych osobowych użytkowników reklamodawcom ani nie udostępniamy reklamodawcom informacji, które umożliwiają bezpośrednią identyfikację użytkowników (takich jak imię i nazwisko, adres e-mail czy inne dane kontaktowe) bez wyraźnej zgody użytkowników. Zamiast tego reklamodawcy mogą nam powiedzieć, jakiego rodzaju odbiorcom chcą pokazać swoje reklamy i wyświetlimy te reklamy osobom, które mogą być nimi zainteresowane.

Nasze Zasady dotyczące danych wyjaśniają, jak gromadzimy i wykorzystujemy dane osobowe użytkowników w celu określenia pewnych reklam, które użytkownicy oglądają i jak świadczymy wszystkie inne opisane poniżej usługi. Użytkownik może też w dowolnym momencie przejść do ustawień, aby zweryfikować opcje do wyboru w kwestii sposobu wykorzystywania jego danych.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  <?php 
    }
    else if($_SESSION['logged']==true){
      $sql="select * from `użytkownicy` where `id`=$_SESSION[loggedu]";
      $result=$connect->query($sql);
    $użytkownicy = $result->fetch_assoc();
  ?>
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
        <a class="nav-link" href="profile.php">Witaj <?php echo "$użytkownicy[Imie]"?></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="rules.php">Regulamin</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="./scripts/logout.php">Wyloguj się</a>
        </li>
      </li>
    </ul>
  </div>
</nav>
<div class="container2">
      <p>Witamy na twarzKSIAZKA!

twarzKSIAZKA tworzy technologie i usługi, które umożliwiają użytkownikom nawiązywanie kontaktów, budowanie społeczności oraz rozwijanie działalności. Niniejszy Regulamin reguluje sposób korzystania przez użytkownika z twarzKSIAZKAa, z wyjątkiem sytuacji, w których wyraźnie stwierdzimy, że zastosowanie mają odrębne postanowienia (a nie niniejszy Regulamin).

Nie pobieramy opłat za korzystanie z twarzKSIAZKA ani innych produktów i usług objętych niniejszym Regulaminem.

Nie sprzedajemy danych osobowych użytkowników reklamodawcom ani nie udostępniamy reklamodawcom informacji, które umożliwiają bezpośrednią identyfikację użytkowników (takich jak imię i nazwisko, adres e-mail czy inne dane kontaktowe) bez wyraźnej zgody użytkowników. Zamiast tego reklamodawcy mogą nam powiedzieć, jakiego rodzaju odbiorcom chcą pokazać swoje reklamy i wyświetlimy te reklamy osobom, które mogą być nimi zainteresowane.

Nasze Zasady dotyczące danych wyjaśniają, jak gromadzimy i wykorzystujemy dane osobowe użytkowników w celu określenia pewnych reklam, które użytkownicy oglądają i jak świadczymy wszystkie inne opisane poniżej usługi. Użytkownik może też w dowolnym momencie przejść do ustawień, aby zweryfikować opcje do wyboru w kwestii sposobu wykorzystywania jego danych.</p>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  <?php 
    }
  ?>
</html>