<html>
<head>
<title>Teatro Andamio 90 - Obras en Cartelera</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- Fireworks MX Dreamweaver MX target.  Created Wed Apr 15 19:01:19 GMT-0300 (Hora estándar este, Sudamérica) 2009-->
<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #333333;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: none;
	color: #333333;
}
a:active {
	text-decoration: none;
	color: #333333;
}
.Estilo4 {color: #333333}
-->
</style>
</head>
<body>

	  <?php
   		$id=$_GET['id'];
		$dbh=mysql_connect ("localhost", "c0590257_obras","male73VEfa")
or die('Que lo pario! No se conecta porque: ' . mysql_error());

$dbb=mysql_select_db ("c0590257_obras",$dbh);
		$sql = "SELECT * FROM `c0590257_obras`.`obras` WHERE id=$id"; 
		$resul = mysql_query($sql,$dbh);
        
			IF ($resul)
			{
			$p= mysql_fetch_array($resul);   
			print" HA SIDO ELIMANDA";
			$sql = "DELETE FROM `c0590257_obras`.`obras` WHERE id=$id"; 
			$borra = mysql_query($sql,$dbh);
			}
			else
			{
			print"El registro que quiere eliminar no existe...tonto";
			}
   	  
	  mysql_close($dbh);
    	?>

<p><a href="http://www.andamio90.org/teatro/admin.php" class="Estilo4">VOLVER AL MENU PRINCIPAL</a></p>
</body>
</html>
