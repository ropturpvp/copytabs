<?php
$host=DB_HOST;
$dbName=DB_NAME;
$user=DB_USER;
$password=DB_PASS;
$DB = new PDO('mysql:host='.$host.';dbname='.$dbName.'', $user, $password);
?>
