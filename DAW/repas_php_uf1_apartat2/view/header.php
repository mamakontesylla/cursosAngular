<html>
    <head>
        <title>Selecció d'idioma amb cookies</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
session_start();

if (isset($_COOKIE['idioma'])) {
  if ($_COOKIE['idioma'] == 'Català') {
        $inici = 'Inici';
  } elseif ($_COOKIE['idioma'] == 'Castellano') {
        $inici = 'Inicio';
  } elseif ($_COOKIE['idioma'] == 'English') {
        $inici = 'Start';
  } else {
        $inici = 'Inici';
  }
} else {
    $inici = 'Inici';
}

// mostrem l'usuari loguejat
if (isset($_SESSION['userName'])) {
  echo '<b>' . $_SESSION['userName'] . '</b>&nbsp&nbsp&nbsp';
}

// mostrem link a inici
echo '<a href="../index.php">' . $inici . '</a>&nbsp';

// mostrem link a contingut
if (isset($_COOKIE['idioma'])) {
  if ($_COOKIE['idioma'] == 'Català') {
        echo '<a href="pagina_cat.php">Contingut</a>';
      } elseif ($_COOKIE['idioma'] == 'Castellano') {
        echo '<a href="pagina_cas.php">Contenido</a>';
      } elseif ($_COOKIE['idioma'] == 'English') {
        echo '<a href="pagina_eng.php">Content</a>';
  }
}

// mostrem link a logout
echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
echo '<a href="../controller/logout_ctl.php">Logout</a><br>';
?>
</body>
