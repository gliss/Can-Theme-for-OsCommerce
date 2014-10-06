<?php
  define('HTTP_SERVER', 'http://127.0.0.1');
  define('HTTP_CATALOG_SERVER', 'http://127.0.0.1');
  define('HTTPS_CATALOG_SERVER', 'http://127.0.0.1');
  define('ENABLE_SSL_CATALOG', 'false');
  define('DIR_FS_DOCUMENT_ROOT', 'C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/projects/osc_can/Can-Theme-for-OsCommerce/');
  define('DIR_WS_ADMIN', '/projects/osc_can/directadminpanel/');
  define('DIR_FS_ADMIN', 'C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/projects/osc_can/Can-Theme-for-OsCommerce/adminpanel/');
  define('DIR_WS_CATALOG', '/projects/osc_can/Can-Theme-for-OsCommerce/');
  define('DIR_WS_HTTPS_CATALOG', '/projects/osc_can/Can-Theme-for-OsCommerce/');
  define('DIR_FS_CATALOG', 'C:/Program Files (x86)/EasyPHP-DevServer-14.1VC11/data/localweb/projects/osc_can/Can-Theme-for-OsCommerce/');
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_CATALOG_IMAGES', DIR_WS_CATALOG . 'images/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_MANUFACTURERS', 'manufacturers/');
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');
  define('DIR_WS_CATALOG_LANGUAGES', DIR_WS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_LANGUAGES', DIR_FS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
  define('DIR_FS_CATALOG_MANUFACTURERS', DIR_FS_CATALOG_IMAGES . 'manufacturers/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', '');
  define('DB_DATABASE', 'adv_direct');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
  define('CFG_TIME_ZONE', 'Pacific/Auckland');
  
  define('DIR_FS_CACHE', DIR_FS_CATALOG . DIR_WS_INCLUDES . 'cache/');
?>