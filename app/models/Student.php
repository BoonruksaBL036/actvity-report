<?php
require_once __DIR__ . '/../core/database.php';

class Student {
    public function all() {
        $db = Database::connect();
        return $db->query("SELECT * FROM students");
    }
}
