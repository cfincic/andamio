
<?php

require_once("evento.php");
require_once("core/settings.php");
require_once("core/config_db.php");
require_once("core/db.php");

	$evento = new Evento();
	$evento->evento_id = isset($_POST['id']) ? $_POST['id'] : 0;
	$evento->titulo = $_POST['element_1'];
	$evento->textocorto = $_POST['element_2'];
	$evento->textolargo = $_POST['element_3'];
	$evento->img = $_POST['element_4'];
	$evento->textolink = $_POST['element_5'];
	$evento->linkeo = $_POST['element_6'];

	print_r ($evento);
	
	$evento->save();

	header("Location:ver_eventos.php");

		
?>
