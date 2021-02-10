<?php
    error_reporting(E_ALL ^ E_NOTICE);
    date_default_timezone_set('Europe/Lisbon');
    setlocale(LC_TIME, 'pt_PT', 'pt_PT.utf-8', 'portuguese');

    // Constantes Gerais
    define('DAILY_TIME', 60 * 60 * 8);
    // Pastas
    define('MODEL_PATH', realpath(dirname(__FILE__).'/../models')); // constante que vai ser o caminho da pasta modelo
    define('VIEW_PATH', realpath(dirname(__FILE__).'/../views')); // constante que vai ser o caminho da pasta views
    define('CONTROLLER_PATH', realpath(dirname(__FILE__).'/../controllers')); // constante que vai ser o caminho da pasta controllers
    define('EXCEPTION_PATH', realpath(dirname(__FILE__).'/../exceptions')); // constante que vai ser o caminho da pasta exception
    define('TEMPLATE_PATH', realpath(dirname(__FILE__).'/../views/template')); // constante que vai ser o caminho da pasta template

    require_once(realpath(dirname(__FILE__) . '/database.php')); // assim no index.php carregamos o config.php e nao o database.php
    require_once(realpath(dirname(__FILE__) . '/loader.php')); // carregar o loader
    require_once(realpath(dirname(__FILE__) . '/session.php')); // verificar a sessão
    require_once(realpath(dirname(__FILE__) . '/dataUtils.php')); // funcoes para datas
    require_once(realpath(dirname(__FILE__) . '/utils.php')); // funcoes para datas
    require_once(realpath(MODEL_PATH . '/Model.php'));
    require_once(realpath(MODEL_PATH . '/User.php'));                                                                                                   
    require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
    require_once(realpath(EXCEPTION_PATH . '/validateException.php'));
?>