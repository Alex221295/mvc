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


    public function insert($propeties)
    {
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
        $title = [];
        $ids[":id"] = $id;

        foreach ($product[0] as $key => $value) {
            $title[] = $key;
        }
        $productInfo = array_combine($title, $data);
        unset($productInfo['id']);
        $sql = 'UPDATE ' . static::TABLE . ' SET ';
        foreach ($productInfo as $name => $value) {
            $sql .= $name . ' = \'' . $value . '\' , ';
        }
        $sql = substr($sql, 0, -2);
        $sql .= 'WHERE id = :id';
        $db = Db::instance();
        $db->execute($sql, $ids);
    }

    public function delete($id)
    {
        $ids[":id"] = $id;
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';

//        de($sql);
        $db = Db::instance();
        $db->execute($sql,$ids);
    }

    public function load($fileData = []){
        foreach ($fileData as $properties=>$value){
            $this->$properties = $value;
        }
    }

    public function save()
    {
        $getValue = get_object_vars($this);
        if (isset($this->id)){
            $this->update($this->id,$getValue);
        }else{
            $this->insert($getValue);
        }


    }
}