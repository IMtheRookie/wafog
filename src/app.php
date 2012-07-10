<?php

$app = require __DIR__.'/bootstrap.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app->get('/', function() use ($app) {
    $data = array(
		array("a" => "david",
		      "b" => rand()),
		array("a" => "julien",
		      "b" => rand())

			);
    return $app['twig']->render('index.html.twig', array('data' => $data));
});

return $app;


