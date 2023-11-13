<?php
// Incloem el header
include 'header.php';

// Si la cookie de l'idioma existeix, serà l'idioma per defecte
if (isset($_COOKIE['idioma'])) {
    $idiomaDefecte = $_COOKIE['idioma'];
}
?>

<h3>Selecció d'idioma amb cookies</h3>
<form name="form" method="post" action="../controller/idioma_ctl.php">
    Selecciona un idioma:
    <select name="idioma">
        <?php
        //definim en un array els idiomes
        $arrayIdiomes = array('Català', 'Castellano', 'English');

        foreach ($arrayIdiomes as $idioma) {

            echo '<option value = "' . $idioma . '" ';
            if (isset($idiomaDefecte)) {
              if ($idioma == $idiomaDefecte) echo 'selected';
            }
            echo '>' . $idioma . '</option>';
        }
        ?>

    </select>
    <br />

    <input type='submit' value="Envia" />
</form>

<?php
// Incloem el footer
include 'footer.html';
?>
