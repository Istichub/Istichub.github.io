<?php
/* Connect to a MySQL database */
$dsn = 'mysql:dbname=chat;host=localhost';
$user = 'root';
$password = '';


try
{
$connect = new PDO( $dsn, $user, $password);
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>