<?php

include "esborrarCookie.php";

// esborrem l'idioma.
esborrarCookie("idioma");

// esborrem el nom d'usuari
esborrarCookie("user");

// Tornem a l'Index
header("Location: ../index.php");
?>
