
<?php

	$id=$_SESSION['utilisateur']['id'];
				$req="SELECT `fichier`.`nom_fichier`, `fichier`.`taille`, `fichier`.`date_creation`, `fichier`.`url` FROM fichier INNER JOIN utilisateur ON utilisateur.id = fichier.id WHERE fichier.id='$id' ORDER BY fichier.date_creation DESC LIMIT 4 ";
				
				$resultat = $conn-> prepare($req);
				if ($resultat -> execute() === TRUE)
				{
					$user= $resultat -> fetchALL();
					
					
		
					$_SESSION['fichier'] = $user; // pour page mes documents
				}
				else
				{
					echo'erreur requete select  '; //modif a faire 	
				}
?>
