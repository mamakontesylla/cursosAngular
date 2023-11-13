<?php
session_start();

$idioma = $_REQUEST['idioma'];

// Actualitzem el valor de la session amb l'idioma rebut del formulari
// Si la session no existeix es crea, si no es modifica
$_SESSION['idioma'] = $idioma;

// Redirigim a la pàgina amb el contingut, segons l'idioma escollit

if ($idioma == 'Català') {
    header("Location: ../view/pagina_cat.php");
} elseif ($idioma == 'Castellano') {
    header("Location: ../view/pagina_cas.php");
} elseif ($idioma == 'English') {
    header("Location: ../view/pagina_eng.php");
}

?>
