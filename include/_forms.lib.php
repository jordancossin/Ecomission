<?php
// -----------------------------------------------------------------------------
/* Ecomission
 * PHP - Biblioth�ques de fonctions
 * Fonctions g�n�riques d'affichage
 * N�cessite la biblioth�que _data.lib.php
*/
// -----------------------------------------------------------------------------

// -----------------------------------------------------------------------------
/**
 * Affiche une liste de choix � partir d'un jeu de r�sultat de la forme 
 * {identifiant, libell�}
 * @param string $tab : le r�sultat de l'ex�cutino d'une requ�te
 * @param string $classe : la classe CSS � appliquer � l'�l�ment
 * @param string $id : l'id (et nom) de la liste de choix
 * @param int $size : l'attribut size de la liste de choix
 * @param string $idSelect : l'�l�ment � pr�s�lectionner dans la liste
 * @param string $onchange : le nom de la fonction � appeler 
 * en cas d'�v�nement onchange()
 */
 function afficherListe($tab, $classe, $id, $size, $idSelect, $onchange) {
    // affichage de la liste de choix
    echo '<select class="'.$classe.'" name="'.$id.'" id="'.$id.'" size="'
            .$size.'" onchange="'.$onchange . '">';
    if (count($tab) && (empty($idSelect))) {
        $idSelect = $tab[0][0];
    }
    foreach ($tab as $ligne) {
        // l'�l�ment en param�tre est pr�s�lectionn�
        if ($ligne[0] != $idSelect) {
            echo '<option value="'.$ligne[0].'">'
                    .$ligne[1].'</option>';
        } 
        else {
            echo '<option selected value="'.$ligne[0].'">'
                    .$ligne[1].'</option>';
        }
        //$ligne = $tab->fetch();            
    }
    //$tab->closeCursor();
    echo '</select>';
    return ($idSelect);
 }
 