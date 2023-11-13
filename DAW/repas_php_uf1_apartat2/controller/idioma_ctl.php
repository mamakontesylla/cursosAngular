<?php

include "crearCookie.php";

$idioma = $_REQUEST['idioma'];

// Actualitzem el valor de la cookie amb l'idioma rebut del formulari
// Si la cookie no existeix la crea, si no la modifica
crearCookie("idioma", $idioma);

// Redirigim a la pàgina amb el contingut, segons l'idioma escollit

if ($idioma == 'Català') {
    header("Location: ../view/pagina_cat.php");
} elseif ($idioma == 'Castellano') {
    header("Location: ../view/pagina_cas.php");
} elseif ($idioma == 'English') {
    header("Location: ../view/pagina_eng.php");
}

?>
