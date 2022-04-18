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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ddp9UU+U8e+KH+liiSXW3axrMgaELOMny0tJcw2BlYFvt5DPdC38u8Hl+K7aKHWjXx8ab1YmckTG2q3UD6H+NA==');
define('SECURE_AUTH_KEY',  'If5PFh5UVqIJo2HGkcDIHTIM4m8AYjac7uDmqYrhvbOcFNLn/L+a8zVc8CalHMYD1pa+haVr0FGn3gFOT+Nbzw==');
define('LOGGED_IN_KEY',    'ioD+ZLFg2XIIbhMtQqJAwKQ6dF+pxHc6JgtitG2s3F7NNslsHP1wlly/CFUWyQJfuHpw6UJ5hk1UdUmTWMHuUA==');
define('NONCE_KEY',        '/mw01N2kxwWzQon0YQX5KNmNZTT2xrtxPf1dcjsEU6VrzDS3UCoumVp55V2GQRxRSmVhWqIN4dTshdk7k8XcoQ==');
define('AUTH_SALT',        'fwurm/hZMPI/OCvMqn98qpr1i3C+C5m3mTyVRQv/8qRsdO5RebSy4M4beaWoLNe/VuHnPuIBGgVKdJY/b7gBGw==');
define('SECURE_AUTH_SALT', 'SMP0oIS0OhkMGAavZ8qS29k9sbSfkKJ2DcUi60T0OP5LosrB0SxfINmDBQE7ypAtGJ4IEVlBYCh5ElTZtD9/gg==');
define('LOGGED_IN_SALT',   '7DRusFnHjqMmzQXUstdasos8/S53VAC5SckL5xMZzlfsbAj1CG8QgEjuCOSDAeOXoWsRNwFF7Vzxc5FKa+FshA==');
define('NONCE_SALT',       'sd7xbshs2rdjl6vLaEd0UtpLXqd7ES+cMpKedexZTSrdMUrrcBBVRaqaEaLsD2iM1SXecbqp/hKcb90zvJUfdQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
