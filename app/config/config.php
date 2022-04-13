<?php
error_reporting ( E_ERROR );

/* Paths */
define ( 'HOST', 'https://www.yoursite.com' );
define ( 'BASE_PATH', '/git/phpeasier/' );
define ( 'SYSTEM_PATH', '../phpeasier-core/' ); // <= Add here the core path
define ( 'CONTROLLER_PATH', './app/controllers/' );
define ( 'APP_PATH', './app/' );
define ( 'VIEW_PATH', './app/views/' );
define ( 'MODEL_PATH', './app/models/' );
define ( 'TEMPLATE_PATH', './app/template/' );
define ( 'PUBLIC_IMG', HOST . BASE_PATH . 'public/img/' );

/* Page parameters */
define ( 'DEFAULT_TITLE', 'Welcome to PHP Easier Start Page!' );
define ( 'DEFAULT_KEYWORDS', '' );

/* Application */
define ( 'DEFAULT_CONTROLLER', 'IndexController' );
define ( 'ERROR_CONTROLLER', 'ErrorController' );
define ( 'SHOW_DESENV_ERRORS', true );

/* Charset */
define ( 'CHARSET', 'utf-8' );

/* Time zone */
define ( 'TIME_ZONE', 'America/Sao_Paulo' );

/* Router */
require SYSTEM_PATH . 'Router.php';

/* Load engine */
require SYSTEM_PATH . 'Engine.php';
