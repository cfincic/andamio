<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Teatro Escuela Andamio 90</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<style type="text/css">
td img {display: block;}body {
	background-image: url(bg_rojo.jpg);
}
.Estilo1 {
	color: #990000;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo2 {
	color: #990000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo3 {
	color: #666666;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
a:link {
	color: #990000;
	text-decoration: none;
}
a:visited {
	color: #990000;
	text-decoration: none;
}
a:hover {
	color: #990000;
	text-decoration: none;
}
a:active {
	color: #993300;
	text-decoration: none;
}

.sinop {
	color: #993300;
	text-decoration: none;
}

</style>
<!-- Fireworks MX Dreamweaver MX target.  Created Wed Feb 15 19:24:11 GMT-0300 (Hora estándar este, Sudamérica) 2012-->
</head>
<body bgcolor="#ffffff">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
<!-- fwtable fwsrc="instituto_b1.png" fwbase="teatro_l.jpg" fwstyle="Dreamweaver" fwdocid = "1937432249" fwnested="0" -->
  <tr>
   <td><img src="images/spacer.gif" width="60" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="155" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="535" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img src="images/teatro_l_r1_c1.jpg" alt="" name="teatro_l_r1_c1" width="750" height="119" border="0" usemap="#teatro_l_r1_c1Map" id="teatro_l_r1_c1" />
     <map name="teatro_l_r1_c1Map" id="teatro_l_r1_c1Map">
       <area shape="rect" coords="642,22,750,40" href="index.php" />
       <area shape="rect" coords="641,41,749,61" href="contacto.php" target="_blank" />
     </map>    </td>
   <td><img src="images/spacer.gif" width="1" height="119" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3"><img name="teatro_l_r2_c1" src="images/teatro_l_r2_c1.jpg" width="750" height="19" border="0" id="teatro_l_r2_c1" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="19" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3" rowspan="13" valign="top" bgcolor="#E6E7E9"><p>
     <?php
      //if (isset($id)){
		$id=$_GET['id'];
		$dbh=mysql_connect ("localhost", "andamio_cfincic","cfincic727") 
		or die('Que lo pario! No se conecta porque: ' . mysql_error());
		$dbb=mysql_select_db ("andamio_andamio",$dbh);
		$sql = "SELECT * FROM `andamio_andamio`.`obras` WHERE id=$id"; 
		$resul = mysql_query($sql,$dbh);
        
        IF ($resul){
        $p= mysql_fetch_array($resul);   
              
         print"<table width='700' border='0' align='center' cellpadding='0' cellspacing='0'    bordercolor='#000000' bgcolor='#CCCCCC'>";
         print"<tr>
          <td colspan='2'><div align='center' class='Estilo2'><h1>$p[nombre]</h1></div></td>
          </tr>";
         print"<tr>
          <td width='104' bgcolor='#DFDFDF'><span class='Estilo2'>D&iacute;a y Hora</span></td>
          <td width='383' bgcolor='#FFFFFF'><span class='Estilo2'>$p[diahora]</span></td>
        </tr>";
        print"<tr>
          <td bgcolor='#DFDFDF'><span class='Estilo2'>Entrada General</span></td>
          <td bgcolor='#FFFFFF'><span class='Estilo2'>$p[precioa]</span></td>
        </tr>";
        print"<tr>
          <td bgcolor='#DFDFDF'><span class='Estilo2'>Descuento a Estudiantes y Jubilados</span></td>
          <td bgcolor='#FFFFFF'><span class='Estilo2'>$p[preciob]</span></td>
        </tr>";
         print"<tr>
          <td bgcolor='#DFDFDF'><span class='Estilo2'>Autor</span></td>
          <td bgcolor='#FFFFFF'><span class='Estilo2'>$p[autor]</span></td>
        </tr>";
         print"<tr>
          <td bgcolor='#DFDFDF'><span class='Estilo2'>Direcci&oacute;n</span></td>
          <td bgcolor='#FFFFFF'><span class='Estilo2'>$p[direccion]</span></td>
        </tr>";
         print"<tr>
          <td bgcolor='#DFDFDF'><span class='Estilo2'>Actor/es</span></td>
          <td bgcolor='#FFFFFF'><span class='Estilo2'>$p[actor]</span></td>
        </tr>";
         print"<tr>
          <td colspan='2' bgcolor='#DFDFDF'><div align='center' class='Estilo2'>Sinopsis</div></td>
        </tr>";
        print"<tr>
          <td colspan='2' bgcolor='#FFFFFF'><div align='center' class='Estilo2'>$p[sinopsis]</div></td>
        </tr>";
         print"<tr>
          <td colspan='2' bgcolor='#DFDFDF'><div align='center' class='Estilo2'>Otros</div></td>
        </tr>";
         print"<tr>
          <td colspan='2' bgcolor='#FFFFFF'><div align='center' class='Estilo2'>$p[otros]</div></td>
        </tr>
		
      </table>";
      }
      else
      {print"consulta incorrecta";}
     // }
    //  else
     // {print"El id de la obra no existe";}
	  
	  mysql_close($dbh);
    ?>
   </p>
    <p align="center" class="Estilo1"><a href="teatro.php">VOLVER A LA CARTELERA</a></p></td>
   <td><img src="images/spacer.gif" width="1" height="21" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="9" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="9" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="17" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img src="images/spacer.gif" width="1" height="257" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="teatro_l_r16_c1" src="images/teatro_l_r16_c1.jpg" width="60" height="30" border="0" id="teatro_l_r16_c1" alt="" /></td>
   <td colspan="2" background="images/teatro_l_r16_c2.jpg"><span class="Estilo3"><strong>ANDAMIO</strong>90, Paran&aacute; 662 piso 1, CABA Tel&eacute;fonos (011) 4374-1484/4372-8386 ::: Copyright 2012</span></td>
   <td><img src="images/spacer.gif" width="1" height="30" border="0" alt="" /></td>
  </tr>
</table>
</body>
</html>
