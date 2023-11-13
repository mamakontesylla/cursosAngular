<?php

// Incloem el header
include 'header.php';

?>
<h2>Introduir una frase</h2>

<form action="../controller/controller.php" method="post">
    Escriu una frase: <input type="text" name="frase" /><br />
    <input type="submit" value="Enviar" />
</form>

<?php
// Incloem el footer
include 'footer.php';
?>
