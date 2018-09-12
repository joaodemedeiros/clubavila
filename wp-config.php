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
define('DB_NAME', 'clubavila2018');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '6x?%Z/@hI=ona2v-Q{Nn5NBfahzgJ5vT3R]Z V:Fg=tI5DU2Y7BJye {w[x3q^A}');
define('SECURE_AUTH_KEY', 'q9C`bc2>98_q,#NR G4Wjvxsw:%8d2YiAj(;exKC<#7K8/2|Nj`^S%lkdS]T@eAd');
define('LOGGED_IN_KEY', 'JY);!G0?h-6WV$Rzg-ETa.O@Tcmhx|%n;!g LB>A2/@MFq{%ur#Xh6j]aDr$+Mb&');
define('NONCE_KEY', 'U*RRe>I&~Ifis!AwxAZD#b~V_i1%-88<-@[;gV) 9/Uc]eLa2#(_&8SvjO}Muam*');
define('AUTH_SALT', 'eK0or4-L]IhkGU#{9Dg=_@u3YjVi?uW)MbKvAxL hojf.la&^OXWy+gK{n>YB2m&');
define('SECURE_AUTH_SALT', '! 1zL>~J/RcXENI5G`=8;yUpwJm4/8UbIA!eizO%Z}f7Q>n+qr?4KW+E<?ph_IIU');
define('LOGGED_IN_SALT', '7)tMC*g[>Fzjc(]q]t,R)i&rf+3i@8|a!<Rr|+rT:1Ml$ }0@r!gb}7%?+E5ykv0');
define('NONCE_SALT', 'l?*xuDm@=#RvwqpLTBIn$=zacmYbs+^2%vPsG@oNVXP<RpOa7; yhKr+eZOxE^>!');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

