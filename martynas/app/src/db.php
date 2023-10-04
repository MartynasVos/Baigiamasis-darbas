<?php 
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "projektas");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo 'Klaida: ' . $mysqli->connect_error . '\n';
    exit();
}

