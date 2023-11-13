<?php

session_start();

// Incloem el header
include 'view/header.php';
?>

<h2>Guardar frases en una session</h2>
<a href="view/form.php">Introduir una frase</a>
<br>
<a href="view/list_frases.php">Veure totes les frases</a>

<?php
if (isset($_SESSION['frases'])) {
  // comptem la quantitat d'elements de l'arrat de frases
    $array = unserialize($_SESSION['frases']);
    $compta = count($array);
} else {
    $compta = 0;
}
echo '<br><br>' . $compta . ' frases introduïdes';
// Incloem el footer
include 'view/footer.php';
?>
