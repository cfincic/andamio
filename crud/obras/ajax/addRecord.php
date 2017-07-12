<?php
	if(isset($_POST['titulo']) && isset($_POST['funcion']) && isset($_POST['link']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$first_name = $_POST['titulo'];
		$last_name = $_POST['funcion'];
		$email = $_POST['link'];

		$query = "INSERT INTO c0590257_obras`.`obras`(titulo, funcion,link) VALUES('$titulo', '$funcion', '$link')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>