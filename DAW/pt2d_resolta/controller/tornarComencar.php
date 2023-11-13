<?php
include "esborrarCookie.php";

// esborrem les cookies de l'aplicació
esborrarCookie("nomCognoms");
esborrarCookie("visitesComarques");
esborrarCookie("comarcaSeleccionada");

// Tornem a l'Index
header("Location: ../");
?>
