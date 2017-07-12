
<html>
<head>
<title>Alta Obra</title>

<style type="text/css">
<!--
.Estilo4 {color: #333333}
-->
</style>
</head>

<body><?php 

$dbh=mysql_connect ("localhost", "c0590257_obras","male73VEfa")
or die('Que lo pario! No se conecta porque: ' . mysql_error());

$dbb=mysql_select_db ("c0590257_obras",$dbh);


foreach($_POST as $nombre_campo => $valor){
   $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
   eval($asignacion);
} 
 
$consulta="INSERT INTO `c0590257_obras`.`obras` (
`titulo` ,
`funcion` ,
`link`)
VALUES (
'$titulo','$funcion','$link')";

if (mysql_query($consulta,$dbh))
{
print("Tabla actualizada, gracias");
}
else{
print("No se pudo actualizar la tabla<br>".mysql_error());
}

mysql_close($dbh);
?>
<p><a href="http://www.andamio90.org/teatro/admin.php" class="Estilo4">VOLVER AL MENU PRINCIPAL</a></p>
</body>
</html>