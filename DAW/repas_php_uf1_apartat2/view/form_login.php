<?php
// Si la cookie del nom existeix, la utilitzarem per recordar el input
if (isset($_COOKIE['user'])) {
    // Assignem el valor a una nova variable per usar-la despres i marquem el checkbox
    $box = "checked";
    $nom = $_COOKIE['user'];
} else {
    // Sinó, el nom estarà buit i el checkbox desmarcat
    $box = "";
    $nom = "";
}
// Usarem la variable 'nom' per al 'VALUE' del input del usuari
// La variable 'box' definirà si el checkbox del usuari ha d'estar marcat o no
?>

<h3>Formulari de Login</h3>
<form action="../controller/login_ctl.php" method='post'>
    Usuari: <input type='text' name='user' value="<?php echo $nom; ?>" placeholder="nom d'usuari" /><br />
    Password <input type='password' name='password' placeholder="contrassenya" /><br />
    Recordar Usuari: <input type="checkbox" name="rec_user" <?php echo $box; ?>><br />
    <input type='submit' value="Enviar" />
</form>
<?php
  include 'footer.html';
?>
