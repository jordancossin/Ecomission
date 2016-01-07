<?php

/** 
 * 
 * Application Ecomission
  * 
 * Reference Layer (Object Value)
 * Classes m�tier
 *
 *
 * @package 	default
 * @author 		Cossin Jordan / Pierson loic
 * @version    	1.0
 */

require_once 'include/_data.lib.php';

/*
 *  ====================================================================
 *  Classe Adherents : represente un adherent
 *  ====================================================================
*/
class adherent {
    
    /**
     * attributs prives
    */				    
    private $_id;
    private $_nom;
	private $_prenom;
    private $_adresse;
    
    /**
     * Constructeur 
    */				
    public function __construct(
        $p_id,
        $p_nom,
	$p_prenom,
        $p_adresse
    ) {
        $this->setID($p_id);
        $this->setNom($p_nom);
        $this->setPrenom($p_prenom);
        $this->setAdresse($p_adresse);
    }

    /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getNom() {
        return $this->_nom;
    }
	
	public function getPrenom() {
        return $this->_prenom;
    }
   
    public function getAdresse() {
        return $this->_adresse;
    }
    
    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setNom($p_nom) {
        $this->_nom = $p_nom;
    }
	
	public function setPrenom($p_prenom) {
        $this->_prenom = $p_prenom;
    }
   
    public function setAdresse ($p_adresse) {
        $this->_adresse = $p_adresse;
    }    
    
    /**
     * M�thodes
    */				
    
    /**
     * retourne le nombre de contrats du n�gociant
     * @return un entier
    */
    // public function nbContrats() {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT COUNT(*) "
                // . "FROM contrat "
                // . "WHERE nonegociant = ?";
        // try {
            // $res = $cnx->getValue($strSQL, array($this->getID()));
        // }
        // catch (PDOException $e) {
            // die($e->getMessage());
        // }
        // return $res;
    // }

    /**
     * retourne le montant des contrats du n�gociant
     * @return un r�el
    */
    // public function montantContrats() {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT SUM(prixcontrat * qtecde) "
                // . "FROM contrat "
                // . "WHERE nonegociant = ?";
        // try {
            // $res = $cnx->getValue($strSQL, array($this->getID()));
        // }
        // catch (PDOException $e) {
            // die($e->getMessage());
        // }
        // return $res;
    // }
    
    /**
     * retourne la date du dernier contrat du n�gociant
     * @return une date
    */
    // public function dateDernierContrat() {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT date_format(MAX(datecontrat),'%d-%m-%Y') "
                // . "FROM contrat "
                // . "WHERE nonegociant = ?";
        // try {
            // $res = $cnx->getValue($strSQL, array($this->getID()));
        // }
        // catch (PDOException $e) {
            // die($e->getMessage());
        // }
        // return $res;
    // }
    
    /**
     * retourne la liste des contrats du n�gociant
     * @param   $mode : 0 == associatif, 1 == objet
     * @return un tableau de type $mode
    */
    // public function contrats($mode) {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT nocontrat AS ID, "
                // . "date_format(datecontrat,'%d-%m-%Y') AS Date, "
                // . "codecereale AS Cereale, "
                // . "qtecde AS Quantite, "
                // . "prixcontrat AS Prix, "
                // . "prixcontrat * qtecde AS Montant, "
                // . "etatcontrat AS Etat "
                // . "FROM contrat "
                // . "WHERE nonegociant = ? "
                // . "ORDER BY nocontrat DESC";
        // try {
            // $res = $cnx->getRows($strSQL, array($this->getID()),$mode);
        // }
        // catch (PDOException $e) {
            // die($e->getMessage());
        // }
        // return $res;
    // }
    
    /**
     * retourne la liste des livraisons du n�gociant
     * @param   $mode : 0 == associatif, 1 == objet
     * @return un tableau de type $mode
    */
    // public function livraisons($mode) {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT c.nocontrat AS ID, "
                // . "codecereale AS Cereale, "
                // . "date_format(dateliv,'%d-%m-%Y') AS Date, "
                // . "qteliv AS Quantite, "
                // . "codesilo AS Silo "
                // . "FROM contrat c INNER JOIN livraison l ON c.nocontrat = l.nocontrat "
                // . "WHERE nonegociant = ? "
                // . "ORDER BY dateliv DESC";
        // try {
            // $res = $cnx->getRows($strSQL, array($this->getID()),$mode);
        // }
        // catch (PDOException $e) {
            // die($e->getMessage());
        // }
        // return $res;
    // }
 
}

/*
 *  ====================================================================
 *  Classe Administrateurs : repr�sente un administrateur
 *  ====================================================================
*/
class Administrateur {
    
    /**
     * attributs priv�s
    */                  
    private $_id;
    private $_nom;
    private $_prenom;
    private $_telephone;
    private $_mail;
    private $_mdp;
	private $_droit;
    
    /**
     * Constructeur 
    */              
    public function __construct(
        $p_id,
        $p_nom,
        $p_prenom,
        $p_telephone,
        $p_mail,
        $p_mdp,
	$p_droit
    ) {
        $this->setID($p_id);
        $this->setNom($p_nom);
        $this->setPrenom($p_prenom);
        $this->setTelephone($p_telephone);
        $this->setMail($p_mail);
        $this->setMdp($p_mdp);
		$this->setDroit($p_droit);
    }

    /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getNom() {
        return $this->_nom;
    }
   
    public function getPrenom() {
        return $this->_prenom;
    }

    public function getTelephone() {
        return $this->_telephone;
    }

    public function getMail() {
        return $this->_mail;
    }
	
	public function getMdp() {
        return $this->_mdp;
    }
	
	public function getDroit() {
        return $this->_droit;
    }

    // public function getNegociant()
    // {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT CONCAT(n.nonegociant, ' - ', n.nomnegociant)
                    // FROM negociant n
                    // INNER JOIN v_contrats c ON c.nomnegociant = n.nomnegociant
                    // WHERE nocontrat = ?";

        // try {
            // $res = $cnx->getValue($strSQL, array($this->getID()), 1);
        // } catch (Exception $ex) {
            // die ($ex->getMessage());
        // }
        // return $res;
    // }

    // public function getQteLivree()
    // {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT qtelivree
                    // FROM v_contrats
                    // WHERE nocontrat = ?";

        // try {
            // $res = $cnx->getValue($strSQL, array($this->getID()), 1);
        // } catch (Exception $ex) {
            // die ($ex->getMessage());
        // }
        // return $res;
    // }

    // public function getReste()
    // {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT qtealivrer
                    // FROM v_contrats
                    // WHERE nocontrat = ?";

        // try {
            // $res = $cnx->getValue($strSQL, array($this->getID()), 1);
        // } catch (Exception $ex) {
            // die ($ex->getMessage());
        // }
        // return $res;
    // }

    // public function getMontant()
    // {
        // $cnx = new PdoDao();
        // $strSQL = "SELECT montant
                    // FROM v_contrats
                    // WHERE nocontrat = ?";

        // try {
            // $res = $cnx->getValue($strSQL, array($this->getID()), 1);
        // } catch (Exception $ex) {
            // die ($ex->getMessage());
        // }
        // return $res;
    // }
  
    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setNom($p_nom) {
        $this->_nom = $p_nom;
    }
   
    public function setPrenom ($p_prenom) {
        $this->_prenom = $p_prenom;
    }

    public function setTelephone($p_telephone) {
        $this->_telephone = $p_telephone;
    }
   
    public function setMail ($p_mail) {
        $this->_mail = $p_mail;    
    }

    public function setMdp ($p_mdp) {
        $this->_mdp = $p_mdp;    
    }
	
	public function setDroit ($p_droit) {
        $this->_droit = $p_droit;    
    }
	
    /**
     * M�thodes
    */ 

    // public function listeCereales(){
        // $cnx = new PdoDao();
        // $strSQL = "SELECT codecereale, variete 
                    // FROM Cereale
                    // Order By variete";

                // try {
            // $res = $cnx->getRows($strSQL, array(), 0);
        // } catch (Exception $ex) {
            // die ($ex->getMessage());
        // }
        // return $res;
    // }   
}

/*
 *  ====================================================================
 *  Classe Commande : repr�sente une commande
 *  ====================================================================
*/
class Commande {
    
    /**
     * attributs priv�s
    */                  
    private $_id;
    private $_libelle;
    private $_reference;
    private $_date;
	private $_conditionnement;
	private $_prix;
	private $_quantite;
	private $_id_ad;
	private $_id_prod;
	private $_nom_ad;
	private $_prenom_ad;
	private $_id_non_ad;
	private $_email;
	private $_telephone;
	private $_lieu;
    
    /**
     * Constructeur 
    */              
    public function __construct(
		$p_id,
		$p_libelle,
		$p_reference,	
		$p_date,
		$p_conditionnement,
		$p_prix,
		$p_quantite,
		$p_id_ad,
		$p_id_prod,
		$p_nom_ad,
		$p_prenom_ad,
		$p_id_non_ad,
		$p_email,
		$p_telephone,
		$p_lieu
    ) {
        $this->setID($p_id);
        $this->setLibelle($$p_libelle);
        $this->setReference($p_reference);
        $this->setDate($p_date);
		$this->setConditionnement($p_conditionnement);
        $this->setPrix($$p_prix);
        $this->setQuantite($p_quantite);
        $this->setIdAd($p_id_ad);
		$this->setIdProd($$p_id_prod);
        $this->setNomAd($p_nom_ad);
        $this->setPrenomAd($p_prenom_ad);
		$this->setIdNonAd($p_id_non_ad);
        $this->setEmail($$p_email);
        $this->setTelephone($$p_telephone);
        $this->setLieu($p_lieu);
    }

    /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getLibelle() {
        return $this->_libelle;
    }
   
    public function getReference() {
        return $this->_reference;
    }

    public function getDate() {
        return $this->_date;
    }
	
	public function getConditionnement() {
        return $this->_conditionnement;
    }
   
    public function getPrix() {
        return $this->_prix;
    }
   
    public function getQuantite() {
        return $this->_quantite;
    }

    public function getIdAd() {
        return $this->_id_ad;
    }
	
	 public function getIdProd() {
        return $this->_id_prod;
    }
	
	public function getNomAd() {
        return $this->_nom_ad;
    }
   
    public function getPrenomAd() {
        return $this->_prenom_ad;
    }
   
    public function getIdNonAd() {
        return $this->_id_non_ad;
    }

    public function getEmail() {
        return $this->_email;
    }
	
	public function getTelephone() {
        return $this->_telephone;
    }
	
	public function getLieu() {
        return $this->_lieu;
    }
    
    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setLibelle($p_libelle) {
        $this->_libelle = $p_libelle;
    }
   
    public function setReference ($p_reference) {
        $this->_reference = $p_reference;
    }

    public function setDate($p_date) {
        $this->_date = $p_date;
    }
   
    public function setConditionnement ($p_conditionnement) {
        $this->_conditionnement = $p_conditionnement;    
    }
	
	public function setPrix ($p_prix) {
        $this->_prix = $p_prix;
    }

    public function setQuantite($p_quantite) {
        $this->_quantite = $p_quantite;
    }
   
    public function setIdAd ($p_id_ad) {
        $this->_id_ad = $p_id_ad;
    }

    public function setIdProd($p_id_prod) {
        $this->_id_prod = $p_id_prod;
    }
   
    public function setNomAd ($p_nom_ad) {
        $this->_nom_ad = $p_nom_ad;    
    }
	
	public function setPrenom ($p_prenom) {
        $this->_prenom = $p_prenom;
    }

    public function setIdNonAd($p_id_non_ad) {
        $this->_id_non_ad = $p_id_non_ad;
    }
   
    public function setEmail ($p_email) {
        $this->_email = $p_email;
    }
	
	public function setTelephone ($p_telephone) {
        $this->_telephone = $p_telephone;
    }
	
	public function setLieu ($p_lieu) {
        $this->_lieu = $p_lieu;
    }

    /**
     * M�thodes
    */              

	
	
}	
	
/*
 *  ====================================================================
 *  Classe Comptes : repr�sente un compte
 *  ====================================================================
*/
class Compte {
    
    /**
     * attributs priv�s
    */                  
    private $_id;
    private $_droit;
    
    /**
     * Constructeur 
    */              
    public function __construct(
        $p_id,
        $p_droit
    ) {
        $this->setID($p_id);
        $this->setDroit($p_droit);
    }

    /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getDroit() {
        return $this->_droit;
    }
    
    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setDroit($p_droit) {
        $this->_droit = $p_droit;
    }
   
    /**
     * M�thodes
    */              
	

	
}
/*
 *  ====================================================================
 *  Classe Fournisseurs : repr�sente un fournisseur
 *  ====================================================================
*/

class Fournisseur {

	/**
     * attributs priv�s
    */				    
    private $_id;
    private $_nom;
	private $_prenom;
    private $_nom_prod;
	private $_site;
	private $_id_com;
    
    /**
     * Constructeur 
    */				
    public function __construct(
        $p_id,
        $p_nom,
        $p_prenom,
        $p_nom_prod,
	$p_site,
	$p_id_com
    ) {
        $this->setID($p_id);
        $this->setNom($p_nom);
	$this->setPrenom($p_prenom);
        $this->setNomProd($p_nom_prod);
	$this->setSite($p_site);
	$this->setIdCom($p_id_com);
    }

    /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getNom() {
        return $this->_nom;
    }
	
	public function getPrenom() {
        return $this->_prenom;
    }
   
    public function getNomProd() {
        return $this->_nom_prod;
    }
	
	public function getSite() {
        return $this->_site;
    }
	
	public function getIdCom() {
        return $this->_id_com;
    }
	
    
    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setNom($p_nom) {
        $this->_nom = $p_nom;
    }
	
	public function setPrenom($p_prenom) {
        $this->_prenom = $p_prenom;
    }
   
    public function setNomProd ($p_nom_prod) {
        $this->_nom_prod = $p_nom_prod;
    } 

	public function setSite ($p_site) {
        $this->_site = $p_site;
    } 

	public function setIdCom ($p_id_com) {
        $this->_id_com = $p_id_com;
    } 	
    
    /**
     * M�thodes
    */				







}
/*
 *  ====================================================================
 *  Classe Non-Adh�rents : repr�sente un non-adh�rent
 *  ====================================================================
*/
class NonAdherent {
    
    /**
     * attributs priv�s
    */                  
    private $_id;
	private $_email;
	private $_telephone;
	private $_lieu;
	private $_adresse;
    
    /**
     * Constructeur 
    */              
    public function __construct(
        $p_id,
        $p_email,
        $p_telephone,
        $p_lieu,
        $p_adresse
    ) {
        $this->setID($p_id);
        $this->setEmail($$p_email);
        $this->setTelephone($$p_telephone);
        $this->setLieu($p_lieu);
        $this->setAdresse($p_adresse);
    }
	
	 /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getEmail() {
        return $this->_email;
    }
	
	public function getTelephone() {
        return $this->_telephone;
    }
	
	public function getLieu() {
        return $this->_lieu;
    }
	
	public function getAdresse() {
        return $this->_adresse;
    }
    
    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setEmail ($p_email) {
        $this->_email = $p_email;
    }
	
	public function setTelephone ($p_telephone) {
        $this->_telephone = $p_telephone;
    }
	
	public function setLieu ($p_lieu) {
        $this->_lieu = $p_lieu;
    }

    public function setAdresse($p_adresse) {
        $this->_adresse = $p_adresse;
    }
    /**
     * M�thodes
    */              

	
	
}

/*
 *  ====================================================================
 *  Classe Produits : repr�sente un Produit
 *  ====================================================================
*/

class Produit {
    
    /**
     * attributs priv�s
    */                  
    private $_id;
    private $_nom_prod;
	private $_conditionnement;
	private $_prix;
	private $_quantite;
	private $_id_fourn;
    
    /**
     * Constructeur 
    */              
    public function __construct(
		$p_id,
		$p_nom_prod,
		$p_conditionnement,
		$p_prix,
		$p_quantite,
		$p_id_fourn
    ) {
        $this->setID($p_id);
        $this->setNomProd($p_nom_prod);
	$this->setConditionnement($p_conditionnement);
        $this->setPrix($$p_prix);
        $this->setQuantite($p_quantite);
        $this->setIdFourn($p_id_fourn);
    }

    /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getNomProd() {
        return $this->_nom_prod;
    }
   
	public function getConditionnement() {
        return $this->_conditionnement;
    }
   
    public function getPrix() {
        return $this->_prix;
    }
   
    public function getQuantite() {
        return $this->_quantite;
    }

    public function getIdFourn() {
        return $this->_id_fourn;
    }

    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setNomProd($p_nom_prod) {
        $this->_nom_prod = $p_nom_prod;
    }
   
    public function setConditionnement ($p_conditionnement) {
        $this->_conditionnement = $p_conditionnement;    
    }
	
	public function setPrix ($p_prix) {
        $this->_prix = $p_prix;
    }

    public function setQuantite($p_quantite) {
        $this->_quantite = $p_quantite;
    }
   
    public function setIdFourn ($p_id_fourn) {
        $this->_id_fourn = $p_id_fourn;
    }

    /**
     * M�thodes
    */              

	
	
}	

/*
 *  ====================================================================
 *  Classe S-administrateur : repr�sente un super administrateur
 *  ====================================================================
*/

class SuperAdministrateur {
    
    /**
     * attributs priv�s
    */                  
    private $_id;
    private $_nom;
    private $_prenom;
    private $_telephone;
    private $_mail;
    private $_mdp;
    private $_droit;
    
    /**
     * Constructeur 
    */              
    public function __construct(
        $p_id,
        $p_nom,
        $p_prenom,
        $p_telephone,
        $p_mail,
        $p_mdp,
		$p_droit
    ) {
        $this->setID($p_id);
        $this->setNom($p_nom);
        $this->setPrenom($p_prenom);
        $this->setTelephone($p_telephone);
        $this->setMail($p_mail);
        $this->setMdp($p_mdp);
		$this->setDroit($p_droit);
    }

    /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getNom() {
        return $this->_nom;
    }
   
    public function getPrenom() {
        return $this->_prenom;
    }

    public function getTelephone() {
        return $this->_telephone;
    }

    public function getMail() {
        return $this->_mail;
    }
	
	public function getMdp() {
        return $this->_mdp;
    }
	
	public function getDroit() {
        return $this->_droit;
    }
 
    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setNom($p_nom) {
        $this->_nom = $p_nom;
    }
   
    public function setPrenom ($p_prenom) {
        $this->_prenom = $p_prenom;
    }

    public function setTelephone($p_telephone) {
        $this->_telephone = $p_telephone;
    }
   
    public function setMail ($p_mail) {
        $this->_mail = $p_mail;    
    }

    public function setMdp ($p_mdp) {
        $this->_mdp = $p_mdp;    
    }
	
	public function setDroit ($p_droit) {
        $this->_droit = $p_droit;    
    }
	
    /**
     * M�thodes
    */ 

}




/*
 *  ====================================================================
 *  Classe Stocks : repr�sente un stock
 *  ====================================================================
*/
class Stock {
    
    /**
     * attributs priv�s
    */                  
    private $_id;
    private $_nom_prod;
	private $_conditionnement;
	private $_prix;
	private $_quantite;
    
    /**
     * Constructeur 
    */              
    public function __construct(
		$p_id,
		$p_nom_prod,
		$p_conditionnement,
		$p_prix,
		$p_quantite
    ) {
        $this->setID($p_id);
        $this->setNomProd($p_nom_prod);
	$this->setConditionnement($p_conditionnement);
        $this->setPrix($$p_prix);
        $this->setQuantite($p_quantite);
    }

    /**
     * Accesseurs
    */

    public function getID() {
        return $this->_id;
    }
   
    public function getNomProd() {
        return $this->_nom_prod;
    }
   
	public function getConditionnement() {
        return $this->_conditionnement;
    }
   
    public function getPrix() {
        return $this->_prix;
    }
   
    public function getQuantite() {
        return $this->_quantite;
    }

    /**
     * Mutateurs
    */
    
    public function setID ($p_id) {
        $this->_id = $p_id;
    }

    public function setNomProd($p_nom_prod) {
        $this->_nom_prod = $p_nom_prod;
    }
   
    public function setConditionnement ($p_conditionnement) {
        $this->_conditionnement = $p_conditionnement;    
    }
	
	public function setPrix ($p_prix) {
        $this->_prix = $p_prix;
    }

    public function setQuantite($p_quantite) {
        $this->_quantite = $p_quantite;
    }

    /**
     * M�thodes
    */              		
}
