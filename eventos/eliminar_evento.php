<?php

require_once("evento.php");
require_once("core/settings.php");
require_once("core/config_db.php");
require_once("core/db.php");

	$evento = new Evento();
	$evento->evento_id = $_GET['id'];	
	$evento->destroy();
	header("Location: ver_eventos.php");
		
?>
