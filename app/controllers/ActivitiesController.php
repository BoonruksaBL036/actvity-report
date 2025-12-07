<?php
require_once __DIR__ . '/../models/Activity.php';
require_once __DIR__ . '/../models/Student.php';

class ActivitiesController {

    public function index() {
        $activity = new Activity();
        $activities = $activity->all();
        require_once __DIR__ . '/../views/activities/index.php';
    }

    public function create() {
        $student = new Student();
        $students = $student->all();
        require_once __DIR__ . '/../views/activities/create.php';
    }

    public function store() {
        $activity = new Activity();
        $activity->create($_POST);
        header("Location: index.php?controller=activities&action=index");
    }

    public function edit() {
        $activity = new Activity();
        $student = new Student();
        $students = $student->all();
        $data = $activity->find($_GET['id']);
        require_once __DIR__ . '/../views/activities/edit.php';
    }

    public function update() {
        $activity = new Activity();
        $activity->update($_POST['id'], $_POST);
        header("Location: index.php?controller=activities&action=index");
    }

    public function delete() {
        $activity = new Activity();
        $activity->delete($_GET['id']);
        header("Location: index.php?controller=activities&action=index");
    }
}
