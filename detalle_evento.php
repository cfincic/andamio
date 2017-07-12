<?php

require_once("eventos/evento.php");
require_once("eventos/core/settings.php");
require_once("eventos/core/config_db.php");
require_once("eventos/core/db.php");

	$evento = new Evento();
	$evento->evento_id = $_GET['id'];	
	$evento->get();
	//print_r ($evento);
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("addwords.php"); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link type="text/css" rel="stylesheet" href="load/css/lightbox.css"/>

<script type="text/javascript" src="load/js/prototype.js"></script>
<script type="text/javascript" src="load/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="load/js/lightbox.js"></script>

<title>Teatro Escuela Andamio 90</title>

<style type="text/css">
td img {
	display: block;
	border:none;
}

body{
	background-image: url(modulo_rojo.jpg);
	margin-top: 0px;
}

.Estilo1 {
	color: #666666;
	font-family: Verdana;
	font-size: 12px;
	font-weight: bold;
}
.Estilo2 {
	color: #666666;
	font-family: Verdana;
	font-size: 12px;
}
.Estilo3 {
	color: #FFFFFF;
	font-family: Verdana;
	font-size: 12px;
}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	color: #666666;
	text-decoration: none;
}
a:hover {
	color: #666666;
	text-decoration: none;
}
a:active {
	color: #666666;
	text-decoration: none;
}
.Estilo6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #CB1D34;
	font-weight: bold;
	font-size: 10px;
}
.Estilo9 {color: #CE1966; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif;}
.Estilo11 {color: #CB1F35; font-size: 12px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo12 {color: #D11F5A; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
#foto {
	width: 138px;
}
</style>
</head>
<body bgcolor="#ffffff">

<?php include("superior.php"); ?>

<table align="center" border="0" cellpadding="0" cellspacing="0">

 <tr>
   <td colspan="3"><img src="fireworks/header_teatro.jpg" alt="" name="teatro_l_r1_c1" width="750" height="120" border="0" usemap="#teatro_l_r1_c1Map" id="teatro_l_r1_c1" />
     <map name="teatro_l_r1_c1Map" id="teatro_l_r1_c1Map">
       <area shape="rect" coords="642,22,750,40" href="teatro.php" />
       <area shape="rect" coords="641,41,749,61" href="instituto.php" />
     <area shape="rect" coords="641,61,748,77" href="boero.php" />
     <area shape="rect" coords="642,79,751,97" href="contacto.php" />
     </map>    </td>
   <td><img src="images/spacer.gif" width="1" height="119" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3"><img name="teatro_l_r2_c1" src="images/teatro_l_r2_c1.jpg" width="750" height="19" border="0" id="teatro_l_r2_c1" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="19" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="2" rowspan="13" valign="top" bgcolor="#E6E7E9"><img src="images/teatro_l_r3_c1.jpg" alt="spacer" width="215" height="21" /><a href="teatro.php"><img src="images/teatro_b_r2_c1.jpg" alt="cartelera" width="215" height="17" /></a><img src="images/teatro_l_r5_c1.jpg" alt="sepa" width="215" height="8" /><a href="teatro_historia.php"><img src="images/teatro_l_r6_c1.jpg" width="215" height="17" /></a><img src="images/teatro_l_r7_c1.jpg" width="215" height="8" /><a href="teatro_programacion.php"><img src="images/teatro_l_r8_c1.jpg" width="215" height="17" /></a><img src="images/teatro_l_r9_c1.jpg" width="215" height="9" /><a href="teatro_reservas.php"><img src="images/teatro_l_r10_c1.jpg" width="215" height="17" /></a><img src="images/teatro_l_r11_c1.jpg" width="215" height="8" /><a href="teatro_galeria.php"><img src="images/teatro_l_r12_c1.jpg" width="215" height="17" /></a><img src="images/teatro_l_r11_c1.jpg" alt="" width="215" height="8" /><a href="teatro_prensa.php"><img src="images/teatro_l_r14_c1.jpg" width="215" height="17" /></a></td>
   <td rowspan="13" valign="top" bgcolor="#F1F1F3">
     <p align="center"><img src="<?php echo 'images/eventos/' . $evento->img; ?>"/></p>
     <p align="center">
     <div style="padding:2%">
     <table align="center" width="450px" border="1" cellspacing="0" cellpadding="0" bordercolor='#E4E4E4'>
       <tr>
         <td align="center"> <span class='Estilo1'>
         <?php echo $evento->titulo; ?>
         </span> 
         </td>
       </tr>
       <tr>
         <td align="center"><span class='Estilo2'>
		 <?php echo $evento->textolargo; ?>
         </span>
         </td>
       </tr>
       <tr>
         <td align="center"><span class='Estilo1'>
		 <a href="<?php echo $evento->linkeo; ?>"><?php echo $evento->textolink; ?></a>
         </span>
         </td>
       </tr>
     </table>
     </div>
     <blockquote>&nbsp;</blockquote></td>
   <td><img src="images/spacer.gif" width="1" height="21" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="9" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="9" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="257" border="0" alt="" /></td>
  </tr>
</table>

<?php include("inst/pie.php"); ?>

</body>
</html>
