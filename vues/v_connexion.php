<?php
/**
 * Vue d'affichage du formulaire de connexion
 
 * @package default
 * @author Cossin Jordan / Pierson Loic
 */
?>
	<center>
		﻿<div id="contenu">
			<div id="content-container">	
				<h2>Connexion Adhérents</h2>		
				<div class="main-menu" id="main-menu">						
					<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
						<div class="form-group">
							<label for="focusedInput" class="col-md-5 control-label">Identifiant:</label>
							<div class="col-md-7">
								<input type="login" class="form-control" id="focusedInput" name="login"	placeholder="Votre Identifiant">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedInput" class="col-md-5 control-label">Mot de passe:</label>
							<div class="col-md-7">
								<input type="password" class="form-control" name="mdp" id="focusedInput" placeholder="Mot de passe">
							</div>
						</div>
						<div class="form-group">
							<label  for="inputValider" class="col-md-5 control-label"></label>
							<div class="col-md-7">
								<input type="submit" value="Se connecter" class="btn-success "  />
							</div>
						</div>	
						<label  class="col-md-12 control-label"><a href="#" class="forgot_password">Mot de passe oublié ?</a></label>					
					</form>	
				</div>
			</div>
		</div>
	</center>