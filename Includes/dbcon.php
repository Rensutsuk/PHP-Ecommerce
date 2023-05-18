<?php
$serverName = "attendace-management-server.mysql.database.azure.com";
$databaseName = "attendance-management-database";
$username = "htnovwfcwn";
$password = "3N1D31W2H43AQ7WY$";

$conn = new mysqli($serverName, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>