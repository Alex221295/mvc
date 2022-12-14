<?php

namespace App\Services;

class Db
{
    public static $servername = "localhost";
    public static $database = "MVC";
    public static $username = "alex";
    public static $password = "";

    public static function connection()
    {
        $conn = mysqli_connect(self::$servername, self::$username, self::$password, self::$database);
// Проверяем соединение
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        mysqli_close($conn);

    }

}