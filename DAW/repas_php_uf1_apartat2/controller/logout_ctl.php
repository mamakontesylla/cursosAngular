<?php
session_start();

include "esborrarCookie.php";

// esborrem les variables de sessió
session_unset();

// esborrem la cookie de l'idioma.
esborrarCookie("idioma");

// Tornem a l'Index
header("Location: ../");
?>
