<?php
session_start();
require('connect.php');
$messages = $_POST['messages'];
$query = $connect->query("
INSERT INTO messages(id_member,message_member)VALUES('{$_SESSION['id_member']}','{$messages}')");
?>