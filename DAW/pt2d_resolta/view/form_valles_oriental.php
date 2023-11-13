<?php
// Incloem el header
include 'header.php';

// importem el fitxer on hi ha definit l'array $dades_valles_oriental
include '../controller/dades_valles_oriental.php';

?>

<h2>CONSULTA DADES VALLÈS ORIENTAL</h2>

<form name="form1" method="post" action="../controller/valles_oriental_ctl.php">
  <p>Municipi:
<?php
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
</form>

<br><br><a href="menu.php">Torna</a>

<?php
// Incloem el footer
include 'footer.php';
?>
