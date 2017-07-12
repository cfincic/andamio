<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>
<body>

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
    <td width='70'><span class='Estilo2'><a href='detalleobras.php?id=$perro[0]' target='blank'><u>Info</u></a></span></td>
  </tr>
  <tr>
    <td colspan='2'><blockquote><span class='Estilo2'>$perro[diahora]</span></blockquote></td>
  </tr>
</table>";
print"<br/>";

}

mysql_close($dbh);
?>
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
    <td width='70'><span class='Estilo2'><a href='detalleobras.php?id=$perro[0]' target='blank'><u>Info</u></a></span></td>
  </tr>
  <tr>
    <td colspan='2'><blockquote><span class='Estilo2'>$perro[diahora]</span></blockquote></td>
  </tr>
</table>";
print"<br/>";

}

mysql_close($dbh);
?>


</body>

</html>

