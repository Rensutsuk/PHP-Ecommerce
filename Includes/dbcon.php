<?php
$serverName = "escholarams.mysql.database.azure.com";
$databaseName = "attendance-management-db";
$username = "Rensutsuki";
$password = "%4iJQg4@KKe8pVG&$";

$conn = new mysqli($serverName, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>