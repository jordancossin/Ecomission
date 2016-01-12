<?php
// ----------------------------------------------------------------------------------------
/* Ecomission
 *
*/
// ----------------------------------------------------------------------------------------

/**
 * paramètres de configuration de l'appplication
 */

// gestion d'erreur
ini_set('error_reporting', E_ALL);  	// en phase de développement
//ini_set('error_reporting', 0);  	    // en phase de production

// constantes pour l'accès à la base de données
//define('DB_SERVER', 'localhost');	    // serveur MySql
//define('DB_DATABASE', 'ecomission');	// nom de la base de données
//define('DB_USER', 'root');		        // nom d'utilisateur
//define('DB_PWD', '');                   // mot de passe
//define('DSN','mysql:dbname='.DB_DATABASE.';host='.DB_SERVER);

$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "ecomission";

$cnx = @mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password,
    $mysql_db_database);
if (!$cnx) {
    trigger_error('Connexion à la base impossible: ' . mysqli_connect_error());
}