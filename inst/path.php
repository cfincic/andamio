<style type="text/css">
<!--
.white {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFFFFF;
}
-->
</style>
<?php 

$url = $_SERVER['REQUEST_URI'];
$pieces = explode("/", $url);
$seccion = $pieces[1];
$pagina = str_replace(".php", " ", $pieces[2]);

if($seccion=="inst")
$seccion = "instituto";

$path = $seccion." > ".$pagina;

print ("<span class='white'>".$path."</span>");

?>