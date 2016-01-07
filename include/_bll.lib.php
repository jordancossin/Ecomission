<?php

// ----------------------------------------------------------------------------
/* Projet Ecomission
 *
 * Business Logic Layer
 * Classes de gestion du métier (CRUD)
 *
 * Utilise les services de la classe PdoDao
 * Utilise les services de la bibliothèque _reference.lib.php
 *
 * @package 	default
 * @author      Cossion Jordan/Pierson Loïc
 * @version    	1.0
 * @link       	http://www.php.net/manual/fr/book.pdo.php
 */

require_once 'include/_data.lib.php';
require_once 'include/_reference.lib.php';

// classe utilisée pour gérer les négociants
class Negociants {

    /**
     * Méthode qui charge une liste des négociants
     * @param $mode : le type de résultat
     *                  0 == tableau associatif
     *                  1 == tableau "objet"
     * @return un tableau de type "mode"
    */
    static public function chargerNegociants($mode) {
        $cnx = new PdoDao();
        // créer la requête
        $strSQL = "SELECT nonegociant as ID, "
        ."nomnegociant as Nom "
        ."FROM negociant "
        ."ORDER BY nomnegociant";
        try {
            $res = $cnx->getRows($strSQL, array(), $mode);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        return $res;
    }

    /**
     * Méthode qui crée un objet de la classe Negociant à partir de son ID
     * @param $id : l'identifiant du négociant
     * @return un objet de la classe Negociant
    */
    static public function chargerNegociantParID($id) {
        $cnx = new PdoDao();
        // créer la requête
        $strSQL = "SELECT nonegociant as ID, "
        ."nomnegociant as Nom, "
        ."adrnegociant AS Adresse "
        ."FROM negociant "
        ."WHERE nonegociant = ?";
        try {
            $res = $cnx->getRows($strSQL, array($id), 1);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        if ($res != -1) {
            // le négociant existe
            $nom = $res[0]->Nom;
            $adresse = $res[0]->Adresse;
            return new Negociant($id,$nom,$adresse);
        }
        else {
            return NULL;
        }
    }

    /**
     * Méthode qui ajoute un négociant dans la base
     * @param   $params : tableau contenant les valeurs (nom et adresse)
     * @return  un objet de la classe Negociant
    */
    static public function ajouterNegociant($params) {
        $cnx = new PdoDao();
        // créer la requête
        $strSQL = "INSERT INTO negociant (nomnegociant, adrnegociant) "
        ."VALUES (?,?)";
        try {
            $res = $cnx->execSQL($strSQL, $params);
            $strSQL = "SELECT MAX(nonegociant) FROM negociant";
            // récupération du numéro
            $id = $cnx->getValue($strSQL, array());
            // instanciation de l'objet
            $nego = self::chargerNegociantParID($id);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        return $nego;
    }

    /**
     * Méthode qui modifie un négociant dans la base
     * @param   $negociant : un objet de la classe Negociant
     * @return  un entier qui vaut 1 si la maj a été effectuée
    */
    static public function modifierNegociant($negociant) {
        $cnx = new PdoDao();
        // créer la requête
        $strSQL = "UPDATE negociant "
        ."SET nomnegociant = ?, "
        ."adrnegociant = ? "
        ."WHERE nonegociant = ?";
        try {
            $values = array($negociant->getNom(),
                $negociant->getAdresse(),
                $negociant->getID()
                );
            $res = $cnx->execSQL($strSQL, $values);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        return $res;
    }

    /**
     * supprime un négociant de la base
     * @param   $nego : un objet négociant
     * @return  un entier qui contient 1 si la mise à jour a été effectuées
    */
    static public function supprimerNegociant($nego) {
        $cnx = new PdoDao();
        $strSQL = "DELETE FROM negociant "
        . "WHERE nonegociant = ?";
        $values = array($nego->getID());
        try {
            $res = $cnx->execSQL($strSQL,$values);
            // suppression de l'objet en mémoire
            $nego = NULL;
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
        return $nego;
    }

    static public function listeNegociants(){
        $cnx = new PdoDao();
        $strSQL = "SELECT nonegociant, nomnegociant
        FROM negociant
        Order By nomnegociant";

        try {
            $res = $cnx->getRows($strSQL, array(), 0);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        return $res;

    }
}



















// classe utilisée pour gérer les contrats
class Contrats {

    /**
     * Méthode qui charge une liste des contrats
     * @param $mode : le type de résultat
     *                  0 == tableau associatif
     *                  1 == tableau "objet"
     * @return un tableau de type "mode"
    */
    static public function chargerContrats($mode) {
        $cnx = new PdoDao();
        $strSQL = "SELECT nocontrat AS ID,
        datecontrat AS Date,
        variete AS Cereale,
        nomnegociant AS Negociant,
        qtecde AS Commande,
        qtelivree AS Livre,
        qtealivrer AS Reste,
        prix AS Prix,
        montant AS Montant,
        etatcontrat AS Etat
        FROM v_contrats";
        try {
            $res = $cnx->getRows($strSQL, array(), $mode);
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
        return $res;
    }

    /**
     * Méthode qui crée un objet de la classe Negociant à partir de son ID
     * @param $id : l'identifiant du négociant
     * @return un objet de la classe Negociant
    */
    static public function chargerContratParID($id) {
        $cnx = new PdoDao();
        // créer la requête
        $strSQL = "SELECT nocontrat AS ID,
        datecontrat AS Date,
        variete AS Cereale,
        nomnegociant AS Negociant,
        qtecde AS Commande,
        qtelivree AS Livre,
        qtealivrer AS Reste,
        prix AS Prix,
        montant AS Montant,
        etatcontrat AS Etat
        FROM v_contrats
        WHERE nocontrat = ?";
        try {
            $res = $cnx->getRows($strSQL, array($id), 1);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        if ($res != -1) {
            // le contrat existe
            $id      = $res[0]->ID;
            $qtecde  = $res[0]->Commande;
            $prix    = $res[0]->Prix;
            $date    = $res[0]->Date;
            $etat    = $res[0]->Etat;
            $cereale = $res[0]->Cereale;
            return new Contrat($id,$qtecde,$prix, $date, $etat, $cereale);
        }
        else {
            return NULL;
        }
    }

    /**
     * Méthode qui ajoute un négociant dans la base
     * @param   $params : tableau contenant les valeurs (nom et adresse)
     * @return  un objet de la classe Negociant
    */
    static public function ajouterContrat($params) {
        $cnx = new PdoDao();
        // créer la requête
        $strSQL = "INSERT INTO contrat (codecereale, nonegociant, datecontrat, qtecde, prixcontrat, etatcontrat) "
        ."VALUES (?,?,?,?,?,'E')";
        try {
            $res = $cnx->execSQL($strSQL, $params);
            $strSQL = "SELECT MAX(nocontrat) FROM contrat";
            // récupération du numéro
            $id = $cnx->getValue($strSQL, array());
            // instanciation de l'objet
            $contrat = self::chargerContratParID($id);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        return $contrat;
    }

    /**
     * Méthode qui modifie un contrat dans la base
     * @param   $contrat : un objet de la classe contrat
     * @return  un entier qui vaut 1 si la maj a été effectuée
    */
    static public function modifierContrat($contrat) {
        $cnx = new PdoDao();
        // créer la requête
        $strSQL = "UPDATE contrat "
        ."SET codecereale = ?, "
        ." datecontrat = ?, "
        ." qtecde = ?, "
        ." prixcontrat = ? "
        ."WHERE nocontrat = ?";
        try {
            $values = array($contrat->getCodeCereale(),
                            $contrat->getDate(),
                            $contrat->getQteCde(),
                            $contrat->getPrix(),
                            $contrat->getID()
                );
            $res = $cnx->execSQL($strSQL, $values);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        return $res;
    }

}

class Cereales{

    static public function listeCereales(){
        $cnx = new PdoDao();
        $strSQL = "SELECT codecereale, variete
        FROM Cereale
        Order By variete";

        try {
            $res = $cnx->getRows($strSQL, array(), 0);
        } catch (Exception $ex) {
            die ($ex->getMessage());
        }
        return $res;
    }
}