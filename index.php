<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
use App\Services\Db;

require_once __DIR__ . '/vendor/autoload.php';
Db::connection();
require_once __DIR__ . '/router/routers.php';

function de($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
}


