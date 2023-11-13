<html>
    <head>
        <title>Selecció d'idioma amb cookies</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
<?php
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

echo '<a href="../index.php">' . $inici . '</a>&nbsp';

if (isset($_COOKIE['idioma'])) {
  if ($_COOKIE['idioma'] == 'Català') {
        echo '<a href="pagina_cat.php">Contingut</a><br>';
      } elseif ($_COOKIE['idioma'] == 'Castellano') {
        echo '<a href="pagina_cas.php">Contenido</a><br>';
      } elseif ($_COOKIE['idioma'] == 'English') {
        echo '<a href="pagina_eng.php">Content</a><br>';
  }
}
?>
</body>
