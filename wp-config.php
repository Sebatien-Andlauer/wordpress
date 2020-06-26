<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '12345678' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '93Iwm`;Q0Ybaob+*gaz=|I-||Z{muvXH-4gcg!l]Rn*qj!}#T1N^jc6=onucJDX8' );
define( 'SECURE_AUTH_KEY',  'dY!RW)Y.Cwm!-@ShX)9N[|hF6Jb&sKRzS1><%LDgd}yoAP3]:.zlR%-AdIC.:fOl' );
define( 'LOGGED_IN_KEY',    's+lH4|G7LyU` h)LH,TYbstF)zr3jj-SX 0RLotj0*6$#JYL&B@%HFsB:T0XXQ^2' );
define( 'NONCE_KEY',        'w+Rza?D<G6l=uc2uOxVb_UTw:k?_Y#ceA~QO+>;BF|[i+P5=kTf~Et7qvHpc<FPI' );
define( 'AUTH_SALT',        'z@Xy/<03#bn!<DVs)JCH[STeV[9xkX|t{6w=-ba-*^K~d6#$ug#d:u?TE(i84=oN' );
define( 'SECURE_AUTH_SALT', 'QI@%?_[?kBsy.O/+ (}@$S?{YL>)2`zF&Wh{m8?f&T,8EJL:@}-3Dhc#rH Ll|}X' );
define( 'LOGGED_IN_SALT',   '?[(ZVZrNu#yF@sQX3/pRW-$_L:^<sLY?~4j*[qKGCpQmRiPFdD:x]@3YuRQ`bOw<' );
define( 'NONCE_SALT',       '0?Zo]_ul,l~mbxb+-s||%1!EZHQdi6,;0HJ{{J[zL/%,AN)]unp]-Gn}j7aUnC@K' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
