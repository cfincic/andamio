<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Andamio Eventos</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
          <div id="menu_container">
            <input type="button" value="Alta de Evento"
            onclick="location.href='alta_evento_form.html'"/>
          </div>
          
<div id="list_container">

<?php
require_once("evento.php");
require_once("core/settings.php");
require_once("core/config_db.php");
require_once("core/db.php");



	$col = new ColeccionEventos();
	$col->get_coleccion();
	
	foreach($col->eventos as $eve) {
            echo $eve->titulo . " - ";
			echo "<a href='editar_evento.php?id=" . $eve->evento_id ."'>editar<a>" . " - ";
			echo "<a href='eliminar_evento.php?id=" . $eve->evento_id ."'>eliminar<a>";
			echo "</br>";
        } 
		
?>

</div>
        
</div>

<img id="bottom" src="bottom.png" alt="">

<div id="footer">Desarrollado por arCode</div>
	</body>
</html>