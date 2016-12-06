<?php
	mysql_connect('localhost', 'root', '') or
    die('No se puede conectar: ' . mysql_error());
	mysql_select_db('facturacrm');
	?>