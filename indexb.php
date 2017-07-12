<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("addwords.php"); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link type="text/css" rel="stylesheet" href="contacto/shadowbox.css"/>

<script type="text/javascript" src="contacto/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="contacto/shadowbox.js"></script>
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
background-image: url(bg_rojo.jpg);
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
color: #FFF;
}
.Estilo2 {font-size: 11px}
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<?php include("superior.php"); ?>

<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><img src="images/home_1_r1_c1.jpg" width="750" height="149" border="0" usemap="#Map2" />
    <img src="images/home_1_r2_c1.jpg" width="750" height="116" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="fireworks/home_NOVEDADES.png" width="750" height="167" border="0" usemap="#Map" />
      <map name="Map" id="Map">
        <area shape="rect" coords="26,10,162,124" href="talleres_info.php" />
        <area shape="rect" coords="210,12,354,128" href="talleres_info.php" />
        <area shape="rect" coords="395,13,539,129" href="talleres_info.php" />
        <area shape="rect" coords="584,15,723,127" href="http://www.ofrendasurbanas.com.ar/" />
      </map></td>
  </tr>
  <tr bgcolor="#333333">
    <td width="241"><div align="center"><a href="http://www.ofrendasurbanas.com.ar/" target="_blank"><img src="images/ofrendas.jpg" /></a></div></td>
    <td width="259"><img src="images/home_1_r5_c3.jpg" /></td>
    <td width="251"><img src="images/home_1_r5_c3.jpg" /></td>
  </tr>
  <tr>
    <?php include('pie.php'); ?>
  </tr>
</table>

<map name="Map2" id="Map2">
<area shape="rect" coords="556,24,747,41" href="teatro.php" />
<area shape="rect" coords="557,44,746,59" href="instituto.php" />
<area shape="rect" coords="558,62,748,77" href="boero.php" />
<area shape="rect" coords="558,82,752,96" href="contacto/contacto_teatro.php" rel="shadowbox;width=600;height=450" title="Contacto" style="text-decoration:none" />
</map>

<a href="contacto/contacto_teatro.php" rel="shadowbox;width=600;height=450" title="Contacto" style="text-decoration:none">Contacto</a>


</body>
</html>
