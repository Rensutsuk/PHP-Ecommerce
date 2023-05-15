<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:project-omegasql.database.windows.net,1433; Database = project-omegaDB", "Rensutsuki", "Gja1Chl9yptC1RB^");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Rensutsuki", "pwd" => "Gja1Chl9yptC1RB^", "Database" => "project-omegaDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:project-omegasql.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>