<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Model\Arcticle;
use App\Model\User;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

de(User::findAll());
require_once __DIR__ . '/router/routers.php';
function de($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
}


