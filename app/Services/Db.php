<?php

namespace App\Services;

use App\Model\Arcticle;
use PDO;

class Db
{
//    public static $servername = "localhost";
//    public static $database = "MVC";
//    public static $username = "alex";
//    public static $password = "";
//
//    public static function connection()
//    {
//        $conn = mysqli_connect(self::$servername, self::$username, self::$password, self::$database);
//// Проверяем соединение
//        if (!$conn) {
//            die("Connection failed: " . mysqli_connect_error());
//        }
//        echo "Connected successfully";
//        mysqli_close($conn);
//

    protected $dbh;

    public function __construct()
    {
        $config = (include 'config.php')['db'];
        $this->dbh = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';',
            $config['username'],
            $config['password']

        );

    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->query($sql);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_CLASS,$class);

    }


}