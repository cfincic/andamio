<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Andamio 90</title>

</style>
<style type="text/css">
<!--
.Estilo22 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	background-color: #990000;
}
a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #FFFFFF;
}
body,td,th {
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<form action="http://www.andamio90.org/fm.php" method="post" name="SampleForm" id="SampleForm">
      <p align="center">
        <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />
        <!-- STEP 2: Put your email address in the 'recipients' value.
                 Note that you also have to allow this email address in the
                 $TARGET_EMAIL setting within formmail.php!
    -->
        <input type="hidden" name="recipients" value="iavertaKY74NVZFandamio90.edu.ar" />
        <!-- STEP 3: Specify required fields in the 'required' value -->
        <input type="hidden" name="required" value="email:email" />
        <!-- STEP 4: Put your subject line in the 'subject' value. -->
        <input type="hidden" name="subject" value="Formulario desde Andamio90.org" />
      </p>
      <table border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#FFFF99">
        <tr>
          <td width="136" bgcolor="#990000" class="Estilo4"><p class="Estilo21"><span class="Estilo22">Nombre y Apellido:</span></p></td>
          <td width="317" bgcolor="#990000"><input name="realname" type="text" /></td>
        </tr>
        <tr>
          <td bgcolor="#990000" class="Estilo4"><p class="Estilo22">Email:</p></td>
          <td bgcolor="#990000"><input name="email" type="text" /></td>
        </tr>
        <tr>
          <td bgcolor="#990000" class="Estilo4"><p class="Estilo22">Telef&oacute;no:</p></td>
          <td bgcolor="#990000"><input name="Telefóno" type="text" /></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#990000" class="Estilo4"><p class="Estilo22">Ingresa tu mensaje:</p></td>
        <td bgcolor="#990000"><span class="Estilo4">
    <textarea name="Mensaje" rows="10" cols="50"></textarea>
          </span></td>
        </tr>
        <tr>
          <td bgcolor="#990000"><input type="submit" value="Enviar" /></td>
          <input type="hidden" name="good_url"    value="thankyou.php" />
          <td bgcolor="#990000"><span class="Estilo5"></span></td>
        </tr>
      </table>
  <p align="center"><span class="Estilo4 Estilo22"><a href="contacto_gral.php">Por cuestiones relacionadas el instituto por favor dir&iacute;jase aqui</a></span></p>
</form>
</body>
</html>
