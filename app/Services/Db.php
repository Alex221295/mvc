<?php

namespace App\Services;

use App\Model\Arcticle;
use PDO;

class Db
{
    protected $dbh;
    protected static $instance = null;

    public static function instance()
    {
        if (self::$instance === null) {
            return self::$instance = new self();
        } else {
            return self::$instance;

        }
    }

    protected function __construct()
    {
        $config = (include 'config.php')['db'];
        $this->dbh = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';',
            $config['username'],
            $config['password']

        );

    }

    public function query($sql, $class,$id = null)
    {
//        de($sql);
        $sth = $this->dbh->prepare($sql);
        $sth->execute([':id'=>$id]);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);

    }

    public function execute($sql, $data): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }


}