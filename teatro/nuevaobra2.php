
<html>
<head>
<title>Alta Obra</title>

</head>

<body><?php 

$dbh=mysql_connect ("localhost", "andamio_cfincic","cfincic727") 
or die('Que lo pario! No se conecta porque: ' . mysql_error());
$dbb=mysql_select_db ("andamio_andamio",$dbh);

$uno=$_POST["uno"];
$dos=$_POST["dos"];
$tres=$_POST["tres"];
 
$consulta="INSERT INTO `andamio_andamio`.`test` (
`uno` ,
`dos` ,
`tres`)
VALUES (
'$uno','$dos','$tres')";
if (mysql_query($consulta,$dbh))
{
print("Tabla actualizada, gracias");
}
else{
print("No se pudo actualizar la tabla<br>".mysql_error());
}

mysql_close($dbh);
?>
</body>
</html>