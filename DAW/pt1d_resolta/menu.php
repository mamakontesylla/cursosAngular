<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Dades demogràfiques</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="es" />
	</head>
	<body>
			<?php
			// mostrem un missatge de benvinguda a partir de les dades enviades per GET
			$nom = $_GET['nom'];
			$cognoms = $_GET['cognoms'];
			echo '<h3>Benvingut ' . $nom . ' ' . $cognoms . ' !</h3>';
			echo '<a href="form_comarques.php?nom=' . $nom . '&cognoms=' . $cognoms . '">Dades per comarques</a><br>';
			echo '<a href="form_valles_oriental.php?nom=' . $nom . '&cognoms=' . $cognoms . '">Dades del Vallès Oriental</a><br>';
			?>

			<br><a href="./">Inici</a>
	</body>
</html>
