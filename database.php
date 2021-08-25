<?php
$host=getenv('DB_HOST');
$dbName=getenv('DB_NAME');
$user=getenv('DB_USER');
$password=getenv('DB_PASS');
$DB = new PDO('mysql:host='.$host.';dbname='.$dbName.'', $user, $password);
?>
