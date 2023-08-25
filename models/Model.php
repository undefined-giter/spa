<?php
// Abstract Class cant be instantiated directly
abstract class Model
{
    // static to be gettable by all Class extended by this Model Class
    private static $pdo;

    private static function setDb(){
        // UTF8mb4 can use 4 octets max by character than 3 for UTF8, result : it can supports more symbols and emoticons than UTF8.
        self::$pdo = new PDO("mysql:host=leoriptspa.mysql.db;dbname=leoriptspa;charset=utf8mb4","leoriptspa", "t");
        // self::$pdo = new PDO("mysql:host=localhost:3306;dbname=leoriper_spa;charset=utf8mb4","leoriper_user", "t");
        // self::$pdo = new PDO("mysql:host=localhost;dbname=spa;charset=utf8mb4","root", "t");
        // setAttribute is a build-in function, ERRMODE is here to report errors                            // spa root
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getDb(){
        if(self::$pdo === null){
            self::setDb();
        }
        // Var 'pdo' is defined and affected, the var get returned to be usable for child/extended Class
        return self::$pdo;
    }
}
