<?php

namespace App\Services;

class Page
{
    public static function part($namPage){
        require_once 'views/components/' . $namPage . '.php';
    }

}