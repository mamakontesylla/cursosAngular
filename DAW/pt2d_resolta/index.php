<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
  <head>
    <title>Dades demografiques</title>
  </head>
  <body>
    <h2>DADES DEMOGRAFIQUES</h2>
    <form name="form1" method="post" action="controller/validar_ctl.php">
      <p>DNI</p>
      <p>
        <input type="text" name="dni" required placeholder="introdueix el teu DNI">
      </p>
      <p>Nom</p>
      <p>
        <input type="text" name="nom">
      </p>
      <p>Cognoms</p>
      <p>
        <input type="text" name="cognoms">
      </p>
      <p>
        <input type="submit" name="Submit" value="Enviar">
      </p>
    </form>

<?php
if (isset($_COOKIE['nomCognoms']) || isset($_COOKIE['visitesComarques']) || isset($_COOKIE['comarcaSeleccionada'])) {
  echo '<br><br><a href="controller/tornarComencar.php">Esborrar cookies</a>';
}
?>
  </body>
</html>
