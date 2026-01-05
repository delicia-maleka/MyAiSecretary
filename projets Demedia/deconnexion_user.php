<?php
	session_start();
	
	if(!isset($_SESSION["utilisateur"]))
	{
		header("location: connexion.php");
		exit(); //pour sotir et pas continuer le code 
	}
	
	
	// on suprime la variable session de l'utilisateur avec fonction unset()
	unset($_SESSION["utilisateur"]);
	
	header("location: page_acceuil.php");
?>