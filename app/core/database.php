<?php
class Database {
    public static function connect() {
        $mysqli = new mysqli("localhost", "root", "", "student_report_db");
        if ($mysqli->connect_errno) {
            die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
        return $mysqli;
    }
}
