

<!DOCTYPE html>
<html lang="fr" id="dashboard">
 <head>
 <title>Demedia</title>
 <meta charset="UTF-8" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 
 
 <body id="dashboard">
   <!-- parti en haut droite -->
        <div class="right-section">
            <div class="info">
          
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?= $_SESSION['utilisateur']['prenom'];?> </b></p>
                        <small class="text-muted"> <?= $_SESSION['utilisateur']['role'];?></small>
						<div class="profile-photo">
							<img src="01.png">
						</div>
                    </div>
                    
                </div>

            </div>
		 </div>
	<!--Fin-->
	</body>
</html>