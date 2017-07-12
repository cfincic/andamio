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
<p align="center" class="Estilo1">Formulario de Alta de Obras</p>
<p align="center" class="Estilo2">(Solo para Ivana)</p>
<form name="form1" method="post" action="nuevaobra.php">
  <table width="650" border="1" align="center">
    <tr>
      <td bgcolor="#99FF99">Nombre de la obra</td>
      <td bgcolor="#CCFFFF"><input name="titulo" type="text" id="titulo" size="100"></td>
    </tr>
    <tr>
      <td bgcolor="#99FF99">Funcion</td>
      <td bgcolor="#CCFFFF"><input name="funcion" type="text" id="funcion" size="100"></td>
    </tr>
    <tr>
      <td bgcolor="#99FF99">Link</td>
      <td bgcolor="#CCFFFF"><input name="link" type="text" id="link" size="100"></td>
    </tr>
  </table>
  <p>
    <label></label>
    <div align="center">
      <input type="reset" name="Submit2" value="Limpiar">
      <input type="submit" name="Submit" value="Enviar">
  </div>
  </p>
</form>

</body>
</html>