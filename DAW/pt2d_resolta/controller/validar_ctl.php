<?php
// Incloem la funcio per poder crear cookies
include "crearCookie.php";

// dni's valids
$valids = array('10000000A', '20000000B', '30000000C');

// recollim els valors enviats del formulari
$dni = $_POST['dni'];
$nom = $_POST['nom'];
$cognoms = $_POST['cognoms'];

// cerquem el dni enviat per comprovar si es valid
$trobat = false;

foreach ($valids as $valid) {
  if ($valid == $dni) {
    $trobat = true;
  }
}

if ($trobat) {
// hem de crear la cookie nomCognoms i redireccionar al menu
  $nomCognoms = [
    'nom' => $nom,
    'cognoms' => $cognoms
  ];
  crearCookie("nomCognoms", serialize($nomCognoms));
  
  header('Location: ../view/menu.php');
} else {
  echo 'DNI no vàlid';
  echo '<br><br><a href="../index.php">Torna</a>';
}

?>
