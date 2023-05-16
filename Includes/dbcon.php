<?php
$con = mysqli_init();
mysqli_ssl_set($con, NULL, NULL, "Includes\DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "attendace-db.mysql.database.azure.com", "JohnRenzo", "^9e71k2eGk1M%T4m", "attendace-db", 3306, MYSQLI_CLIENT_SSL);
?>