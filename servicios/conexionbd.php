<?php /** @noinspection PhpUndefinedClassConstantInspection */

namespace servicios;

use \PDO;

class conexionbd
{
    private const DNS_DB = "mysql:host=127.0.0.1;port=3306;dbname=starservices";
    private const USER = "david";
    private const PASS = "12345";

    private static $conn;

    private function __construct()
    {
    }

    public static function getConn() : PDO{
        if(self::$conn == null){
            self::$conn = new PDO(self::DNS_DB, self::USER, self::PASS);
        }
        return self::$conn;
    }

    public static function close(){
        self::$conn = null;
    }
}