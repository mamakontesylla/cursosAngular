<?php
session_start();

// esborrem la session de l'idioma
unset($_SESSION['idioma']);

// esborrem totes les sessions
//session_unset();

// Tornem a l'Index
header("Location: ../index.php");
?>
