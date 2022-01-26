<?php
// $username = 'root';
// $password = 'root';
// $dbName = 'test';
// $connectionName = getenv("bss-sandbox-env-1:asia-southeast2:bss-dev-mysql-server");
// $socketDir = getenv('/var/lib/mysql/mysql.sock') ?: '/cloudsql';

// // Connect using UNIX sockets
// $dsn = sprintf(
//     'mysql:dbname=%s;unix_socket=%s/%s',
//     $dbName,
//     $socketDir,
//     $connectionName
// );

// // Connect to the database.
// $conn = new PDO($dsn, $username, $password, $conn_config);

$databaseHost = '34.101.142.207';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = 'root';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>
