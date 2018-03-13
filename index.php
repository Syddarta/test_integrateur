<?php
require 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
$twig = new Twig_Environment($loader, [
    'cache' => false //__DIR__ . '/tmp'
]);

echo $twig->render('index.twig');