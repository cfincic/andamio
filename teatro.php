<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("addwords.php"); ?>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

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
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff">

<?php include("superior.php"); ?>

<!--<a id="first" href="images/banners/banner_teatro.gif" rel="lightbox[roadtrip]"></a>-->

<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">

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
     <p align="center">&nbsp;</p>
     <p align="center" class="Estilo11">OBRAS EN SALA</p>
     <p align="center">
	 
<?php
$dbh=mysql_connect ("localhost", "c0590257_obras","male73VEfa") 
or die('Que lo pario! No se conecta porque: ' . mysql_error());

$dbb=mysql_select_db ("c0590257_obras",$dbh);

$sql = "SELECT `id`, `titulo`, `funcion`, `link`, `fotochica` FROM `c0590257_obras`.`obras`"; 

$resul = mysql_query($sql,$dbh);


while ($perro = mysql_fetch_array($resul))
{
print"
<table width='500' border='1' cellspacing='0' bordercolor='#E4E4E4'>";
print" 
<tr>
    <td width='138' rowspan='2'><img src='http://www.andamio90.org/images/$perro[fotochica]'></td>
    <td width='374'><blockquote><span class='Estilo1'>$perro[titulo]</span></blockquote></td>
    <td width='70'><span class='Estilo2'><a href='$perro[link]' target='blank'><u>Info</u></a></span></td>
  </tr>
  <tr>
    <td colspan='2'><blockquote><span class='Estilo2'>$perro[funcion]</span></blockquote></td>
  </tr>
</table>";
print"<br/>";

}

mysql_close($dbh);
?>
     </p>
     <blockquote>
       <p align="left" class="Estilo11">HORARIO DE BOLETERIA</p>
     </blockquote>
    
         <blockquote>
           <div class="Estilo2">Jueves a partir 19hs</div>
           <div class="Estilo2">Viernes y S&aacute;bados a partir 18hs</div>
           <div class="Estilo2">Domingo a partir 16hs</div>
           <p class="Estilo2"><br/>
           </p>
      </blockquote>
         
    <blockquote>
      <p><span class="Estilo2"><span class="Estilo11">TEATRO</span></span></p>
      <p><span class="Estilo2">Direcci&oacute;n: Paran&aacute; 660. Tel&eacute;fono: (011) 4373-5670</span><br/>
        <span class="Estilo2"><a href="mailto:andamio90espectaculos@gmail.com">andamio90espectaculos@gmail.com</a></span></p>
      
      <script type="text/javascript">
var cfJsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
document.write(unescape("%3Cscript src='" + cfJsHost + "cdn-main.123contactform.com/includes/tinybox/tinybox.js.minified.js?4489700' type='text/javascript'%3E%3C/script%3E"));
</script>

<link href="//www.123contactform.com/includes/tinybox/tinyboxstyle.css.minified.css?4489700" rel="stylesheet" type="text/css"  />
 <span class="Estilo11">
<a href="javascript:" class="blueLink13" onclick="var tinybox_width = window.innerWidth || document.documentElement.clientWidth; tinybox_width=Math.round(tinybox_width*0.6);TINY.box.show({iframe:'http://www.123contactform.com/form-2088431/Andamioreservas',boxid:'frameless',width:tinybox_width,height:500,fixed:false,maskid:'bluemask',maskopacity:40})">Reservas on-line</a></span>
      
    </blockquote></td>
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
