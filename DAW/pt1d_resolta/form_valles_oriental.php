<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
<title>Consulta dades Vallès Oriental</title>
</head>
<body>
<?php
// mostrem un missatge de benvinguda a partir de les dades enviades per GET
$nom = $_GET['nom'];
$cognoms = $_GET['cognoms'];
echo '<h3>Benvingut ' . $nom . ' ' . $cognoms . ' !</h3>';
?>

<h2>CONSULTA DADES VALLÈS ORIENTAL</h2>

<form name="form1" method="post" action="valles_oriental_ctl.php">
  <p>Municipi:
<?php

  // importem el fitxer on hi ha definit l'array $dades_valles_oriental
  include 'dades_valles_oriental.php';

  echo '<select name="municipi">';
  echo '<option value="0" selected>Mostrar tots</option>';
  foreach ($dades_valles_oriental as $key => $value) {
    $municipi = $value[0];
    echo '<option value="' . $key . '">' . $municipi . '</option>';

  }
  echo '</select>';

?>
  </p>
  <p>
    <input type="submit" name="Submit" value="Consultar">
  </p>
  <?php
   echo '<input type="hidden" name="nom" value="' . $nom . '">';
   echo '<input type="hidden" name="cognoms" value="' . $cognoms . '">';
  ?>
</form>

<?php
echo '<br><br><a href="menu.php?nom=' . $nom . '&cognoms=' . $cognoms . '">Torna</a>';
?>
</body>
</html>
