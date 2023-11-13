<?php

// importem el fitxer on hi ha definit l'array $dades_valles_oriental
include 'dades_valles_oriental.php';

// mostrem un missatge de benvinguda a partir de les dades de la cookie nomCognoms
if (isset($_COOKIE['nomCognoms'])) {
  $nomCognoms = unserialize($_COOKIE['nomCognoms']);
  $nom = $nomCognoms['nom'];
  $cognoms = $nomCognoms['cognoms'];
  echo '<h3>Benvingut ' . $nom . ' ' . $cognoms . ' !</h3>';
}

// recollim el valor del municipi seleccionat
$id_municipi = $_POST['municipi'];

// comprovem si l'usuari ha seleccionat mostrar tots
if ($id_municipi == 0) {
  $mostra_tot = true;
} else {
  $mostra_tot = false;
}

if ($mostra_tot) {
  echo '<h3>Mostrant les dades de tots els municipis del Vallès Oriental</h3>';
  echo '<ul>';
  foreach ($dades_valles_oriental as $value) {
    $municipi = $value[0];
    $poblacio = $value[1];
    echo '<li>' . $municipi . ': ' . $poblacio . ' hab.</li>';
  }

} else {
  // cerquem les dades del municipi enviat
  $municipi = $dades_valles_oriental[$id_municipi][0];
  $poblacio = $dades_valles_oriental[$id_municipi][1];

  //mostrem les dades del municipi
  echo '<p>El municipi ' . $municipi . ' té ' . $poblacio . ' habitants.</p>';

}

echo '<br><br><a href="../view/menu.php">Inici</a>';

?>
