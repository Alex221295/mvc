<?php

namespace App;

class Config
{
    public $data;

    public function __construct()
    {
        $this->data = [
            'db' => [
                'host' => 'localhost',
                'dbname' => 'MVC',
                'username' => 'alex',
                'password' => ''

            ]
        ];
    }

}