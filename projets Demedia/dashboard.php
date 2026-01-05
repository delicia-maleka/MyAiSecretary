

<?php
	session_start();
	/*var_dump($_FILES);*/
	/*tmp_name:chemin ou ce situe le doc upload  C:\Users\HP... */
	
			require 'php/connexion_bd.php';
			require 'doc_recent_req.php';
			


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
		
		
		
		
	
			// Requête 
			$req1= "INSERT INTO fichier (nom_fichier,type, taille, date_creation, url,id,id_document) VALUES('$file_name','$file_type','$file_size', '$file_date', '$file_url','$id','0')";
			// préparer  requêtes SQL (avec la fonction  query()) pour le send de l'objet de connexion à la base de données $conn.
			$resultat1= $conn-> prepare($req1);
			
	
			if ($resultat1 -> execute() === TRUE  )
			{
				
			// envoi du fichier vers www , doc projet
				$doc_tmp_name= $_FILES['fichier']['tmp_name'];  /*va me stocker le chemin dans la variable */
				$document_path= 'document/'.$file_name;
				move_uploaded_file( $file_name , $file_url);
				
				require 'doc_recent_req.php';
				header("location:dashboard.php");
			} 
			else
			{
				echo'erreur req insert ';die; //modif a faire 	
			}
			
			
			
			
			
	}
			
			
			// Fermer la connexion à la base de données
			require 'php/deconnexion_bd.php';
			
		
		 
	

	
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
 
	<!-- Debut  partit en haut  -->
	
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
	
	<!--fin -->
	
	<!--parti millieu en haut  -->
	
	<main>
	<h2>Documents recent </h2>
	
		<div class="recent_doc">
			<table>
                <thead>
                    
						
                        <th>Nom</th>
						<th></th>
                        <th>Taille</th>
                        <th>date</th>
                        
						<th></th>
						<th><a href="#">Show all</a></th>
				</thead>
                <tbody>
					<?php foreach ($user as $value) : ?>
                <tr>
                    <td class="nom_doc" colspan="2"><?=  htmlspecialchars($value['nom_fichier']) ?></td>
					<td class="nom_doc"><?= $taille = $value['taille']/1024; echo $taille.'ko'; ?></td>
                    <td class="nom_doc"><?= htmlspecialchars($value['date_creation']) ?></td>
					<td> </td>
					<td class="nom_doc">
                        <a href="<?= $value['url'] ?>" target="_blank"> <!-- target="_blank" permettre l'ouverture d'un fichier sur une autres page  <a> -->
                            Voir
                        </a>
                    </td>
					<td class="nom_doc">
                        <a href="<?= $value['url'] ?>"download >
                            Télécharger
                        </a>
                    </td>
                </tr>
					<?php endforeach; ?>
			
				</tbody>
            </table>
			
		</div>
		
	<!-- fin -->

		
	<!--Debut de uploader le document -->
	

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
	</main>
	<!--Fin-->
	<?php
			include('navbar_dashboard.php');
	?>

	</body>
</html>
	