<?php
<<<<<<< HEAD
	$enlace = @mysql_connect('localhost', 'root', '') or
    die('Could not connect: ' . mysql_error());
	$bd_seleccionada = mysql_select_db('facturacrm', $enlace);
if (!$bd_seleccionada) {
    die ('No se puede usar la base de datos : ' . mysql_error());
}
?>
	
	
	
=======
	mysql_connect('localhost', 'root', '') or
    die('No se puede conectar: ' . mysql_error());
	mysql_select_db('facturacrm');
	?>
>>>>>>> 116ed878b09cc9332565f04bd048aca28ef11752
