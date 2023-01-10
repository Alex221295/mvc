<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Model\Arcticle;
use App\Model\User;
use App\Model\Product;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$product = new Product();
//$product->id ='2';
//$product->title = 'qqq';
//$product->price = '33';
//$product->insert();
//$product->update(25,['11','11']);
$id = Product::findOne(11);
$product->save();

exit();
//de(Product::findAll());
//$product->price = 2000;
//$product->title = 'SAMSUNG';
//de($product);
require_once __DIR__ . '/router/routers.php';
function de($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
}




