<?php

// Incloem el header
include 'header.php';
?>

<h2>Guardar frases en una cookie</h2>
<h3>Frases introduïdes:</h3>

<?php
// Comprovem si existeix la cookie de les frases
  if (isset($_COOKIE['frases'])) {

    //llegim la cookie
    //unserialize converteix a format array de PHP
    $array = unserialize($_COOKIE['frases']);

    //recorrem l'array per mostrar les frases
    foreach ($array as $frase) {
      echo $frase . '<br>';
    }
  }
?>

<br>
<a href="../index.php">Inici</a>

<?php
if (isset($_COOKIE['frases'])) {
?>
<br>
<a href="../controller/tornarComencar.php">Esborrar cookies</a>
<?php
}

// Incloem el footer
include 'footer.php';
?>
