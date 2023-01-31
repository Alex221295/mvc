<?php
namespace App\Controllers;
use App\View;

class Product
{
    public function action()
    {
        $view = new View();

        $view->products = \App\Model\Product::findAll();
        $view->display(__DIR__ . '/Templates/index.php');
    }

}