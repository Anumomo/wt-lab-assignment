<?php 
require_once "helpers.php";

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "student-mgnt";

$conn = new mysqli($serverName, $userName, $password, $databaseName);

if($conn->connect_error) {
	die("Connection failed!");
}