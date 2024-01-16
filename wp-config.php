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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'F o#R wmvs ^)D~7ffq*g<x=q9mJwNgW{p.;XI`XT0;@+P..?M%<dQF{,lG HCu^' );
define( 'SECURE_AUTH_KEY',  'bx}Eh.a,.qCyC$aCp= w*e|57Imgad-_CvKU:NO6 F.6]j2Vuxk907&=9R0HdBRH' );
define( 'LOGGED_IN_KEY',    '1q;#Z|Xlq,SkzGV&}aq*Qn)=~s9O2;rMwO2o17gux)Nop3AayQN9l{58)DMc0BD;' );
define( 'NONCE_KEY',        'x/je)Hm#HMd9]Kl}}s8ogCY[C+E!HeKif+&E[Sgrw@+_S5Xxop.%Z7&N~ i$!bX+' );
define( 'AUTH_SALT',        '?roIhPLC!p7u}4}.7K0@2wl1$M.*5ZvF9zdt+ i>$j G?sFg8]FH/uMC^G+OfB*/' );
define( 'SECURE_AUTH_SALT', 'n?RmMTW/C2ySY T`^FlMn{=?L&,-Zx8iRqR. }9-bI6dSO.=Mx,_)`aeke&w2KT_' );
define( 'LOGGED_IN_SALT',   'f].=s9X&-ae.>yqK(;A#jJKnga~c+9msjE{XY<U{?AH2y=N)-E2&(N*oti,.-EVH' );
define( 'NONCE_SALT',       '4jqG+)gJv|~z)u1yD+CSU$|n@7fXD+/m4)hqHG2pqG%2,?`&g3694v@;On`kzB:2' );
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
