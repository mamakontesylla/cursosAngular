<?php
session_start();

if (isset($_SESSION['userName'])) {
  header("Location: view/form_idioma.php");
} else {
  header("Location: view/form_login.php");
}
?>
