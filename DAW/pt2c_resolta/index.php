<?php
session_start();

// comprovem si estem loguejats
if (isset($_SESSION['userName'])) {
  // Redirigim a successful
  header("Location: view/successful.php");
}
else {
  // Redirigim al formulari de login
  header("Location: view/form_login.php");
}
?>
