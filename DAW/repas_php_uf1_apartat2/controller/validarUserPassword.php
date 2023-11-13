<?php
function validarUserPassword($a, $b) {
    // En aquest array hi ha les contrassenyes indexades amb el usuari (com si fos una BBDD)
    $usuaris = [
        'admin' => '123',
		'alumne' => '1234'
    ];
    // Si el valor de la casella indexada amb el nom del usuari (la password real)
    // es igual que la password introduïda retorna true, sino; false
    if ($usuaris[$a] == $b) {
        $ok = true;
    } else {
        $ok = false;
    }
	return $ok;
}
?>
