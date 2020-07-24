<?php
$server = 'localhost';
$username = 'uipldocuser';
$password = 'UIPL#Pass';
$database = 'uipldocs';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
