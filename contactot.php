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
	background-image: url(modulo_verde.jpg);
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFF;
	margin-top: 0px;
}
.Estilo2 {font-size: 11px}
.Estilo3 {color: #333333}
.Estilo4 {font-size: 11px; color: #333333; }
</style>

</head>

<body>
<?php include("superior.php"); ?>

<script>
 window.setTimeout(function(){
        Shadowbox.open({
            content: 'contacto/contacto_gral.php', //el elemento que se va a cargar, tambien puede ser directamente html: ej: <h2>Hola Mundo</h2>
            player: 'iframe',   //el tipo de elemento** 
			width: "640",//solo es requerido para videos
			height: "390",//solo es requerido para videos
			title: "Contacto",
          });
      }, 200);
 
/* 

** =  		img     Sirve para :   ['png', 'jpg', 'jpeg', 'gif', 'bmp']
            swf     Sirve para :   ['swf'], 
            flv     Sirve para :   ['flv'], 
            qt      Sirve para :   ['dv', 'mov', 'moov', 'movie', 'mp4'], 
            wmp     Sirve para :   ['asf', 'wm', 'wmv'], 
            qtwmp   Sirve para :   ['avi', 'mpg', 'mpeg'], 
            iframe  Sirve para :   ['asp', 'aspx', 'cgi', 'cfm', 'htm', 'html', 'pl', 'php', 
                        'php3', 'php4', 'php5', 'phtml', 'rb', 'rhtml', 'shtml', 
                        'txt', 'vbs', 'java'] 
						
*/
</script>


<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/contacto_header.jpg" width="750" height="120" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" class="Estilo4"><p align="center" class="Estilo3">&nbsp;</p>
      <p align="center" class="Estilo3">Muchas Gracias !</p>
    <p align="center" class="Estilo3">Personal de Andamio se contactará con Ud. a la brevedad.</p>
    <p align="center" class="Estilo3">&nbsp;</p></td>
  </tr>
  <tr bgcolor="#333333">
    <td>&nbsp;</td>
  </tr>
</table>

<?php include("inst/pie.php"); ?>

</body>
</html>
