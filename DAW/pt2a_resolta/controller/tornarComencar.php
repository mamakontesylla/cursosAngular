<?php
include "esborrarCookie.php";

// esborrem la cookie de les frases
esborrarCookie("frases");

// Tornem a l'Index
header("Location: ../index.php");
?>
