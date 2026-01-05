

<?php
		session_start();
		require 'php/connexion_bd.php';
		$id=$_SESSION['utilisateur']['id'];
		$req="SELECT `fichier`.`nom_fichier`, `fichier`.`taille`,`fichier`.`id_fichier` ,`fichier`.`date_creation`, `fichier`.`url` FROM fichier   WHERE fichier.id='$id' ";
		

		$req1="SELECT `document`.`id_document`,`document`.`taille`,`document`.`date_creation` FROM document  WHERE document.id='$id' ORDER BY `document`.`date_creation` DESC  "; 
		$resultat = $conn-> prepare($req);
		
		if ($resultat -> execute() === TRUE)
			{
				$user= $resultat -> fetchALL();
					
					
		
			
				//var_dump($user);
			}
			else
			{
					echo'erreur requete ';die; //modif a faire 	
			}
			
			
		$resultat1 = $conn-> prepare($req1);
		if ($resultat1 -> execute() === TRUE)
			{
				$user1= $resultat1 -> fetchALL();
				
				
				
				
			}
			
			else
			{
					echo'erreur requete select  '; //modif a faire 	
			}
			
?>

<!DOCTYPE html>
<html lang="fr" id="dashboard">
 <head>
 <title>Demedia</title>
 <meta charset="UTF-8" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp+Symbols+Outline" rel="stylesheet">
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
	
	<main>
	
	<?php
			include('navbar_dashboard.php');
	?>
			<div class="search_bar">
				<span class="material-icons-sharp">
					search
				</span>
				<form  method="post"> 
				<input type="search" name="search_bar" id="search_bar" >
				</form>
			</div>
			
			<div class="mes_doc">
				<table class="probleme">
					<thead>
						
							
							<th>
								<a href="req_nouveau_doc.php">
									<span class="material-icons-sharp">
										create_new_folder
									</span>
									<small>Nouveau dossier</small>
								</a>
							</th>
							<th></th>
							<th></th>
							<th></th>
							
							
							
					</thead>
					<tbody>
						<?php 
						$_SESSION['document'] = array();
						$i=0;//iteration pour que chaque ligne document/fichier est un boutons suprimer avec l'id doc respective
						
						
						foreach ($user1 as $document) : 
						?>
					<tr>
					<div class="part_droite2">
						<td>
							<a href="open_folder.php">
								<span class="material-icons-sharp">
									folder
								</span>
								<h3>
								<!-- = pour afficher les variable direct sans echo -->
									<!-- ici j'effectue ma requete de recherche des fichier pour chaque doc trouver -->
									<?=
										$document['id_document'] ;
											require 'php/connexion_bd.php';
											$req2="SELECT `fichier`.`nom_fichier`, `fichier`.`taille`, `fichier`.`date_creation`, `fichier`.`url`,`fichier`.`id_fichier` FROM fichier INNER JOIN document on document.id_document = fichier.id_document  WHERE fichier.id='$id' and document.id_document = fichier.id_document";
											$resultat2 = $conn-> prepare($req2);
																					
											if ($resultat2 -> execute() === TRUE)
												{
													$fichier= $resultat2 -> fetchALL(); 	/*la j'obtiens sous forme de tab mes result et je vais les parcourir pour recuperer chaque fichier et les stocker dans ma variable session*/
																						
													
														$_SESSION['document'][] = [
														'doc' => $document, 
														'fichier' => $fichier]; /*Le [] après $_SESSION['document'] indique que je veux ajouter un nouvel élément au tableau.*/ 
													
																						
												}
																		
												else
												{
													echo'erreur requete select  '; //modif a faire 	
												}
												require 'php/deconnexion_bd.php';
																						
												//var_dump($_SESSION['document']);						
									?>
								</h3>
								
							</a>
						
						</td>
						
						<td>
							<small><?= $taille= $document['taille']/1024; echo $taille.'ko'; ?> </small>
						</td>
						<td></td>
						<td class="nom_doc">
						
					
							<form  method="post" action="req_suprimer_doc.php">
							<input type="hidden" name="id_document" value="<?=  $_SESSION['document'][$i]['doc']['id_document']; ?>">
							<?php $i++;?>
							<button class="bouton_doc"type="submit">Supprimer </button>
							</form>
						
						</td>
						
					</div>
					</tr>
						<?php $_SESSION['document_id']= $document['id_document']; endforeach;  ?>
						
					</tbody>
				</table>
				
				<table>
					<thead>
						
							
							<th></th>
							<th></th>
							<th></th>
							
					</thead>
					<tbody>
						<?php 
						//var_dump($user);
						foreach ($user as $value) : { 
						
						?>
				
					<tr>
					<div class="part_droite2">
						<td>
							<a href="<?=$value['url']?>"target="_blank">
								<span class="material-icons-sharp">
									description
								</span>
								<h3><?=$value['nom_fichier'] ?></h3>
								
							</a>
						
						</td>
						<td>
							<small><?= $taille= $value['taille']/1024; echo $taille.'ko'; ?> </small>
						</td>
						
						<td class="nom_doc" >
							<form method="post" action="req_suprimer_fichier.php">
							<input type="hidden" name="id_fichier" value="<?=  $value['id_fichier'] ?>">
							<button type="submit">Supprimer</button>
							</form>
						</td>
					</div>
					</tr>
						<?php } endforeach; ?>
				
				
					</tbody>
				</table>
			</div>			
	</main>
	
	<!--Fin-->
	

	</body>
</html>