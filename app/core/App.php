<?php
class App {
    public $config;

    public function __construct(){
        $this->config = require __DIR__ . './../config/config.php';
    }
}
?>