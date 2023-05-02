<?php
session_start();

$users = [
    ['login' => 'Kseniya', 'password' => password_hash(256,PASSWORD_DEFAULT)], 
    ['login' => 'Maria', 'password' => password_hash(543,PASSWORD_DEFAULT)], 
    ['login' => 'Katerina', 'password' => password_hash(876,PASSWORD_DEFAULT)], 
];

?>
