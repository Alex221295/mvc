<?php

namespace App\Services;
use App\Services\Db;
class SQL extends Db
{
    public static function select(){
        self::connection();
    }

}