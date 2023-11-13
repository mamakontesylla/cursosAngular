<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
<title>Consulta dades comarques</title>
</head>
<body>
<?php
// mostrem un missatge de benvinguda a partir de les dades enviades per GET
$nom = $_GET['nom'];
$cognoms = $_GET['cognoms'];
echo '<h3>Benvingut ' . $nom . ' ' . $cognoms . ' !</h3>';
?>

<h2>CONSULTA DADES PER COMARQUES</h2>

<form name="form1" method="get" action="comarques_ctl.php">
  <p>Comarca:
<?php

  // importem el fitxer on hi ha definit l'array $dades_comarques
  include 'dades_comarques.php';

  echo '<select name="comarca">';
  foreach ($dades_comarques as $key => $value) {
    if ($key=='Vallès Oriental') {
      echo '<option value="' . $key . '" selected>' . $key . '</option>';
    } else {
      echo '<option value="' . $key . '">' . $key . '</option>';
    }
  }
  echo '</select>';

?>
  </p>
  <p>
    <input type="checkbox" name="mostra_tot"> Mostrar totes les comarques<br>
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
