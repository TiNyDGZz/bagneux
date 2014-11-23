<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'bagneux');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '?9;ugI0JlkcDq?s7Yr%!*,9[BGsCNbu8np<9|GE6-Ux*,&Zy, n)sFvTG+y_0b3+');
define('SECURE_AUTH_KEY',  '6[2 b1Ziae#i TQ/j23RxhMhj?%$vl(>U2U|5lRh#P3pc# <6V{68v$*c*v2^Mgm');
define('LOGGED_IN_KEY',    'R #Hhzo8{yFxU$+hFDq%>!+0AB5IQYWQ.s=6i9h4if K`.RvkRNVGFLc|)r+lL1a');
define('NONCE_KEY',        '?(1|SB~Y.YjB>JDB*7-xT8$Jl^Kh$bdL67H- an+gml|{E_-j|#W-R>uFQcu(w`W');
define('AUTH_SALT',        '=~9Q+KW`_GkOK7*W|@ Lhl|!?}4?(X+~9/9Ap]q+JM6JIO#|w)+{@=*F 0OVc->O');
define('SECURE_AUTH_SALT', 'K`oQj}&:%T]4!VFt#P]Tbc=}Riw&q#wcTy[Vg:4|Nk!&615}VY]^4|@-|K 9=:h`');
define('LOGGED_IN_SALT',   ',[4c{Do+v|@=RY&fawBXXOlT5D%|(eEjgactm=OW2v}VMSJ?N$)|Mn2^O0>|--6v');
define('NONCE_SALT',       'co(KbuK.b_AwBG(4,]|b`,)apE+?Mellq`U_8+/kRgU0gfcY|+JKan3G;x_i?I?M');
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');