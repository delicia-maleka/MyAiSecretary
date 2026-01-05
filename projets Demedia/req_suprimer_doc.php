	
<?php
	session_start();
	
	if (isset($_POST['id_document']))
	{
		require 'php/connexion_bd.php';
		$id_document = $_POST['id_document']; // id_fichier est le nom de l'input ou il ya la valeur que jai mis en l'appelant j'accedes a value
		//var_dump($id_document);
		$req4="DELETE FROM `document` WHERE id_document = $id_document";
		$resultat4 = $conn-> prepare($req4);
			
			if ($resultat4 -> execute() === TRUE)
				{
					header("location:mes_document.php");
					require 'php/deconnexion_bd.php';
				}
				else
				{
						echo'erreur requete suprimer'; //modif a faire 	
				}
				
				
	}

?>