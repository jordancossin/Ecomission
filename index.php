<?php
/**
 * Page d'accueil de l'application Ecomission

 * Point d'entrée unique de l'application
 * @author Cossin Jordan / Pierson Loic
 * @package default
 */

session_start(); // début de session

// on simule un utilisateur connecté (en phase de test)
$_SESSION['id']     = 9999;
$_SESSION['nom']    = 'Dupont';
$_SESSION['prenom'] = 'Jean';

// inclure les bibliothèques de fonctions
require_once 'include/_config.inc.php';
require_once 'include/_data.lib.php';
require_once 'include/_forms.lib.php';

/*
  Récupère l'identifiant de la page passée par l'URL.
  Si non défini, on considère que la page demandée est la page d'accueil
 */
if (isset($_GET["uc"])) {
    $uc = $_GET["uc"];
}
else {
    $uc = 'home';
}
// charger la uc selon son identifiant
switch ($uc)
{
    case 'connexion' :
        include 'controleurs/c_connexion.php'; break;
    case 'gererContrats' :
        include 'controleurs/c_gerer_contrats.php'; break;
    case 'gererLivraisons' :
        include 'controleurs/c_gerer_livraisons.php'; break;
    default : include 'vues/_v_home.php'; break;
}


