
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
	
	<main>

<div class="contain">
<div class="a">
    <div class="b">
        <h2 class="c">Settings</h2>
        <div class="d">
            <ul>
                <h2>Profil</h2>
            </ul>
            <form>
                <div class="d">
                    <div class="e">
                        <div class="f">
						<img src="01.png">
                            </div>
                    </div>
                    <div >
                        <div >
                            <div >
                                <h4 >Brown, Asher</h4>
                                <p>New York, USA</span></p>
                            </div>
                        </div>
                        <div >
                           
                            <div >
                                <p >15 RUE </p>
                                <p > Eget Avenue</p>
                                <p >(+33) 315-1481</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
		</div>
			<div class= "formulaire">
                <div>
                    <div>
                        <label >Firstname</label>
                        <input type="text" placeholder="Brown" />
                    </div>
                    <div >
                        <label>Lastname</label>
                        <input type="text" />
                    </div>
                </div>
                <div >
                    <label >Email</label>
                    <input type="text" placeholder="brown@asher.me" />
                </div>
                <div >
                    <label for="inputAddress5">Address</label>
                    <input type="text" placeholder="P.O. Box 464, 5975 Eget Avenue" />
                </div>
                <div >
                    <div >
                        <label >Company</label>
                        <input type="text"  placeholder="Nec Urna Suscipit Ltd" />
                    </div>
                    <div >
                        <label >State</label>
                        <select>
                            <option selected="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div >
                        <label >Zip</label>
                        <input type="text" placeholder="98232" />
                    </div>
                </div>
                <hr  />
                <div >
                    <div >
                        <div >
                            <label>Old Password</label>
                            <input type="text" />
                        </div>
                        <div>
                            <label>New Password</label>
                            <input type="password" id="inputPassword5" />
                        </div>
                        <div class="form-group">
                            <label >Confirm Password</label>
                            <input type="password"  />
                        </div>
						</div>
						  </div>
			</div>	
                    <div >
                        <p >Password requirements</p>
                        <p >To create a new password, you have to meet all of the following requirements:</p>
                        <ul >
                            <li>Minimum 8 character</li>
                            <li>At least one special character</li>
                            <li>At least one number</li>
                            <li>Can’t be the same as a previous password</li>
                        </ul>
                    </div>
                
                <button type="submit" >Save Change</button>
            </form>
        
    </div>
</div>

</div	
	</main>