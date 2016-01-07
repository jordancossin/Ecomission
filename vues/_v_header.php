<!DOCTYPE html>
<html>
    <head>
        <title>Association Ecomission de Volstroff / Les Petits Paniers</title>
        <meta charset="UTF-8" />
        <meta lang="fr">
        <link rel="stylesheet" type="text/css" href="styles/screen.css" />
        <link rel="stylesheet" type="text/css" href="styles/coop.css" />
    </head>
    <body>
        <div id="Header">
            <hr>
            <div class="row" >
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<div class="logo-wrapper">
						<a class="navbar-brand" href="#">
							<em>Ecomission de Volstroff</em>
							<span class="logo-s"></span>
						</a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="main-menu">
					<ul class="nav navbar-nav navbar-right">
						<span class="nav-s"></span>
						<li><button type="button" class="btn btn-success"><a id="modal_trigger" href="#modal">Adherent</a></button></li>
						<li><button type="button" class="btn btn-success"><a id="modal_triggers" href="#modals">Non Adherent</a></button></li>
					</ul>
				</div>
				
				<div id="modal" class="popupContainer" style="display:none; ">
					<header class="popupHeader">
						<span class="header_title">Se connecter</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
					</header>
				
					<section class="popupBody">
						<!-- Social Login -->
						<div class="social_login">
							<div class="">
								<form>
									<label>Identifiant</label>
									<input type="text" />
									<P />

									<label>Mot de passe</label>
									<input type="password" />
									<br />
									<p />
									<input type="submit" value="Se connecter" />					
								</form>
								<a href="#" class="forgot_password">Mot de passe oublié ?</a>
							</div>
						</div>
					</section>
				</div>	
				<script type="text/javascript">
					$("#modal_trigger").leanModal({top : 150, overlay : 0.6, closeButton: ".modal_close" });

					$(function(){
						// Calling Login Form
						$("#login_form").click(function(){
							$(".social_login").hide();
							return false;
						});
					})
				</script>
            </div>
        </div>
		
		
		
						
						