<?php

require_once 'include/_bll.lib.php';

// récupération de l'action à effectuer
if (isset($_GET["action"])) {
    $action = $_GET["action"];
}
else {
    $action = 'listerContrats';
}
// variable pour la gestion des messages
$msg = '&nbsp;';

// diriger vers les bonnes vues
switch ($action) 
{
    case 'consulterContrat' : {
        // récupération de l'identifiant du contrat passé dans l'URL
        $intNoContrat = intval($_GET["id"]);
        // appel de la méthode du modèle
        $leContrat = Contrats::chargerContratParID($intNoContrat);        
        if ($leContrat == NULL) {
            $msg = '<br /><span class="erreur">Ce contrat n\'existe pas !</span>';
        }       
        include 'vues/v_consulter_Contrat.php';
    } break;
    case 'ajouterContrat' : {
        // initialisation des variables
        $negociant  = '' ;
        $date       = '' ;
        $cereale    = '' ;
        $qte        = '' ;
        $prix       = '' ;
        // variables pour la gestion des erreurs
        $tabErreurs = array();
        $hasErrors = false;
        $ajoutOK = false;
        // traitement de l'option : saisie ou validation ?
        if (isset($_GET["option"])) {
            $option = htmlentities($_GET["option"]);
        }
        else {
            $option = 'saisirContrat';
        }
        switch($option) {            
            case 'saisirContrat' : {
                include 'vues/v_ajouter_Contrat.php';
            } break;
            case 'validerContrat' : {
                $values = array();                
                // tests de gestion du formulaire
                if (isset($_POST["cmdFonction"])) {
                    // test zones obligatoires
                    if ( !empty($_POST["txtDate"]) AND
                       !empty($_POST["txtQteCde"]) AND
                       !empty($_POST["txtPrix"])) {
                        // récupération des valeurs saisies
                        $values[0] = htmlentities($_POST["cbxCereale"]);
                        $values[1] = htmlentities($_POST["cbxNegociant"]);
                        $values[2] = htmlentities($_POST["txtDate"]);
                        $values[3] = htmlentities($_POST["txtQteCde"]);
                        $values[4] = htmlentities($_POST["txtPrix"]);
                        
                        $ajoutOK = true; } 
                    else {
                        if (!empty($_POST["txtDate"])) {
                            $tabErreurs["txtDate"] = "La date doit être renseignée !";
                            $hasErrors = true; 
                        }

                        if (!empty($_POST["txtQteCde"])) {
                            $tabErreurs["txtQteCde"] = "La quantité doit être renseignée !";
                            $hasErrors = true; 
                        }
                        else {
                            $tabErreurs["txtPrix"] = "Le prix doit être renseigné !";
                            $hasErrors = true; 
                        }
                    }

                    if ($ajoutOK) {
                    // appel de la méthode d'ajout
                        $leContrat = Contrats::ajouterContrat($values);
                        $msg = '<span class="info">Le contrat a été ajouté</span>';
                        include 'vues/v_recap_ajout_Contrat.php';
                    }
                    else {
                    // afficher les erreurs et on refait une saisie
                        $msg = '<span class="erreur">Des erreurs sont apparues lors de la saisie :</span>';
                        include 'vues/v_ajouter_Contrat.php';
                    }
                }
            } break;        
        }
    } break;    
    case 'modifierContrat' : {
        // initialisation des variables
        $date       = '' ;
        $cereale    = '' ;
        $qte        = '' ;
        $prix       = '' ;
        $hasErrors  = '' ;
        $ajoutOK  = '' ;
        // récup de l'id dans l'url
        $intNoContrat = intval($_GET["id"]);
        // créer une instance de Contrat
        $leContrat = Contrats::chargerContratParID($intNoContrat);
        if ($leContrat == NULL) {
            $msg = '<span class="erreur">Ce contrat n\'existe pas !</span>';
            include 'vues/v_modifier_Contrat.php';
        }
        else {
            if ($leContrat->getEtat() != 'E')
            {
                $msg = 'Ce contrat ne peut être modifié';
                include 'vues/v_modifier_Contrat.php';
                $hasErrors = True;
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
                    $option = 'saisirContrat';
                }
                switch($option) {            
                    case 'saisirContrat' : {
                        include 'vues/v_modifier_Contrat.php';
                    } break;
                    case 'validerContrat' : {
                    // tests de gestion du formulaire
                        if (isset($_POST["cmdFonction"])) {
                    // test zones obligatoires
                            if ( !empty($_POST["txtDate"]) AND 
                               !empty($_POST["txtQteCde"]) AND
                               !empty($_POST["txtPrix"])) {
                            // récupération des valeurs saisies
                                $leContrat->setCodeCereale (htmlentities($_POST["cbxCereale"]));
                                $leContrat->setDate (htmlentities($_POST["txtDate"]));
                                $leContrat->setQteCde (htmlentities($_POST["txtQteCde"]));
                                $leContrat->setPrix (htmlentities($_POST["txtPrix"]));

                                $ajoutOK = true;
                        } 
                        else {
                            if (!empty($_POST["txtDate"])) {
                                $tabErreurs["txtDate"] = "La date doit être renseignée !";
                                $hasErrors = true; }

                                if (!empty($_POST["txtQteCde"])) {
                                    $tabErreurs["txtQteCde"] = "La quantité doit être renseignée !";
                                    $hasErrors = true; 
                                }
                                else {
                                    $tabErreurs["txtPrix"] = "Le prix doit être renseigné !";
                                    $hasErrors = true; 
                                }

                            }
                            if ($ajoutOK) {
                        // appel de la méthode de mise à jour
                                Contrats::modifierContrat($leContrat);
                                $msg = '<span class="info">Le contrat a été modifié</span>';
                                include 'vues/v_consulter_Contrat.php';
                            }
                            else {
                        // afficher les erreurs et on refait une saisie
                                $msg = '<span class="erreur">Des erreurs sont apparues lors de la saisie :</span>';
                                include 'vues/v_modifier_Contrat.php';
                            }
                        }
                    }
                }

            } break;
        }
    } break;
    case 'listerContrats' : {
        $lesContrats = Contrats::chargerContrats(1);
        include 'vues/v_liste_Contrats.php';
    } break;
}

