<?php
session_start();

// Incloem la funcio per a comprovar usuaris
include "validarUserPassword.php";
include "crearCookie.php";
include "esborrarCookie.php";

// Si els Valors no estan plens no entrarem
if (!empty($_REQUEST['user']) && !empty($_REQUEST['password'])) {

    // Assignem els valors a noves variables
    $usuari = $_REQUEST['user'];
    $password = $_REQUEST['password'];

	// Si ha marcat la opció, crearem la cookie. Sinó, BORRAREM LA POSSIBLE cookie anterior
    if (isset($_REQUEST['rec_user'])) {
			crearCookie("user", $usuari);
    } else {
			esborrarCookie("user");
    }

    // Comprovem si user i pass coincideixen
    if (validarUserPassword($usuari, $password)) {
        // creem la variable de sessió per indicar que estem loguejats
        $_SESSION['userName'] = $usuari;

        // Redirigim a la selecció d'idioma
        header("Location: ../view/form_idioma.php");
    } else {

        // Si no coincidissin els valors, redirigirem a 'loginIncorrecte'
        header("Location: ../view/loginIncorrecte.php");
    }
} else {
    // Si el formulari no està complert, redirigirem a missing'
    header("Location: ../view/missing.php");
}
?>
