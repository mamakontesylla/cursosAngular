<?php

include "crearCookie.php";

    // Recollim la frase enviada del formulari
    $frase = $_REQUEST['frase'];

	// Si no existeix la cookie de les frases, l'hem de crear
    if (!isset($_COOKIE['frases'])) {

      //la cookie contindrà un array amb la frase que hem rebut
      $array = array($frase);
      crearCookie("frases", serialize($array));
    } else {

      //com que la cookie ja existeix, hem de llegir-la per obtenir l'array
      $array = unserialize($_COOKIE['frases']);
      //afegim la nova frase a l'array
      array_push($array, $frase);
      //sintaxi alternativa a array_push:
      //$array[] = $frase;
      //sobreescrivim la cookie
			crearCookie("frases", serialize($array));
    }

    // var_dump per comprovar l'array de les frases
    // var_dump($array); exit;

    header("Location: ../view/introduida.php");

?>
