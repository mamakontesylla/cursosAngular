<html>
    <head>
        <title>Selecció d'idioma amb sessions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
session_start();

if (isset($_SESSION['idioma'])) {
  if ($_SESSION['idioma'] == 'Català') {
        $inici = 'Inici';
  } elseif ($_SESSION['idioma'] == 'Castellano') {
        $inici = 'Inicio';
  } elseif ($_SESSION['idioma'] == 'English') {
        $inici = 'Start';
  } else {
        $inici = 'Inici';
  }
} else {
    $inici = 'Inici';
}

echo '<a href="../index.php">' . $inici . '</a>&nbsp';

if (isset($_SESSION['idioma'])) {
  if ($_SESSION['idioma'] == 'Català') {
        echo '<a href="pagina_cat.php">Contingut</a><br>';
      } elseif ($_SESSION['idioma'] == 'Castellano') {
        echo '<a href="pagina_cas.php">Contenido</a><br>';
      } elseif ($_SESSION['idioma'] == 'English') {
        echo '<a href="pagina_eng.php">Content</a><br>';
  }
}
?>
