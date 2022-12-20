<?php
use App\Model\Arcticle;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';
de(Arcticle::findAll());
require_once __DIR__ . '/router/routers.php';
function de($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
}


