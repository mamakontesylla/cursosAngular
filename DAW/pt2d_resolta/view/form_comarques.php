<?php
// Incloem el header
include 'header.php';

// Incloem la funcio per poder crear cookies
include "../controller/crearCookie.php";

// incloem el fitxer on hi ha definit l'array $dades_comarques
include '../controller/dades_comarques.php';

// mostrem un missatge amb el nombre de visites a la pagina
// llegim la cookie per saber quantes visites portem fins ara
if (isset($_COOKIE['visitesComarques'])) {
  $visites = $_COOKIE['visitesComarques'];
  $visites++;
} else {
//si la cookie no existeix, es la primera visita
  $visites = 1;
}

echo '<h4>' . $visites . ' visites a aquesta pàgina</h4>';

// actualitzem la cookie de les visites
crearCookie("visitesComarques", $visites);

// la comarca seleccionada per defecte será la que hem guardat en la cookie corresponent
// si la cookie no existeix, serà el Vallès Oriental
if (isset($_COOKIE['comarcaSeleccionada'])) {
  $comarcaSeleccionada = $_COOKIE['comarcaSeleccionada'];
} else {
  $comarcaSeleccionada = 'Vallès Oriental';
}
?>

<h2>CONSULTA DADES PER COMARQUES</h2>

<form name="form1" method="get" action="../controller/comarques_ctl.php">
  <p>Comarca:
<?php
  echo '<select name="comarca">';
  foreach ($dades_comarques as $key => $value) {
    if ($key==$comarcaSeleccionada) {
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
</form>

<br><br><a href="menu.php">Torna</a>

<?php
// Incloem el footer
include 'footer.php';
?>
