<?php

function d($var)
{
    foreach (func_get_args() as $var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}

function dd($var)
{
    call_user_func_array('d', func_get_args());
    die;
}

use Zend\Mvc\Application;

chdir(dirname(__DIR__));

include __DIR__ . '/../vendor/autoload.php';
$appConfig = require __DIR__ . '/../config/application.config.php';
Application::init($appConfig)->run();

// require phpbenchmarks stats.php here when needed
