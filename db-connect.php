<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$database   ='dummy_db';

$conn = new mysqli($host, $username, $password, $database);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}