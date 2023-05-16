<?php
$host = "attendace-db.mysql.database.azure.com";
$user = "JohnRenzo";
$pass = "^9e71k2eGk1M%T4m";
$db = "attendace-db";

$conn = new mysqli($host, $user, $pass, $db);
mysqli_ssl_set($con, NULL, NULL, "Includes\DigiCertGlobalRootCA.crt.pem", NULL, NULL);
if ($conn->connect_error) {
    echo "Seems like you have not configured the database. Failed To Connect to database:" . $conn->connect_error;
}
?>