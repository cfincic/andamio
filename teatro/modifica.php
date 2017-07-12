 <html>
<head>
<title>Alta de Obras</title>
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
$sql = "SELECT * FROM `c0590257_obras`.`obras` WHERE id=$id"; 
		$resul = mysql_query($sql,$dbh);
		
		$p= mysql_fetch_array($resul);
		?> 

<p align="center" class="Estilo1">Formulario de Modificaci&oacute;n de Obras</p>
<form name="form1" method="post" action="modificar.php?id=$id">
  <table width="650" border="1" align="center">
    <tr>
      <td bgcolor="#99FF99">Título de la obra</td>
      <? print"<td bgcolor='#CCFFFF'><input name='titulo' type='text' id='titulo' value='$p[titulo]' size='50'></td></tr>";
	print"<tr><td bgcolor='#99FF99'>Funci&oacute;n</td><td bgcolor='#CCFFFF'><input name='funcion' type='text' id='diahora' value='$p[funcion]' size='50'></td></tr>";
	print"<tr><td bgcolor='#99FF99'>Link Alternativa</td><td bgcolor='#CCFFFF'><input name='link' type='text' id='link' value='$p[link]'size='150'></td></tr>";
	
	?>
  </table>
  <p>
    <label></label>
    <div align="center">
      <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
      <input type="reset" name="Submit2" value="Limpiar">
      <input type="submit" name="Submit" value="Actualizar">
  </div>
  </p>
</form>

</body>
</html>