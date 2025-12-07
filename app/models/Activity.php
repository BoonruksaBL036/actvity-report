<?php
require_once __DIR__ . '/../core/database.php';

class Activity {

    public function all() {
        $db = Database::connect();
        return $db->query("
            SELECT activities.*, students.student_name
            FROM activities
            JOIN students ON activities.student_id = students.student_id
            ORDER BY activities.id DESC
        ");
    }

    public function find($id) {
        $db = Database::connect();
        return $db->query("SELECT * FROM activities WHERE id = $id")->fetch_assoc();
    }

    public function create($data) {
        $db = Database::connect();
        $sql = "
            INSERT INTO activities (student_id, activity_name, activity_date, hours)
            VALUES ('{$data['student_id']}', '{$data['activity_name']}', '{$data['activity_date']}', {$data['hours']})
        ";
        return $db->query($sql);
    }

    public function update($id, $data) {
        $db = Database::connect();
        $sql = "
            UPDATE activities SET
                activity_name = '{$data['activity_name']}',
                activity_date = '{$data['activity_date']}',
                hours = {$data['hours']}
            WHERE id = $id
        ";
        return $db->query($sql);
    }

    public function delete($id) {
        $db = Database::connect();
        return $db->query("DELETE FROM activities WHERE id = $id");
    }
}
