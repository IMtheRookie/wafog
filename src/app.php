<?php

$app = require __DIR__.'/bootstrap.php';

$app->get('/', function() use ($app){
	
	Response("everything ok");

<!--    
    $app['db.wafog_blog']->insert(array('a' => rand(), 'b' => rand()));
    $data = $app['db.wafog_blog']->findAll();
    
    return $app['twig']->render('index.html.twig', array('data' => $data));
    

});

return $app;
    -->