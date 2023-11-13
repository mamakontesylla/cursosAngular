<?php

session_start();

    // Recollim la frase enviada del formulari
    $frase = $_REQUEST['frase'];

	// Si no existeix la session de les frases, l'hem de crear
    if (!isset($_SESSION['frases'])) {

      //la session contindrà un array amb la frase que hem rebut
      $array = array($frase);
      $_SESSION['frases'] = serialize($array);
    } else {

      //com que la session ja existeix, hem de llegir-la per obtenir l'array
      $array = unserialize($_SESSION['frases']);
      //afegim la nova frase a l'array
      array_push($array, $frase);
      //sobreescrivim la session
			$_SESSION['frases'] = serialize($array);
    }

    // var_dump per comprovar l'array de les frases
    // var_dump($array); exit;

    header("Location: ../view/introduida.php");

?>
