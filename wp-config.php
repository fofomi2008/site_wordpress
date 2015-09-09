<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H*sR%^Cv$3+V>g29i5E0,$iCi>/s0~M&BfQ|_tg{D9d*r T%:sk~Y67_5Ad-0+?n');
define('SECURE_AUTH_KEY',  'BZs~*D}uy?/3^yU(0A4.m?~GE$o}nW..7Rq[+PcD,|fm~0e c0-}jp9,5[OSm4f(');
define('LOGGED_IN_KEY',    '5|)=L*-0RaIi@5t;asM?/)[(.E0HQujU1 sOr;((|H1>6BpupDC!-S/r,aq#mB=S');
define('NONCE_KEY',        'J0i07psW=v5^k4|<?J)f,:bY~k*33W%2AyQ^%,2kSXQ0!RUU:pR>V<O2<WK(7~wO');
define('AUTH_SALT',        '=x{p*YWEX|8v{S`lB*?Rq)_Q.xtWG^7CFhN#O1Kkka[TBys=GY^Xw$2BUn[NI[23');
define('SECURE_AUTH_SALT', 'kMrN0eBSqH0y!66[(38{q9>|pxW#.9R5UGkjOGG.3_wA+fLV?[5>lz:}WnBipP46');
define('LOGGED_IN_SALT',   '?Ysx*,9!qQ#;:ubEXi?D/N.CS+fb3$%/=jG$z}-My:J<%x%&=)_Y_eD gn2?H7qx');
define('NONCE_SALT',       '4@t5cU{ur-0-V<kA6@lFbHE|nEf%%?=KI&9F<VNiq;H/myI[eMBu9aP#x_9LL5Ru');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');