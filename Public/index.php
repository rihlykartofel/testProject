<?php

define('BASE_DIR', dirname(__DIR__));
define('APP_DIR', BASE_DIR . '/App');

require BASE_DIR . '/vendor/autoload.php';

// Настройка и запуск Router
require BASE_DIR . '/Config/router.php';

?>