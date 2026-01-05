<?php

 //  informations de connexion à la base de donnée
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "demedia";


try{
	// Connexion à la base de données MySQL
		 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


	// Vérifie si la connexion a réussi
}catch (PDOException $e) {die('Erreur : ' . $e->getMessage());}
		
?>