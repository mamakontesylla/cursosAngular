<?php

session_start();

// Incloem el header
include 'header.php';
?>

<h2>Guardar frases en una session</h2>
<h3>Frases introduïdes:</h3>

<?php
// Comprovem si existeix la session de les frases
  if (isset($_SESSION['frases'])) {

    //llegim la session
    //unserialize converteix a format array de PHP
    $array = unserialize($_SESSION['frases']);

    //recorrem l'array per mostrar les frases
    foreach ($array as $frase) {
      echo $frase . '<br>';
    }
  }
?>

<br>
<a href="../index.php">Inici</a>

<?php
if (isset($_SESSION['frases'])) {
?>
<br>
<a href="../controller/tornarComencar.php">Esborrar dades</a>
<?php
}

// Incloem el footer
include 'footer.php';
?>
