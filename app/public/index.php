<?php

require '../bootstrap.php';
$app = new \Slim\Slim();
$app->config(array(
    'templates.path' => '../templates'
));

$app->get('/', function () use($app) {
    $app->render('home.php');
});

$app->run();