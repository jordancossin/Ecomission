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

	<!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div id="Header">
            <div class="row" >
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
						<span class="sr-only">Toggle navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<div class="col-xs-12 col-md-6">
						<a class="navbar-brand" href="#">
							<em>Ecomission de Volstroff</em>
							<span class="logo-s"></span>
						</a>
					</div>

					<div class="col-xs-6 col-md-6" id="main-menu">
						<ul class="nav navbar-nav navbar-left">
							<span class="nav-s"></span>
							<li><button  class="btn btn-success"><a id="modal_trigger" href="#modal" >Adherent</a></li>
							<li><button  class="btn btn-success"><a id="modal_triggers" href="#modals">Non Adherent</a></button></li>
						</ul>
					</div>
				<?php include '_v_connexion.php';	?>
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




