<?php

include "esborrarCookie.php";

// esborrem l'idioma.
esborrarCookie("idioma");

// Tornem a l'Index
header("Location: ../index.php");
?>
