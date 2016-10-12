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
define('AUTH_KEY', 'E;S7=jXwGM+g1M%s#y``MdNVSdL%m*9MG:.vvJ(MKP)$ip.MaAv+F,,nm[@2QFYb');
define('SECURE_AUTH_KEY', 'f2B?)X;RH]p7jtk7$GJCTTR!(nj#Qg@Z:-Pjn|D*;iibd<=9]8Zcz`Ziz>GT5F0X');
define('LOGGED_IN_KEY', 'dMHJxOT.JGQA(<a?tx<E_Nzo2?+]U`*;~kL=]F<GHr?q5vtgZ?}vW7wm_FkdYM}^');
define('NONCE_KEY', 'G6(,/V5&_:J+|S/^T 8q``mDOg|qdJX{Z[+H_J<C[4@*B-&]p.7m=cx1F`qrbg<_');
define('AUTH_SALT', 'L4pb?)5u!N[v;mSl1 5OX|~T)Th7EzrKC!%Do9%d]F<g@[P)gFhRGS:eadZ7<}*5');
define('SECURE_AUTH_SALT', 'Ye0Lp*n295pDAx3B2JKZV$9f0&yp,AOsRFtye5wK1h/;~?<@.X0@PHvps8Pi6)!r');
define('LOGGED_IN_SALT', 'uF.A| S=m[:Py`c-j@D3H~qlU6w6c{~=$*JDDQ=t;:X`8#kN}$Q(%|+RDf/vfQ?N');
define('NONCE_SALT', 'p;:F{EAD>code&LDo}1)}Z1uXe517[oxp0S8ge & c0{OJDN(hB,@jkN^~X[h<r>');

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

