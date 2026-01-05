	
<?php
	session_start();
	
		if (isset($_POST['id_fichier']))
		{
		require 'php/connexion_bd.php';
		$id_fichier = $_POST['id_fichier'];// id_document est le nom de l'input ou il ya la valeur que jai mis en l'appelant j'accedes a value
	
		//var_dump($_POST['id_fichier']);
		
		$req4="DELETE FROM `fichier` WHERE id_fichier = $id_fichier";
		$resultat4 = $conn-> prepare($req4);
			
				if ($resultat4 -> execute() === TRUE)
				{
					
				
					header("location: mes_document.php");
				}
				else
				{
						echo'erreur requete suprimer';die; //modif a faire 	
				}
				require 'php/deconnexion_bd.php';
				
		}
	else
				{
						echo'erreur id vide';die; //modif a faire 	
				}
?>