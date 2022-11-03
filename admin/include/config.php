<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>

<?php
 			function construct()
				{
		$serveur="localhost";
		$utilisateur="root";
		$mdp="";
		$base="db_pfe";
		mysql_connect($serveur,$utilisateur,'');
		mysql_select_db($base);
		mysql_query("SET NAMES 'utf8'");
				}
?>



</body>
</html>