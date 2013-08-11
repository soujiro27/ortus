<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '270183jc');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'QD{bW&DfE>v%U!`=-rtWD78?)n5jFFoI0K5K7&2iYQCeR]-f0kK55A;tAR>58~YD'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'Fr~BxuEU<egz}/}Ajq/~<iEeD`s <*{/++ziWr+_L``}zCd_n%(IASD8|Z3+emz '); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '&Nan/{8aw8v;RLkZ2u-Z:Mb_RY-A#|*{)6ERxHA9??~c}Q1smXCRg<BJP$f3E(Sm'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'Dk|DtjM!c-Vb=;Yc^|nNvWcFk<?%4r|]b8L92QVVDvJ<&[.U[nx%B_}6r|4Y$9FB'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '-kM3WxCnggKeJgNY/y4EBb{&V.aNgC#ImQTeYjmX(. _b~sv<5gq=B`+U6D`6)-U'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '@bekD>^4z=2L1wF|f)?CeZY<g;:Kd0$g-Bl3/RrWAj~Q*i*x)wuBz1j<qK8dA46+'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'v=i[e]MTua{`Pm}q%mF/r]..PTGle<VyY7ec7>%A)W-<!R4JBjWDioS=T{I:#pMG'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '7Q] u94]j<zmbD5Jxz.k&[xQ9ap-j7eDiI[m=snng_h)#>9zz$k[o.?5Hy[|Pft!'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
