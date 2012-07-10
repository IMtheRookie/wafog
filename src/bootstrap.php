<?php
error_reporting(E_ALL);
require_once __DIR__.'/../vendor/autoload.php';

use Silex\Provider\TwigServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Repository\DumbRepository;

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/templates',
/*    'twig.options' => array('cache' => __DIR__.'/../cache'), */
));

$app->register(new DoctrineServiceProvider);

$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'dbname'   => 'wafog_blog',
    'host'     => 'localhost',
    'user'     => 'root',
    'password' => '',
);

/* $app->before(function() use ($app) {
    $app['db.dumb'] = $app->share(function($app) {
        return new DumbRepository($app['db']); 
    });
    
    */
});

return $app;