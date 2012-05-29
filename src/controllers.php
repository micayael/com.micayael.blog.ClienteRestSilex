<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app->get('/ver-comentarios.html', function() use($app){
    
    return $app['twig']->render('base.html.twig', array());
    
});

return $app;