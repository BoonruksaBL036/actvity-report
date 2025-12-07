<?php
class Database {
    public static function connect() {
        $config = require __DIR__ . '/../config/config.php';
        $mysqli = new mysqli(
            $config['db_host'],
            $config['db_user'],
            $config['db_pass'],
            $config['db_name']
        );
        if ($mysqli->connect_errno) {
            die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        $mysqli->set_charset("utf8mb4");
        return $mysqli;
    }
}
