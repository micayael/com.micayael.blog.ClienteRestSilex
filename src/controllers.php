<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app->get('/ver-comentarios.html', function() use($app){
    
    $url = $app['rest.host'] . 'ver-comentarios.json';
    $comentarios = json_decode($app['rest']->url($url)->get());
    
    return $app['twig']->render('comentarios.html.twig', array(
        'comentarios' => $comentarios
    ));
    
});

return $app;