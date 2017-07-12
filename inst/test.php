

<?php

$dbh=mysql_connect ("localhost", "andamio_cfincic","cfincic727") 
or die('Que lo pario! No se conecta porque: ' . mysql_error());

$dbb=mysql_select_db ("andamio_andamio",$dbh);

if(isset($_GET["id"]))
{
$sql = "select archi from contenido where id_menu = ".$_GET["id"]."";
}
else
{
$sql = "SELECT archi FROM contenido WHERE id_menu=1";
}

$res = mysql_query($sql,$dbh);

if($reg = mysql_fetch_array($res))
{
	$contenido = $reg['archi'];
}
?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teatro Escuela Andamio 90</title>
<style type="text/css">
<!--
.Menu1 {color: #663399}
.Menu2 {color: #009999}
.Menu3 {color: #ff6600}
.Menu4 {color: #cc0066}
.Menu5 {color: #ff9933}
.Menu6 {color: #ff3333}
.Menu7 {color: #333333}

a:link {
	color: #CCCCCC;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}

body {
	margin-top: 0px;
}

img {
	border:none;
}

-->
</style>

</head>

<body>

<?php
//$dbb=mysql_select_db ("andamio_andamio",$dbh);

$sql2 = "SELECT * FROM `andamio_andamio`.`menu_ins`"; 

$res2 = mysql_query($sql2,$dbh);

while ($reg2 = mysql_fetch_array($res2))
{
?>
<div>
	<a href="test.php?id=<?php echo $reg2['id_menu'] ?>" class="<?php echo $reg2['style'] ?>"> <?php echo $reg2['texto'] ?></a>
</div>
<?php
}
?>

<?php
echo "<div>";

mostrar($contenido);
echo "</div>";
?>

</body>
</html>

<?php

 function mostrar($contenido) {
        $uri = $_SERVER['REQUEST_URI'];
		list($dire,$resto,$otro)= explode("/",$uri);
		$html = "../".$resto."/".$contenido;
		$gui = file_get_contents($html);
        print($gui);
    }
	
?>