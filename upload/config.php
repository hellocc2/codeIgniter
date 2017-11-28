<?php
// HTTP
define('HTTP_SERVER', 'http://v2.cart.com/');

// HTTPS
define('HTTPS_SERVER', 'http://v2.cart.com/');

// DIR
define('DIR_APPLICATION', '/data/cart/upload/catalog/');
define('DIR_SYSTEM', '/data/cart/upload/system/');
define('DIR_IMAGE', '/data/cart/upload/image/');
define('DIR_STORAGE', '/data/cart/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '192.168.68.129');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456');
define('DB_DATABASE', 'hishop');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');