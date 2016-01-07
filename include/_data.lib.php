<?php

// ----------------------------------------------------------------------------
/* Projet CAG
 * 
 * Data Access Object
 * Classe technique d'acc�s aux donn�es 
 * 
 * Utilise les services de la classe PDO
 *
 * @package 	default
 * @author		Cossin Jordan / Pierson Loic
 * @version    	1.0
 */

class PdoDao extends PDO {
    /**
     * Constructeur h�rit� de PDO
     */
    public function __construct() {
        parent::__construct(
                DSN, DB_USER, DB_PWD, array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                )
        );
        try {
            parent::setAttribute(
                    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
            parent::setAttribute(
                    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true
            );
        } catch (Exception $e) {
            die(print_r($e->getMessage()));
        }
    }

    /**
     * Fonction qui renvoie un tableau de valeurs correspondant au r�sultat
     * de l'ex�cution d'une requ�te pr�par�e SQL avec des param�tres anonymes
     * @param $cnx (un objet PDO)
     * @param $sql (la requ�te SQL � ex�cuter)
     * @param $params : un tableau de param�tres contenant 
     * les valeurs � substituer dans la requ�te
     * @param $style : 0 == both, 1 == objet
     * @return un tableau "objet"
     */
    function getRows($sql, $params, $style) {
        try {
            $res = $this->prepare($sql);
            $res->execute($params);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        if ($res->rowCount() > 0) {
            if ($style) {
                return $res->fetchAll(PDO::FETCH_CLASS, 'ArrayObject');
            } else {
                return $res->fetchAll();
            }
        } else {
            return -1;
        }
    }

    /**
     * Fonction qui ex�cute une requ�te action pr�par�e 
     * avec des param�tres anonymes
     * @param $sql : la requ�te SQL � ex�cuter
     * @param $params : un tableau de param�tres contenant les valeurs 
     * � substituer dans la requ�te
     * @return un entier d�signant le nombre de lignes affect�es par
     * l'ex�cution de la requ�te
     */
    function execSQL($sql, $params) {
        try {
            $res = $this->prepare($sql);
            $res->execute($params);
            $nb = $res->rowCount();
        } catch (PDOException $e) {
            $nb = -1;
            die($e->getMessage());
        }
        return $nb;
    }

    /**
     * Fonction qui ex�cute une requ�te pr�par�e 
     * avec des param�tres anonymes et qui r�cup�re une seule valeur
     * @param $sql : la requ�te SQL � ex�cuter
     * La requ�te ne doit renvoyer qu'une colonne et une ligne
     * @param $params : un tableau de param�tres contenant les valeurs 
     * � substituer dans la requ�te
     * @return la valeur r�cup�r�e par l'ex�cution de la requ�te
     */
    function getValue($sql, $params) {
        try {
            $res = $this->prepare($sql);
            $res->execute($params);
            if ($res) {
                $ligne = $res->fetchAll(PDO::FETCH_COLUMN, 0);
                $value = $ligne[0];
                $res->closeCursor();
            }
        } catch (PDOException $e) {
            $value = -1;
            die($e->getMessage());
        }
        return $value;
    }

}