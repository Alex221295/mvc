<?php

namespace App\Model;

use App\Model;

class Product extends Model implements HasPrice
{
    public const TABLE = 'products';
    public $title;
    public $price;

    public function getPrice(): int
    {
        return $this->price;
    }
}