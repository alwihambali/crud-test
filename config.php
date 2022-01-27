<?php
$username = 'root';
$password = 'asdfghjkl';
$dbName = 'test';
$connectionName = getenv("bss-sandbox-env-1:asia-southeast2:bss-dev-mysql-server");
$socketDir = getenv('DB_SOCKET_DIR') ?: '/cloudsql';

// Connect using UNIX sockets
$dsn = sprintf(
    'mysql:dbname=%s;unix_socket=%s/%s',
    $dbName,
    $socketDir,
    $connectionName
);

// Connect to the database.
$conn = new PDO($dsn, $username, $password, $conn_config);
?>
