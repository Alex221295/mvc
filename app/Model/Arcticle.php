<?php

namespace App\Model;

use App\Services\Db;

class Arcticle
{
    public const TABLE = 'news';
    public $id;
    public $title;
    public $content;

    /**
     * @return mixed
     */
    public static function findAll()
    {
        $db = new Db();
        return ($db->query(
            'SELECT * FROM ' . self::TABLE,
            [],
            self::class));
    }
}