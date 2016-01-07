<?php

require_once 'include/_bll.lib.php';

// récupération de l'action à effectuer
if (isset($_GET["action"])) {
    $action = $_GET["action"];
}
else {
    $action = 'listerNegociants';
}
// variable pour la gestion des messages
$msg = '&nbsp;';

// diriger vers les bonnes vues
switch ($action) 
{
    case 'consulterNegociant' : {
        // récupération de l'identifiant du négociant passé dans l'URL
        $intNoNegociant = intval($_GET["id"]);
        // appel de la méthode du modèle
        $leNegociant = Negociants::chargerNegociantParID($intNoNegociant);        
        if ($leNegociant == NULL) {
            $msg = '<br /><span class="erreur">Ce négociant n\'existe pas !</span>';
        }       
        include 'vues/v_consulter_negociant.php';
    } break;
    case 'ajouterNegociant' : {
        // initialisation des variables
        $strNom = '';
        $strAdresse = '';
        // variables pour la gestion des erreurs
        $tabErreurs = array();
        $hasErrors = false;
        $ajoutOK = false;
        // traitement de l'option : saisie ou validation ?
        if (isset($_GET["option"])) {
            $option = htmlentities($_GET["option"]);
        }
        else {
            $option = 'saisirNegociant';
        }
        switch($option) {            
            case 'saisirNegociant' : {
                include 'vues/v_ajouter_negociant.php';
            } break;
            case 'validerNegociant' : {
                $values = array();                
                // tests de gestion du formulaire
                if (isset($_POST["cmdFonction"])) {
                    // test zones obligatoires
                    if (!empty($_POST["txtNom"])) {
                        // récupération des valeurs saisies
                        $values[0] = htmlentities($_POST["txtNom"]);
                        $ajoutOK = true;
                    } else {
                        $tabErreurs["txtNom"] = "Le nom doit être renseigné !";
                        $hasErrors = true;
                    }
                    if (!empty($_POST["txtAdresse"])) {
                        $values[1] = htmlentities($_POST["txtAdresse"]);
                    }
                    else {
                        $values[1] = NULL;
                    }                    
                }
                if ($ajoutOK) {
                    // appel de la méthode d'ajout
                    $leNegociant = Negociants::ajouterNegociant($values);
                    $msg = '<span class="info">Le négociant a été ajouté</span>';
                    include 'vues/v_recap_ajout_negociant.php';
                }
                else {
                    // afficher les erreurs et on refait une saisie
                    $msg = '<span class="erreur">Des erreurs sont apparues lors de la saisie :</span>';
                    include 'vues/v_ajouter_negociant.php';
                }
            } break;        
        }
    } break;    
    case 'modifierNegociant' : {
        // récup de l'id dans l'url
        $intNoNegociant = intval($_GET["id"]);
        // créer une instance de Negociant
        $leNegociant = Negociants::chargerNegociantParID($intNoNegociant);
        if ($leNegociant == NULL) {
            $msg = '<span class="erreur">Ce négociant n\'existe pas !</span>';
            include 'vues/v_modifier_negociant.php';
        }
        else {
            // variables pour la gestion des erreurs
            $tabErreurs = array();
            $hasErrors = false;
            $ajoutOK = false;
            // traitement de l'option : saisie ou validation ?
            if (isset($_GET["option"])) {
                $option = htmlentities($_GET["option"]);
            }
            else {
                $option = 'saisirNegociant';
            }
            switch($option) {            
                case 'saisirNegociant' : {
                    include 'vues/v_modifier_negociant.php';
                } break;
                case 'validerNegociant' : {
                    // tests de gestion du formulaire
                    if (isset($_POST["cmdFonction"])) {
                        // test zones obligatoires
                        if (!empty($_POST["txtNom"])) {
                            // récupération des valeurs saisies
                            $leNegociant->setNom(htmlentities($_POST["txtNom"]));
                            $ajoutOK = true;
                        } else {
                            $tabErreurs["txtNom"] = "Le nom doit être renseigné !";
                            $hasErrors = true;
                        }
                        if (!empty($_POST["txtAdresse"])) {
                            $leNegociant->setAdresse(htmlentities($_POST["txtAdresse"]));
                        }
                        else {
                            $leNegociant->setAdresse(NULL);
                        }                    
                    }
                    if ($ajoutOK) {
                        // appel de la méthode de mise à jour
                        Negociants::modifierNegociant($leNegociant);
                        $msg = '<span class="info">Le négociant a été modifié</span>';
                        include 'vues/v_consulter_negociant.php';
                    }
                    else {
                        // afficher les erreurs et on refait une saisie
                        $msg = '<span class="erreur">Des erreurs sont apparues lors de la saisie :</span>';
                        include 'vues/v_modifier_negociant.php';
                    }
                } break;        
            }
        }
    } break;
    case 'supprimerNegociant' : {
            // récupération de l'identifiant du négociant passé dans l'URL
            $intNoNegociant = intval($_GET["id"]);
            // récupération des données relatives à ce négociant
            $leNegociant = Negociants::chargerNegociantParID($intNoNegociant);
            // peut-on supprimer le négociant ?
            if ($leNegociant->nbContrats() == 0) {
                $leNegociant = Negociants::supprimerNegociant($leNegociant);
                $msg = '<span class="info">Le négociant a été supprimé</span>';
            }
            else {
                $msg = '<span class="erreur">Le négociant ne peut pas être supprimé, il a des contrats</span>';
            }
            include 'vues/v_consulter_negociant.php';
        } break;
    case 'listerNegociants' : {
        $lesNegociants = Negociants::chargerNegociants(1);
        include 'vues/v_liste_negociants.php';
    } break;
}

