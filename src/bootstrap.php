<?php

require_once __DIR__.'/../vendor/autoload.php';

//-- Crea una nueva aplicación silex
$app = new Silex\Application();

//-- Configuramos el motor de plantillas TWIG
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => BASE_DIR.'/views',
));