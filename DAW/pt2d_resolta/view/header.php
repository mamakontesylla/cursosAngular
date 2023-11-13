<html>
    <head>
        <title>Frases cookie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        // mostrem un missatge de benvinguda a partir de les dades de la cookie nomCognoms
        if (isset($_COOKIE['nomCognoms'])) {
            $nomCognoms = unserialize($_COOKIE['nomCognoms']);
            $nom = $nomCognoms['nom'];
            $cognoms = $nomCognoms['cognoms'];
            echo '<h3>Benvingut ' . $nom . ' ' . $cognoms . ' !</h3>';
        }
        ?>