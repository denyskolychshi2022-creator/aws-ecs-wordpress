<?php
/** Конфігурація WordPress */

define('DB_NAME', 'wordpress');
define('DB_USER', 'admin');
define('DB_PASSWORD', 'WordPress2026!');
define('DB_HOST', 'wordpress-db.co504gimotnm.us-east-1.rds.amazonaws.com');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/** Виправлення редіректів та увімкнення HTTPS */
define('WP_HOME', 'https://kolych.online');
define('WP_SITEURL', 'https://kolych.online');

/** Навчаємо WordPress розуміти SSL-termination на балансувальнику ALB */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

$table_prefix = 'wp_';

define('WP_DEBUG', false);

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
