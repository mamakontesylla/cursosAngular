<?php

// importem el fitxer on hi ha definit l'array $dades_comarques
include 'dades_comarques.php';

// mostrem un missatge de benvinguda a partir de les dades enviades per GET
$nom = $_GET['nom'];
$cognoms = $_GET['cognoms'];
echo '<h3>Benvingut ' . $nom . ' ' . $cognoms . ' !</h3>';

// recollim el valor de la comarca seleccionada
$comarca = $_GET['comarca'];

// comprovem el checkbox
if (isset($_GET['mostra_tot'])) {
  $mostra_tot = true;
} else {
  $mostra_tot = false;
}

if ($mostra_tot) {
  echo '<h3>Mostrant les dades demogràfiques de totes les comarques</h3>';
  echo '<ul>';
  foreach ($dades_comarques as $key => $value) {
    $comarca = $key;
    $poblacio = $value;
    echo '<li>' . $comarca . ': ' . $poblacio . ' hab.</li>';
  }

} else {
  // cerquem les dades de la comarca enviada
  $poblacio = $dades_comarques[$comarca];

  //mostrem les dades de la comarca
  echo '<p>La comarca ' . $comarca . ' té ' . $poblacio . ' habitants.</p>';

}

echo '<br><br><a href="menu.php?nom=' . $nom . '&cognoms=' . $cognoms . '">Inici</a>';

?>
