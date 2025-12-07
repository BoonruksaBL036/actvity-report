<?php
$controller = $_GET['controller'] ?? 'activities';
$action     = $_GET['action'] ?? 'index';

require_once __DIR__ . '/app/controllers/' . ucfirst($controller) . 'Controller.php';

$className = ucfirst($controller) . 'Controller';
$obj = new $className;

$obj->$action();
