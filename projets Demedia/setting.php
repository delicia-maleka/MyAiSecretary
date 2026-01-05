
<!DOCTYPE html>
<html lang="fr" id="dashboard">
 <head>
 <title>Demedia</title>
 <meta charset="UTF-8" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 
 
 <body id="setting">
 
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
	
<main class="main_setting">	
	
	<div class="contain">
	<div class="a">
    <div class="b">
        <h2 >Settings</h2>
        <div class="c">
            <ul>
                
                    <a class="d" href="#" >Notifications</a>
               
            </ul>
            <h5>Notifications Settings</h5>
            <p>Selectionner les notification que vous desirer</p>
            <hr class="my-4" />
            <strong class="mb-0">Securité</strong>
            <p>L'alerte de sécurité du contrôle vous sera notifiée.</p>
            <div class="d">
                <div class="list-group-item">
                    <div class="f">
                        <div class="g">
                            <strong >Notifications d'activités inhabituelles</strong>
                            <p>Donec in quam sed urna bibendum tincidunt quis mollis mauris.</p>
                        </div>
                        <div class="h">
                            <div class="i">
                                <input type="checkbox"  checked="" />
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="j">
                        <div class="k">
                            <strong ">Activité financière non autorisée</strong>
                            <p >Fusce lacinia elementum eros, sed vulputate urna eleifend nec.</p>
                        </div>
                        <div >
                            <div class="l">
                                <input type="checkbox"  id="alert2" />
                                <span ></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <strong >System</strong>
            <p>Veuillez activer l'alerte système.</p>
            <div class="m">
                <div class="n">
                    <div class="o">
                        <div class="p">
                            <strong >M'informer des nouvelles fonctionnalités et des mises à jour</strong>
                            <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="q">
                            <div class="r">
                                <input type="checkbox" class="custom-control-input" id="alert3" checked="" />
                                <span class="custom-control-label"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="s">
                        <div class="t">
                            <strong >M'avertir par courriel des dernières nouvelless</strong>
                            <p>Nulla et tincidunt sapien. Sed eleifend volutpat elementum.</p>
                        </div>
                        <div class="u">
                            <div class="v">
                                <input type="checkbox" class="custom-control-input" id="alert4" checked="" />
                                <span ></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="w">
                        <div class="x">
                            <strong>M'avertir par e-mail des dernières nouvelles</strong>
                            <p class="text-muted mb-0">Donec in quam sed urna bibendum tincidunt quis mollis mauris.</p>
                        </div>
                        <div class="y">
                            <div class="z">
                                <input type="checkbox"  id="alert5" />
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	</main>
	
	
	
	
	
	
	
	
	
	
	
