<?php

$dbh = mysql_connect ("localhost", "andamio_cfincic","cfincic727") 
or die('Que lo pario! No se conecta porque: ' . mysql_error());

$dbb=mysql_select_db ("andamio_andamio",$dbh);
//if(isset($_GET["id"]))
//{
$sql = "select * from contenido";
//}
//else
//{
//$sql = "SELECT archi FROM contenido WHERE id_menu=1";
//}

$res = mysql_query($sql,$dbh);

while($reg=mysql_fetch_array($res))
{
	$contenido = $reg['archi'];
	echo $contenido.chr(10);
}

?>

