<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link type="text/css" rel="stylesheet" href="/contacto/shadowbox.css"/>

<!-- Agrego ficheros -->
<script type="text/javascript" src="/contacto/jquery-1.6.4.min.js"></script><!-- Omitir si Jquery ya esta incluido -->
<script type="text/javascript" src="/contacto/shadowbox.js"></script>
<!-- Agrego ficheros -->
<script type="text/javascript">/* Inicializo y agrego las opciones que quiera, las pueden encontrar aqui http://www.shadowbox-js.com/options.html */
$().ready(function(){	
	Shadowbox.init( {
	handleOversize: "drag",
    modal: true
	});
	
 });
</script>

<title>Teatro Escuela Andamio 90</title>

	<style type="text/css">
		img{
		display: block;
		border:none;
		}
		body{
			background-image: url(modulo_verde.jpg);
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 12px;
			color: #FFF;
			margin-top: 0px;
		}
		.Estilo2 {font-size: 11px}
		.Estilo3 {color: #333333}
		.Estilo4 {font-size: 11px; color: #333333; }
		a:link {
			text-decoration: none;
		}
		a:visited {
			text-decoration: none;
		}
	</style>
</head>

<body>

<?php include("superior.php"); ?>

<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/contacto_header.jpg" width="750" height="120" border="0" usemap="#Map" /></td>
  </tr>
    <tr>
    <td bgcolor="#339A99">>inicio>contacto</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="Estilo4"><p align="center" class="Estilo3">&nbsp;</p>
      <p align="center" class="Estilo3">Muchas Gracias !</p>
    <p align="center" class="Estilo3">Personal de Andamio se contactará con Ud. a la brevedad.</p>
    <p align="center" class="Estilo3"><a href="contacto/contacto_gral.php">Si por bloqueos de su navegador no pudo visualizar el formulario de contacto</a></p>
    <p align="center" class="Estilo3"><a href="contacto/contacto_gral.php">Haga click aquí para accederlo.</a></p>
    <p align="center" class="Estilo3">&nbsp;</p></td>
  </tr>
  <tr bgcolor="#333333">
    <td>&nbsp;</td>
  </tr>
</table>

<?php include("inst/pie.php"); ?>

<script>
 window.setTimeout(function(){
        Shadowbox.open({
            content: "/contacto/contacto_gral.php",
            player: "iframe", 
			width: "640",
			height: "390",
			title: "Contacto",
          });
      }, 200);
</script>
 


<map name="Map" id="Map"><area shape="rect" coords="15,9,130,112" href="index.php" />
<area shape="rect" coords="641,22,749,42" href="teatro.php" />
<area shape="rect" coords="640,41,756,59" href="inst/quienes_somos.php" />
<area shape="rect" coords="640,59,747,75" href="boero.php" />
<area shape="rect" coords="639,75,748,95" href="contacto.php" />
</map></body>
</html>
