<?php

namespace App;

use App\Services\Db;

class Model
{
    public const TABLE = '';
    public int $id;

    public static function findAll()
    {
        $db = Db::instance();
        return ($db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class, null));
    }

    public static function findOne($id)
    {
        $db = Db::instance();
        return ($db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id=:id',
            static::class, $id));
    }


    public function insert()
    {
        $propeties = get_object_vars($this);
        de($propeties);
        $columns = [];
        $binds = [];
        $data = [];
        foreach ($propeties as $name => $value) {
            $columns[] = $name;
            $binds[] = ':' . $name;
            $data[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE .
            ' (' . implode(',', $columns) .
            ') VALUES (' . implode(',', $binds) . ')';
        $db = Db::instance();
        $db->execute($sql, $data);
        $this->id = $db->lastId();
    }

    public function update($id, array $data)
    {
        $product = static::findOne($id);
//        unset($product[0]->id);
        $title = [];
        $ids[":id"] = $id;

        foreach ($product[0] as $key => $value) {
            $title[] = $key;
        }
        $productInfo = array_combine($title, $data);
        $sql = 'UPDATE ' . static::TABLE . ' SET ';
        foreach ($productInfo as $name => $value) {
            $sql .= $name . ' = \'' . $value . '\' , ';
        }
        $sql = substr($sql, 0, -2);
        $sql .= 'WHERE id = :id';
        $db = Db::instance();
        $db->execute($sql, $ids);
    }

    public function save($id = null, $data = null)
    {
        $getValue = get_object_vars($this);
        $reflector = new \ReflectionObject($this);
//        $properties = $reflector->getProperties();
//        $getTitle = $getValue->title;

        de($getValue);

    }
}