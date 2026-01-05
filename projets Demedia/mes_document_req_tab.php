<?=


	
	
		require 'php/connexion_bd.php';
		$req2="SELECT `fichier`.`nom_fichier`, `fichier`.`taille`, `fichier`.`date_creation`, `fichier`.`url`,`fichier`.`id_fichier` FROM fichier INNER JOIN document on document.id_document = fichier.id_document  WHERE fichier.id='$id' and document.id_document = fichier.id_document";
		$resultat2 = $conn-> prepare($req2);
									
		if ($document=$resultat2 -> execute() === TRUE)
			{
				$fichier= $resultat2 -> fetchALL(); 	/*la j'obtiens sous forme de tab mes result et je vais les parcourir pour recuperer chaque fichier et les stocker dans ma variable session*/
													
				$_SESSION['document'][] = [
				'doc' => $document, 
				'fichier' => $fichier];
													
			}
									
			else
			{
				echo'erreur requete select  '; //modif a faire 	
			}
			require 'php/deconnexion_bd.php';
			header("location:open_folder.php");									
	
?>