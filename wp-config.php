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

//Local env settings
$localSettingsPath = dirname(__FILE__) . '/wp-config.local.php';
if (file_exists($localSettingsPath) !== false) {
  require_once $localSettingsPath;
}

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
define('AUTH_KEY',         'uj}^VS PU|nRfdY!JQYY+9nwB+tbU#2/+R niw?K@p_,=*%gaB@lt]h+}4/Iz%i3');
define('SECURE_AUTH_KEY',  '-C34=<P)tD+|J_]Km@zihv2sT2YSrP)Ru60F<,MSt8N|1F-8!E4.z%G-*|k4XpMR');
define('LOGGED_IN_KEY',    '-Or]Rmnp3EM?(U#~VW*hHVaZ.HEb*lfy!Bv+DHAD2MXH|#C80/R:uXmR+BfN+HG#');
define('NONCE_KEY',        'C(!?h+,`eU#C$l|j^wT*2-PEzFAU^p-{jB_BGJaU^. ES{{-kn+3UpGeyn.m $ir');
define('AUTH_SALT',        '2g`:d`81WLZ7rtl_xF`m5Q<?&+p,[!p(+oW=nGO9](.opOUvs%J{$PMZhK806|lA');
define('SECURE_AUTH_SALT', 'Pip_}p)]{lb3=#[$`IN B.&<E0@}P5}:s/BdFIoZjaZ]6{lXYbJj7tzpv{5 r.!U');
define('LOGGED_IN_SALT',   'zg:uf_,[W-=}+#vat m>,:nKs_eJgft,87+0X6U~o#~|K+&(Y5@t9U*8E&I+,zV?');
define('NONCE_SALT',       'N;?.GW`kj*Pi@L, 5I^}?giQc(52HRl`<3I8zL@~+Y;K-#qc7QB-(S|8;|$aPXv+');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'mmi_wp_';

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
