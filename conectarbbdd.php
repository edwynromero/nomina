<?php
	$enlace = @mysql_connect('localhost', 'root', '') or
    die('Could not connect: ' . mysql_error());
	$bd_seleccionada = mysql_select_db('facturacrm', $enlace);
if (!$bd_seleccionada) {
    die ('No se puede usar la base de datos : ' . mysql_error());
}
?>
	
	
	