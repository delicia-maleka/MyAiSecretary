

<?php
	session_start(); // initialiser ma variable de sessions
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


					
	if(isset($_SESSION["utilisateur"]))
	{
		header("location: dashboard.php");
		exit(); //pour sotir et pas continuer le code 
	}

	$message = "";
	//var_dump($_POST);
	
		if (isset($_POST['email'])&&isset($_POST['pass']))//verifie que tous les variable dans avec cle  specifier est   sont remplis
		{
			$email= strip_tags($_POST['email']); // suprime toute presence en html php  de mon email
			$pass= strip_tags($_POST['pass']);
			
			require_once('php/connexion_bd.php');
			
			
			$req="SELECT `id`,`email`,`role`,`nom`,`prenom` FROM utilisateur  WHERE email='$email' and password='$pass'"; 
			
			$resultat = $conn->prepare($req);
			$resultat->execute();
			 
			
			// je recupere mes donnée avec  fetch() ,elle sont stocker dans mes variables 
			$user = $resultat->  fetch(); //récupère la première ligne de résultat de la requête SQL.
			//var_dump($user);
			//si on a une ligne c'est que on a un compte sinon sa revoie false 
			
				if(!$user )
				{
					$message = "Email et/ou Mot de passe incorrect";	
				}
				
				else
				{
					
					//info qui va etre commune
					$_SESSION['utilisateur'] =
					[
						"nom" => $user['nom'],
						"prenom" => $user['prenom'],
						"email" => $user['email'],
						"role" => $user['role'],
						"id" => $user['id']
					];
					//var_dump($_SESSION);
					header("location:connexion.php");
				}
				
				
			
			


		}

?>






<!DOCTYPE html>
<html lang="fr" id="id">
 <head>
 <title>Demedia</title>
 <meta charset="UTF-8" />
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body id="connexion2">
 

	<div class="page2"> 
		<form class="connexion2"  method="post">
			
				<h2> Welcome Back </h2>
				<h4>Content de vous revoir. Veuillez entrer vos informations ci-dessous.</h4>
				<div class="sous-titre" >
					<h4>Email</h4>
					<input type="Email" name="email" placeholder="Adresse Email" required />
				
					<h4>Mot de passe </h4>
					<input type="password" name="pass" placeholder="Mot de passe " required />
				</div>
				
				<div class="remenber">
					
					<label>
						<input name="remenber"type= "checkbox">
						Se souvenir de moi   
					</label > 
				<div class="mdp_oublier">
					<a href="">Mot de passe oublié</a>
				</div>
				</div>
				<div class="message_alert">
					<p ><?=$message;?> <br><p>
					</div>
				<div class="submit">
					<button type="submit" name="bouton" >Connexion </button>
				</div>
				<div class="new">
					<p> Nouveau chez Demedia ?  <a href="inscription.php">Incrivez-vous</a><p>
				</div>
		</form>
	</div>
	
	
 </body>
  </html>