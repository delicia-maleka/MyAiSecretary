
	<?php
	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

		
	//si deja connecter 
	if(isset($_SESSION["utilisateur"]))
	{
		header("location: dashboard.php");
		exit(); //pour sotir et pas continuer le code 
	}

		//isset — Détermine si une variable est déclarée et est différente de null
		//var_dump($_POST);
		if (isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['pass'])&&isset($_POST['email']))//verifie que tous les variable dans avec cle  specifier est   sont remplis
	{
		//pour proteger les données jutilise strip_tags en enlevant les balise html et php 
		$nom = strip_tags($_POST['nom']);
		$prenom = strip_tags($_POST['prenom']);
		$email = strip_tags($_POST['email']);
		$pass=strip_tags ($_POST["pass"]);
		$role='User';
		
		//hasher le mots de passe 
		$pass_hacher= Password_hash($_POST["pass"],PASSWORD_BCRYPT);
		//die($pass_hacher);
		require 'php/connexion_bd.php';
		if ($conn) 
		{
			
			// Requête d'insertion donne dans la table connexion et user 
			$req1= "INSERT INTO `utilisateur` (`email`,`role`, `nom`, `prenom`,`password`) VALUES('$email', '$role', '$nom', '$prenom','$pass')";
			$resultat = $conn->query($req1);//prépare et execute la premiere requêtes SQL (avec la méthode prepare()) pour le send de l'objet de connexion à la base de données $conn.
 
			$_SESSION['prenom'] = $prenom; // je recup prenom  pour la page bienvenu 
			//var_dump($_SESSION);die;
		header("location:bienvenu_inscription.php");
			require ('php/deconnexion_bd.php');	
			
			
		}
		
		//pas besoin de refaire exit code php fini 
	}
	
	
	?>
	
<!DOCTYPE html>
<html lang="fr" id="id">
 <head>
 <title>Demedia</title>
 <meta charset="UTF-8" />
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body id="connexion">
 
	<div class="page3"> 
		<form class="connexion2"  method="POST">
			
				<h2> Sign up </h2>
				<h4>Bienvenue parmi nous. Veuillez entrer vos informations ci-dessous.</h4>
				<div class="sous-titre">
					<h4>Nom </h4>
					<input type="text" name="nom" placeholder=" Votre nom " required />
					<h4>Prénoms </h4>
					<input type="text" name="prenom" placeholder=" Votre prénom " required />
					<h4>Email</h4>
					<input type="Email" name="email" placeholder="Adresse Email" required />
					<h4>Mot de passe </h4>
					<input type="Password" name="pass" placeholder="Mot de passe " required />
				</div>
				<div class="submit">
					<button type="submit" name = "bouton" >Inscription </button>
				</div>
				<div class="new">
					<p> Déja membre ?  <a href="connexion.php">Connectez-vous</a><p>
				</div>
		</form>
	</div>
	
	
 </body>
  </html>