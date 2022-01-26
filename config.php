<?php
// $username = 'your_db_user';
// $password = 'yoursupersecretpassword';
// $dbName = 'your_db_name';
// $connectionName = getenv("INSTANCE_CONNECTION_NAME");
// $socketDir = getenv('DB_SOCKET_DIR') ?: '/cloudsql';

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
