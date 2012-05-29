<?php

use com\micayael\blog\ClienteRestSilex\src\Rest;

require_once __DIR__.'/../vendor/autoload.php';
require_once (BASE_DIR . '/src/Rest.php');

//-- Crea una nueva aplicación silex
$app = new Silex\Application();

//-- Configuramos el motor de plantillas TWIG
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => BASE_DIR.'/views',
));

//-- Creamos el servicio $app['rest']
$app['rest'] = $app->share(function() use($app){
    return new Rest($app['auth.string']);
});