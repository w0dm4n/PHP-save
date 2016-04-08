<?php
	session_start();
	if (isset($_GET["submit"]) && $_GET["submit"] == "OK")
	{
		if (!empty($_GET["login"]) && !empty($_GET["passwd"]))
		{
			$_SESSION["login"] = $_GET["login"];
			$_SESSION["passwd"] = $_GET["passwd"];
		}
	}
	$login = NULL;
	$passwd = NULL;
	if (!empty($_SESSION["login"]) && !empty($_SESSION["passwd"]))
	{
		$login = $_SESSION["login"];
		$passwd = $_SESSION["passwd"];
	}
	echo '<form method="GET">
			Identifiant: <input type="text" name="login" value="'.$login.'"/>
			<br/>
			Mot de passe: <input type="password" name="passwd" value ="'.$passwd.'"/> </br>
			<input type="submit" name="submit" value="OK"/>
		</form>';
?>