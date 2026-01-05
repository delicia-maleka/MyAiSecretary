<?php
		session_start();
		$id=$_SESSION['utilisateur']['id'];
		date_default_timezone_set('Europe/Paris');
		$file_date= date('d-m-y H:i:s');
		
		require 'php/connexion_bd.php';
		$requete="INSERT INTO `document`( `taille`, `date_creation`, `id`) VALUES ('None','$file_date','$id')";
		$resultat= $conn-> prepare($requete);
		if ($resultat -> execute() === TRUE  )
		{
			header("location:mes_document.php");
		} 
		else
			{
				echo'erreur req insert ';die; //modif a faire 	
			}
		require 'php/connexion_bd.php';