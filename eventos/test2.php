
<?php

require_once("evento.php");
require_once("core/settings.php");
require_once("core/config_db.php");
require_once("core/db.php");

	$evento = new Evento();
	$evento->titulo = "Probando titulo";
	$evento->textocorto = "Probando";
	$evento->textolargo = "Probando";
	$evento->img = "Probando";

	print_r ($evento);
	
	$evento->save();

	echo $evento->evento_id;

		
?>
