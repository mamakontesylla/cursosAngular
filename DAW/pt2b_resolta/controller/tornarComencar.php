<?php
session_start();

// esborrem la session de les frases
//unset($_SESSION['frases']);

// esborrem totes les sessions
session_unset();

// Tornem a l'Index
header("Location: ../index.php");
?>
