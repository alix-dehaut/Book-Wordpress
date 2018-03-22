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
define('DB_NAME', 'book_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'W$?m1}R{|#?4:.W&{v1j:Vr x(3-F*C4dnu1BKg?K.&<f;G8]m#`;}cFaYGC^H(7');
define('SECURE_AUTH_KEY',  'SCY4WR<N+un1/VWEApo:ds#A_e^y3)@U=t]=1H(*`1(MQ{dfuQjUk,Rw;A}@l)mR');
define('LOGGED_IN_KEY',    '$,uNpYeUXBBJg+#A~jnyYhk]+.E<)-@j,EL!).e!X|iVLoZ&TpB&CqBo2!J2_HVe');
define('NONCE_KEY',        'J8Qa(&!z%JD.k4gmZo7CiKd}d7dEj]*~=9Ymf)!>+Xk+RI*4B>~H@-{RkE^*so/5');
define('AUTH_SALT',        '8{]+ _3z^xMpg9Rk:HJq$3_bD>-B|<;enJ; QW&A38`GR|H>>3>9LcJ<s)M1JH]`');
define('SECURE_AUTH_SALT', '}S|^}`lRT+e1p884g*}O(njn^J?(_lvwhpW/)5pGYV(&g;4~gl~FR|D,?>cf,tu+');
define('LOGGED_IN_SALT',   'sswHOd|VlA^p|g+L|W*yPwOCUon]rk1Z&R4fN^-bLZx|Ok)cmA9-}@+{*XejSzn`');
define('NONCE_SALT',       'Cp0d+FhzTY*c*S4NTp:hS.yn@5]x )u70E0.V7K:*kpW[%:@r79}eNwZ],WF@ 0!');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'book_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');