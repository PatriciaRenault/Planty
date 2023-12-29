<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'db_planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'brjSE&k:8nChEY9|t04gm|uLUsB. sZM^-89;(x[{~Fj+mF.HDV$Tv/x8E:/3xl!' );
define( 'SECURE_AUTH_KEY',  '&7zS[ptH-Q.~zA$tl%cFt^]Q$}6}d=c>}a=|o1%MMs5aUwbZla7LDJq-R<S,q66|' );
define( 'LOGGED_IN_KEY',    ']9(C2mpXL~%{yz#jR+R4yX5S24*?R;rXsEZlp4<PlqqUtaP,~>Z|(y_>`Z`ZDb{)' );
define( 'NONCE_KEY',        'LC>mtrrM!/sv(epZ%~szyNJ~V&ISVvG%KDdeG<1h}Ohw4G2c:70x{D^.Kw1ak%^O' );
define( 'AUTH_SALT',        '}%^d;_8M8e0k.b@{11q=h(*mR4jwzlZ&vLH)2CWM&E~H0tF#u0 .S2DHqAla8soR' );
define( 'SECURE_AUTH_SALT', '{2pFGW{4J0HkP!Hse1%}k+_o@=Ra+ Z(lH+]QrH :IFC2M+qmh}qJ*PZGm0hOESR' );
define( 'LOGGED_IN_SALT',   '4LMOy+j9@n.l6]+ZOLz]MtzLX8)KoY,1-N;f 0hJE`!4Gb4MUUz/+l&RjeKN<e)P' );
define( 'NONCE_SALT',       'oPN-kD_P^,}P&,/pYHj)4`Bs8~h&UvO:KLE_H}qfr%s>].RExwRiU!d|v@u.)]*;' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
