<?php 
function connectToMyDatabase() {

    $data = new PDO('mysql:host=mysql2.webland.ch;dbname=d041e_alstranc', 'd041e_alstranc', 'BLJ_db_2024', [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);

    return $data;
}