 <html>
<head>
<title>Administracion de Obras</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
}
.Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; color: #000066; }
.Estilo3 {
	font-size: 18px;
	color: #000066;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<p align="center" class="Estilo1">Administraci&oacute;n de Obras en Cartelera</p>
<p align="center" class="Estilo2">(Solo para Ivana!!!)</p>
<p align="center" class="Estilo3"><a href="altaobra.php">Ingresar Obra Nueva</a></p>
<p align="center">
  <?php
$dbh=mysql_connect ("localhost", "andamio_cfincic","cfincic727") 
or die('Que lo pario! No se conecta porque: ' . mysql_error());
$dbb=mysql_select_db ("andamio_andamio",$dbh);
$sql = "SELECT `id`, `nombre`, `diahora` FROM `andamio_andamio`.`obras`"; 
$resul = mysql_query($sql,$dbh);
print"<table width='700' border='1' align='center' cellpadding='1' cellspacing='0'>";

while ($perro = mysql_fetch_array($resul))
{
print"<tr>
		<td align='center'>$perro[1]</td>
		<td align='center'>$perro[2]</td>";
		print"<td align='center'><a href='modifica.php?id=$perro[0]'>Modificar</a</td>";
		print"<td align='center'><a href='elimina.php?id=$perro[0]'>Eliminar</a></td></tr>";
}
print"</table>";
mysql_close($dbh);
?>
</p>
</body>
</html>