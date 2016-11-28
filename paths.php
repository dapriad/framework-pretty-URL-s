<?php
    //SITE_ROOT
    $path = $_SERVER['DOCUMENT_ROOT'].'/Gamebets/';
    define('SITE_ROOT', $path);

    //SITE_PATH
    define('SITE_PATH', 'http://'.$_SERVER['HTTP_HOST'].'/Gamebets/');

    //CSS
    define('CSS_PATH', SITE_PATH.'view/css/');

    //JS
    define('JS_PATH', SITE_PATH.'view/js/');

    //IMAGES
    define('IMAGES_PATH', SITE_PATH.'view/images/');

    //log
    define('LOG_DIR', SITE_ROOT.'classes/Log.class.singleton.php');
    define('USER_LOG_DIR', SITE_ROOT.'log/user/Site_User_errors.log');
    define('GENERAL_LOG_DIR', SITE_ROOT.'log/general/Site_General_errors.log');

    //production
    define('PRODUCTION', true);

    //amigables
    define('URL_AMIGABLES', true);

    //model
    define('MODEL_PATH', SITE_ROOT.'model/');

    //view
    define('VIEW_PATH_INC', SITE_ROOT.'view/inc/');
    define('VIEW_PATH_INC_ERROR', SITE_ROOT.'view/inc/templates_error/');

		//modules
    define('MODULES_PATH', SITE_ROOT.'modules/');

    //resources
    define('RESOURCES', SITE_ROOT.'resources/');

		//media
    define('MEDIA_PATH', SITE_ROOT.'media/');

		//utils
    define('UTILS', SITE_ROOT.'utils/');

    //model users
    define('FUNCTIONS_PRODUCTS', SITE_ROOT.'modules/products/utils/');
    define('MODEL_PATH_PRODUCTS', SITE_ROOT.'modules/products/model/');
    define('DAO_PRODUCTS', SITE_ROOT.'modules/products/model/DAO/');
    define('BLL_PRODUCTS', SITE_ROOT.'modules/products/model/BLL/');
    define('MODEL_PRODUCTS', SITE_ROOT.'modules/products/model/model/');
    define('PRODUCTS_JS_PATH', SITE_PATH.'modules/products/view/js/');
    define('PRODUCTS_CSS_PATH', SITE_PATH.'modules/products/view/css/');

    // //model products
    // define('UTILS_PRODUCTS',SITE_ROOT.'modules/products/utils/');
    // define('PRODUCTS_JS_LIB_PATH', SITE_PATH . 'modules/products/view/lib/');
    // define('PRODUCTS_JS_PATH', SITE_PATH . 'modules/products/view/js/');
    // define('PRODUCTS_CSS_PATH', SITE_PATH . 'modules/products/view/css/');
