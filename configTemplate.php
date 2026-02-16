<?php
// to use the website , fill in your database credentials and rename file config.php

define('DB_HOST', 'your_host_here');
define('DB_USER', 'your_username_here');
define('DB_PASS', 'your_password_here');
define('DB_NAME', 'your_database_here');

function getDbConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        return null;
    }
    return $conn;
}
?>
