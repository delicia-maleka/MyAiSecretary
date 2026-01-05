
<?php
session_start();
//var_dump($_SESSION);die;
?>

<!DOCTYPE html>
<html lang="fr" id="id">
 <head>
 <title>Demedia</title>
 <meta charset="UTF-8" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
	 <body id="bienvenu_inscription">
	 
		<div class="bienvenu_inscription">
			
			<div class="text_pages_bienvenu_inscription">
			<h2>BIENVENU <span><?= $_SESSION['prenom'];?></span><br></h2>
			<h4>Votre comptre a été crée,vous pouvez desormais vous connectez </h4>
			 </div>
			
			<div class="fleche_suivant">
				<a href="connexion.php">
					<span class="material-symbols-outlined">
						navigate_next
					</span>
						
				</a>
			
			</div>
		</div>
		
	</body>
</html>