<?php
$controller = $_GET['controller'] ?? 'activities';
$action     = $_GET['action'] ?? 'index';

// โหลด controller โดยอ้าง path ที่ถูกต้อง
require_once __DIR__ . '/../app/controllers/' . ucfirst($controller) . 'Controller.php';

$className = ucfirst($controller) . 'Controller';
$obj = new $className;

$obj->$action();
