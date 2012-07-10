<?php

$app = require __DIR__.'/bootstrap.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app->get('/', function() use ($app) {
    $data = array(
		array("a" => "coucou",
		      "b" => "david"),
		array("a" => "bye",
		      "b" => "julien")

			);
    return $app['twig']->render('index.html.twig');
});
    
return $app;
