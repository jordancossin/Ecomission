<?php
/**
 * Vue conteneur de toutes les pages avec le menu de gauche

 * @package default
 * @author Cossin Jordan / Pierson Loic
 */
/**
 *
 */
?>

<!-- Division pour le sommaire -->
<div class="row" col-md-12>
  <div id="menuGauche"class="col-md-4">
    <div id="infosUtil">
      <div id="content">
        <ul class="menu" >
          <li class="item1"><a href><?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?></a>
          </li>
          <ul>
            <li class="subitem2"><a href="#">Mon Compte</a></li>
            <li class="subitem3"><a href="#">Deconnexion</a></li>
          </ul>
        </ul>
      </div>
    </div>
  </div>


    <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span> Navigation</h3>
            </div>
            <div class="panel-body">
                <div class="rowdivsommaire">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=gererFrais&amp;action=saisirFrais" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br>Mon compte</a>

                        <a href="#" class="btn btn-lg btn-warning" role="button"><span class="glyphicon glyphicon-barcode"></span> <br>Commander</a>

                        <a href="#" class="btn btn-lg btn-warning" role="button"><span class="glyphicon glyphicon-barcode"></span> <br>Commande Actuelle</a>

                        <a href="index.php?uc=gererFrais&amp;action=saisirFrais" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-plus-sign"></span> <br>Historique</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
