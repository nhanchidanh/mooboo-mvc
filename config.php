<?php
define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);

define('CONTROLLER_PATH', ROOT_PATH . 'controllers' . DIRECTORY_SEPARATOR);

define('MODEL_PATH', ROOT_PATH . 'models' . DIRECTORY_SEPARATOR);

define('VIEW_PATH', ROOT_PATH . 'views' . DIRECTORY_SEPARATOR);

define('VIEW_PAGES_PATH', VIEW_PATH . 'pages' . DIRECTORY_SEPARATOR);

define('CORE_PATH', ROOT_PATH . 'core' . DIRECTORY_SEPARATOR);

define("PUBLIC_PATH", $_SERVER['REQUEST_SCHEME'] . ":" . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . $_SERVER['SERVER_NAME'] . '/mooboo-mvc/public');

$modules = [ROOT_PATH, CONTROLLER_PATH, MODEL_PATH, VIEW_PATH, CORE_PATH, VIEW_PAGES_PATH, PUBLIC_PATH];

set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));

spl_autoload_register('spl_autoload');
// asddasd
?>