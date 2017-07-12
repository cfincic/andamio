<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Teatro Escuela Andamio 90</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
td img {display: block;}body {
	background-image: url(bg_rojo.jpg);
}
.Estilo1 {
	color: #990000;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo2 {
	color: #990000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo3 {
	color: #666666;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
a:link {
	color: #666666;
}
a:visited {
	color: #666666;
}
a:hover {
	color: #666666;
}
a:active {
	color: #666666;
}
</style>
<!-- Fireworks MX Dreamweaver MX target.  Created Wed Feb 15 19:24:11 GMT-0300 (Hora estándar este, Sudamérica) 2012-->
</head>
<body bgcolor="#ffffff">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
<!-- fwtable fwsrc="instituto_b1.png" fwbase="teatro_l.jpg" fwstyle="Dreamweaver" fwdocid = "1937432249" fwnested="0" -->
  <tr>
   <td><img src="images/spacer.gif" width="60" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="155" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="535" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img src="images/teatro_l_r1_c1.jpg" alt="" name="teatro_l_r1_c1" width="750" height="119" border="0" usemap="#teatro_l_r1_c1Map" id="teatro_l_r1_c1" />
     <map name="teatro_l_r1_c1Map" id="teatro_l_r1_c1Map">
       <area shape="rect" coords="642,22,750,40" href="index.php" />
       <area shape="rect" coords="641,41,749,61" href="contacto.php" target="_blank" />
     </map>    </td>
   <td><img src="images/spacer.gif" width="1" height="119" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3"><img name="teatro_l_r2_c1" src="images/teatro_l_r2_c1.jpg" width="750" height="19" border="0" id="teatro_l_r2_c1" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="19" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="2" rowspan="13" valign="top" bgcolor="#E6E7E9"><img src="images/teatro_l_r3_c1.jpg" alt="spacer" width="215" height="21" /><a href="teatro.php"><img src="images/teatro_b_r2_c1.jpg" alt="cartelera" width="215" height="17" /></a><img src="images/teatro_l_r5_c1.jpg" alt="sepa" width="215" height="8" /><a href="teatro_historia.php"><img src="images/teatro_l_r6_c1.jpg" width="215" height="17" /></a><img src="images/teatro_l_r7_c1.jpg" width="215" height="8" /><a href="teatro_programacion.php"><img src="images/teatro_l_r8_c1.jpg" width="215" height="17" /></a><img src="images/teatro_l_r9_c1.jpg" width="215" height="9" /><a href="teatro_reservas.php"><img src="images/teatro_l_r10_c1.jpg" width="215" height="17" /></a><img src="images/teatro_l_r11_c1.jpg" width="215" height="8" /><a href="teatro_galeria.php"><img src="images/teatro_l_r12_c1.jpg" width="215" height="17" /></a><img src="images/teatro_l_r11_c1.jpg" alt="" width="215" height="8" /><a href="teatro_prensa.php"><img src="images/teatro_l_r14_c1.jpg" width="215" height="17" /></a></td>
   <td rowspan="13" valign="top" bgcolor="#F1F1F3"><p>
<?php
$dbh=mysql_connect ("localhost", "andamio_cfincic","cfincic727") 
or die('Que lo pario! No se conecta porque: ' . mysql_error());

$dbb=mysql_select_db ("andamio_andamio",$dbh);

$sql = "SELECT `id`, `nombre`, `diahora`, `fotochica` FROM `andamio_andamio`.`obras`"; 

$resul = mysql_query($sql,$dbh);


while ($perro = mysql_fetch_array($resul))
{
print"
<table width='500' border='1' cellspacing='0' bordercolor='#E4E4E4'>";
print" 
<tr>
    <td width='138' rowspan='2'><img src='http://www.andamio90.org/images/$perro[fotochica]'></td>
    <td width='374'><blockquote><span class='Estilo1'>$perro[nombre]</span></blockquote></td>
    <td width='70'><span class='Estilo2'><a href='detalleobras.php?id=$perro[0]' target='blank'>Info</a></span></td>
  </tr>
  <tr>
    <td colspan='2'><blockquote><span class='Estilo3'>$perro[diahora]</span></blockquote></td>
  </tr>
</table>";
print"<br/>";

}

mysql_close($dbh);
?>
   </p>    </td>
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
  <tr>
   <td><img name="teatro_l_r16_c1" src="images/teatro_l_r16_c1.jpg" width="60" height="30" border="0" id="teatro_l_r16_c1" alt="" /></td>
   <td colspan="2" background="images/teatro_l_r16_c2.jpg"><span class="Estilo3"><strong>ANADAMIO</strong>90, Paran&aacute; 662 piso 1, CABA Tel&eacute;fonos (011) 4374-1484/4372-8386 ::: Copyright 2012</span></td>
   <td><img src="images/spacer.gif" width="1" height="30" border="0" alt="" /></td>
  </tr>
</table>
</body>
</html>
