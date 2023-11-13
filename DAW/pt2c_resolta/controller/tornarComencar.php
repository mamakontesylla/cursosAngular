<?php
include "esborrarCookie.php";

// esborrem la cookie del nom d'usuari
esborrarCookie("user");

// Tornem a l'Index
header("Location: ../index.php");
?>
