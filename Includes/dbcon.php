<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "/Includes/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "attendace-management-server.mysql.database.azure.com", "htnovwfcwn", "3N1D31W2H43AQ7WY$", "attendace-management-database", 3306, MYSQLI_CLIENT_SSL);
?>