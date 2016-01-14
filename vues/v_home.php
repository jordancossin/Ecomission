<?php
/**
 * Vue d'affichage de la page principale
 * @package default
 * @author Cossin Jordan / Pierson Loic
 */
?>

	<div id="content-container-two-column">
        <div class="col-md-3">
			<h2>
				<center><u>Actualites</u></center>
			</h2>
			<ul class="list-of-links">
				<li>

				</li>
				<li>

				</li>
				<li>

				</li>
				<li>

				</li>
				<ul>

				</ul>
			</ul>
			<div id="content">
				<ul class="menu">
					<li class="item1"><a href="#">Menu </a>
						<ul>
							<li class="subitem1"><a href="#">Adherent</a></li>
							<li class="subitem2"><a href="#">Non Adherent</a></li>
							<li class="subitem3"><a href="#">Brochure</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!--initiate accordion-->
		</div>

		<div class="col-md-6">
				<h2>
					<center>
						<u>Vente direct du producteur  au consommateur</u>
					</center>
				</h2>
				<img src="images/logo.jpg" alt="" width="440px" height="400px">
				<p>
					<h4>
						Vous etes interesses par une relation directe entre producteurs et consommateurs ?<br>
						Les petits paniers sous le preau de l'association Ecomissions de Volstroff vous concerne !
					</h4>
				</p>
				<p></p>
				<div id="three-column-container">
					<div id="three-column-side1">
						<a href="#.aspx">
							<img src="images/produits.jpg" class="photo-border" height="80px" width="160px" alt="Stockage">
						</a>
						<h2>Sous le preau</h2>
						<p>
							<h4>
							   Retirez vos commandes le 2eme mardi de chaque mois,
							   sous le preau a l'ecole de Volstroff de 18h30 a 19h30.
						   </h4>
						</p>
						<br />
						<a href="#.aspx" id="blue">
							En savoir plus
						</a>
						<img class="arrow" src="images/arrow.gif" alt="">						
						<p>
							<h4>
								<strong>Mairie de Volstroff</strong>
								<br />
								Tel: 03 82 56 94 33 <br>
								Fax: 03 82 56 88 80 <br>
								50 rue Principale <br>
								57940 Volstroff <br>
							</h4>
						</p>
						<br>
						<a href="#" id="blue">plan d'acces</a>
					</div>
					<div id="three-column-side2">
						<a href="#.aspx">
							<img src="images/produits.jpg" class="photo-border" height="80px" width="160px" alt="Produits">
						</a>
						<h2>Les producteurs</h2>
						<p>
							<h4>
							   Des producteurs lorrains, aux fermes orientees vers
							   des productions biologiques variees et traditionels.
						   </h4>
						</p>
						<br>
						<a href="#.aspx" id="blue">
							En savoir plus
						</a>
						<img class="arrow" src="images/arrow.gif" alt="">
						<p>
							<h4>
								<strong>
									Mairie de Volstroff
								</strong>
								<p>
									Tel: 03 82 56 94 33 
									Fax: 03 82 56 88 80 
									50 rue Principale 
									57940 Volstroff
								</p>
							</h4>
						</p>
						<br>
						<a href="#" id="blue">plan d'acces</a>
					</div>
					<div id="three-column-middle">
						<a href="#.aspx">
							<img src="images/produits.jpg" class="photo-border" height="80px" width="160px" alt="Produits">
						</a>
						<h2>Les produits</h2>
						<p>
							<h4>
								Nos producteurs vous proposent une gamme de produits
								frais et locaux.
								<br>Consommateurs entierement satisfait
							</h4>
						</p>
						<br >
						<a href="#.aspx" id="blue">
							En savoir plus
						</a>
						<img class="arrow" src="images/arrow.gif" alt="">
						<p></p>
						<h4>
							<strong>Mairie de Volstroff</strong><br>
							Tel: 03 82 56 94 33 <br>
							Fax: 03 82 56 88 80 <br>
							50 rue Principale <br>
							57940 Volstroff <br>
						</h4>
						<br>
						<a href="#" id="blue">plan d'acces</a>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<h2>
					<u>Description</u>
				</h2>
				<br />
				<ul class="list-of-links">
					<li>
						<button class="btn btn-success"><a href="index.php?uc=connexions&action=valide">Adherent</a></button>
					</li>
					<li>
						<button class="btn btn-success"><a href="index.php?uc=lienVers&action=bulletinAdhesion">Non Adherent</a></button>
					</li>
					<li>

					</li>
					<li>

					</li>
					<ul>
					
					</ul>
				</ul>
			</div>
	</div>
	
<?php
include("vues/v_pied.php") ;
?>
