 <html>
<head>
<title>Modi Obras</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
}
.Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; color: #000066; }
-->
</style>
</head>

<body>

<?php 
$id=$_GET['id'];
$dbh=mysql_connect ("localhost", "c0590257_obras","male73VEfa")
or die('Que lo pario! No se conecta porque: ' . mysql_error());

$dbb=mysql_select_db ("c0590257_obras",$dbh);


foreach($_POST as $nombre_campo => $valor)
{
   $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
   eval($asignacion);
   
} 
 
$consulta="UPDATE `c0590257_obras`.`obras` SET
`titulo`='$titulo',
`funcion`='$funcion',
`link`='$link' WHERE `id`='$id'";

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