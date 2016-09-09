<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'diefoupi_ss_dbname6fb');

/** MySQL database username */
define('DB_USER', 'diefoupi_ss_d6fb');

/** MySQL database password */
define('DB_PASSWORD', 'eFoXXbkmSpXv');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'iWCs[XE/OG*hdtxhDKF]sjPVX-Ce$+zRj-]I=[C>e_>*yQKU^c=hsZC*IDqyuJvq<M{_&hI]uc{aBm^pSZ_VA%Q|bnAX^VnQB$*^?j+PmadDi><a/kyVm)!*AhKkacZ^');
define('SECURE_AUTH_KEY', 'zNZKZMAvwn[FX>}s/]tZ(nQC@@aEkWM-N]]xoEE[<OA_%TE;rTQiUN]kpzfb;MCEK%rw@SSB;Q|t^Peq+stv-VZR?]DHyk+RTf^p&!QgAokS*a|t_}hysEG)aQAjmc*O');
define('LOGGED_IN_KEY', 'zt}|gM?guK<_B/(tKO}AtUZkEv|kk[!eDSg@WnhPfjYWKh_!w|ed_p>IglmpOOmi@_]j[Gfv=MTEC-fM>}Iz_Q?L?ousXqbtjPp;vO&{rm(w(m%-VI}U+BEe?qlGSkLR');
define('NONCE_KEY', 'F;Sbq><>uYN_CQCb=/gmjA+fflQeMQVe=GbB_*g_/e?B>d|^SH-SBVJHL-(a(|GB*x]lLhBkmJ|S+cPU[geEA_s^HZ%q@j}]-;|fx_})&legf}e>(%>H$oobiAsfGAS[');
define('AUTH_SALT', 'udHRXo-sT]||re}PftfA?&mdi{_k|zuPEVkTDpuW_UFaR<luQSAa=fZf($pT{=/!qUwe{qKS}<G+j!urZoA*EmLUuPNjm>RKmcHY<KjEgRM+BASY%hh{ERBxYsBgXJER');
define('SECURE_AUTH_SALT', 'CEV@m}GlZT&aZ;?sj!/]US?zRqf<HOhRq|-;fd?BI{VmOOj;FmM!D)JE-yx@Vzv[J?y(<OeWJ+{)YJoJml$FeM+/@R=(bTPP(;gEJc}Cw(Z{/%xJ=V!G]|gY{cH>x%xS');
define('LOGGED_IN_SALT', 'jV^Dp!pfrBmTT*=D%ImnQT>N}yWTjwh[+MHMelTnEKn%hszl@P//<J@{(!@|fOfqaW-Z[yrxYBCj$f?JreF?gzVsKRmrsR]zYy|<DdjMldyvJ=!oV-fihxv^<mU?{LxO');
define('NONCE_SALT', 'jJzk&xJ+c>;IrG+<k&QHyXj}m$>NE=q>cFT_xIOxTmhPL(^e/}sttPIH*]$;MXU(cZ*l+EdE>E=tOswyQsx[F*)jom*-]G^o@={UG[K_/zm?OK@_aK|?Xj<tZ=)kp^y-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hici_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
