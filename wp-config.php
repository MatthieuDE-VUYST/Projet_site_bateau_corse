<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ls^X`N-|//CF&CbPZ={W:!G[6eaw!cTI;>G%0sH`a0gs*>PlN%h!X>4qM.XEu!L*' );
define( 'SECURE_AUTH_KEY',  'mIXtQk&8DHX@bY{xw)/#T_mW[$o->p|eWyJpxD~W$#sPOsB4+Nt>RN<;KLCI?x|~' );
define( 'LOGGED_IN_KEY',    'xl X|6p!-VEs<+x>EYVut^k)1mfaG?hY+0zBkxM67gppN*7# k|?e]bVea+>e*;}' );
define( 'NONCE_KEY',        '(/dQ~|zxC*g#9jV+.RPEg+*U6Megd}bmh=R&ZxaY.ajb`#H+CLk}M+:_fKzMpkgl' );
define( 'AUTH_SALT',        'p%g#+O_##?5enJciU*jkaJ*)jBE%sI1Zb.<se#}hCw_BrbeG{=*]X=A[H0?bLp3P' );
define( 'SECURE_AUTH_SALT', 'T9fsU.F2%MaW_?Sauj(=3?A3K,^8!mgL:eIifq@$yO0b%{`%TyIiKGg]h,iUw]Ck' );
define( 'LOGGED_IN_SALT',   'i3d5Au5GU%Zd&<dV)0sO!i~O3Nm9toVPZ4>n1H/|ZwoY0d$aeXs*/P:BY>wQhp^N' );
define( 'NONCE_SALT',       '/]$xfUR*:]@~K-0/okknbYC];URKNTKTGbY7-&Pl:4Tab%d e4vhSR5juJr^R@j~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
