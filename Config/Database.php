<?php

namespace Config {

    class Database {
        static function getConnection(): \PDO {
            $host = "localhost";
            $port = 3306;
            $database = "dbphpbasic";
            $username = "root";
            $password = "";

            return new \PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        }
    }
}
