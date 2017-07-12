<?php

require_once("evento.php");
require_once("core/settings.php");
require_once("core/config_db.php");
require_once("core/db.php");

	$evento = new Evento();
	$evento->evento_id = $_GET['id'];	
	$evento->get();
	//print_r ($evento);
		
?>

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
      <nav>
        <input type="button" value="Ver todos los eventos"
            onclick="location.href='ver_eventos.php'"/>
        </nav>
		<form id="form_901563" class="appnitro"  method="post" action="alta_evento.php">
					<div class="form_description">
			<h2>Alta de Evento</h2>
		  </div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Titulo </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value="<?php echo $evento->titulo; ?>"/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Descripcion corta </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value="<?php echo $evento->textocorto; ?>"/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Descripcion larga
 </label>
		<div>
			<textarea id="element_3" name="element_3" class="element textarea medium"><?php echo $evento->textolargo; ?></textarea> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Imagen nombre </label>
		<div>
			<input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value="<?php echo $evento->img; ?>"/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Titulo del link </label>
		<div>
			<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value="<?php echo $evento->textolink; ?>"/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">URL del link
 </label>
		<div>
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value="<?php echo $evento->linkeo; ?>"/> 
		</div> 
		</li>
        <input type="hidden" name="id" id="id" value="<?php echo $evento->evento_id; ?>" />
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="901563" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Grabar" />
		</li>
			</ul>
		</form>	
		<div id="footer">Desarrolado por arCode</div>
</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>