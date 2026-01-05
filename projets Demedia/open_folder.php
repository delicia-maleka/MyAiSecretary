<?php
		session_start();
		//var_dump($_SESSION['document']);
		
		if (!empty($_FILES))
	{
		$file_name = $_FILES['fichier']['name']; /*['fichier'] : la clé de nom fichier  que j'ai donée en bas dans input  L 161*/
		$file_type = strrchr($file_name,".");/*parcour jusquaux point et stockent les caractere apres soit le type jpg png ect */
		$file_size= $_FILES['fichier']['size'];
		$file_url = 'document/'. $file_name;
		$id=$_SESSION['utilisateur']['id'];
		//var_dump ($_FILES);die;
		date_default_timezone_set('Europe/Paris');
		$file_date= date('d-m-y H:i:s');
		/*echo'extension:'.$file_type;*/ 
		$id_document= $_SESSION['document_id'];
		var_dump($_SESSION);
		
		
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fichier'])) {
    if ($_FILES['fichier']['error'] == UPLOAD_ERR_INI_SIZE) {
        echo 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
    }
    // Other error codes and file processing code here
}

				
			require 'php/connexion_bd.php';
			// Requête 
			$req3= "INSERT INTO fichier (nom_fichier,type, taille, date_creation, url,id,id_document) VALUES('$file_name','$file_type','$file_size', '$file_date', '$file_url','$id','$id_document')";
			// préparer  requêtes SQL (avec la fonction  query()) pour le send de l'objet de connexion à la base de données $conn.
			$resultat3= $conn-> prepare($req3);
			
	
			if ($resultat3 -> execute() === TRUE  )
			{
				
			// envoi du fichier vers www , doc projet
				$doc_tmp_name= $_FILES['fichier']['tmp_name'];  /*va me stocker le chemin dans la variable */
				$document_path= 'document/'.$file_name;
				move_uploaded_file($_FILES['fichier']['tmp_name'], $document_path);
				require 'mes_document_req_tab.php';
				
			} 
			else
			{
				echo'erreur req insert ici';die; //modif a faire 	
			}
			
			
			
			
			
	
			
			
			// Fermer la connexion à la base de données
			require 'php/deconnexion_bd.php';
			
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
	}	
		
		 
?>

<!DOCTYPE html>
<html lang="fr" id="dashboard">
 <head>
 <title>Demedia</title>
 <meta charset="UTF-8" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 
 
 <body id="dashboard">
 
 	
	<div class="container">
		<aside>
			<div class="part_droite1">
				<div class="logo">
					<h2>Demedia</h2>
				</div>
				
				<div class="close" id="close-btn">
					<span class="material-icons-sharp">
					 close
					</span>
				</div>
			</div>
			
	<!-- fin -->
			
	<!-- debut partit en bas du menu avec user ect...-->
			
			
			<?php
			require 'bar_menu.php';
			?>
		</aside>
 
 <!--Debut de uploader le document -->
 
	
	
	<main>
	
	<div class="upload_doc">
		
			<form  method="post" enctype="multipart/form-data"> <!--enctype =multi.. obligerpour upload des fichier -->
			
			<label for="images" class="drop-case" id="drop-case">
				<span class="drop-titre">Déposez les fichiers ici</span>
				ou
				<input type="file" name="fichier" id="fichier" >
			</label>
			<button class="submitBtn" type="submit" id="submitBtn">Enregister l'image</button>
			
			</form>
		</div>
		
		
		<div class="recent_doc">
			<h2>Documents recent </h2>
			<table>
					<thead>
						
							
							<th>Nom</th>
							<th>Taille</th>
							<th></th>
							<th></th>
					</thead>
					<tbody>
					
					
						<?php //var_dump($_SESSION['document']);
						
						
						foreach ($_SESSION['document'][0] ['fichier'] as $value) : ?>
					
					<tr>
					<div class="part_droite2">
						<td>
						
						
							<a href="<?=$value['url'] ?>"download>
							
								<span class="material-icons-sharp">
									description
								</span>
								<h3><?=$value['nom_fichier'] ?></h3>
								
							</a>
						
						</td>
						<td>
							<small><?= $taille= $value['taille']/1024; echo $taille.'ko'; ?> </small>
						</td>
						<td>
						</td>
						
						<td class="nom_doc">
						
						<form method="post" action="req_suprimer_doc_fichier.php">
							<input type="hidden" name="id_fichier" value="<?= $value['id_fichier'] ?>">
							<button type="submit">Supprimer</button>
						</form>
						
						</td>
					</div>
					</tr>
						<?php endforeach; ?>
				
					</tbody>
			</table>
		</div>			
	
	
	
		
		
	</main>
	
	<!--Fin-->
	