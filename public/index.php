<?php
    require_once(dirname(__FILE__, 2). '/src/config/config.php');
    
    /**
    * Linha 14
    * 
    * @param function|notnull urldecode() Descodifica a URL.
    * @param function|notnull parse_url() Analisa a URL e retorna os seus componentes.
    * @param array|notnull $_SERVER['REQUEST_URI'] Informa-nos sobre o caminho da nossa página em relação ao index.
    * @param const|notnull PHP_URL_PATH Dá nos o path.
    *
    * 
    */
    $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if($uri === '/' || $uri === '' || $uri === '/index.php') {
        $uri = "dayRecords.php";
    }

    require_once(CONTROLLER_PATH . "/{$uri}");

    
?>
