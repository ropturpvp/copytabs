<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
include_once("../database.php");
$status["status"]="";
$data=1;
$select=$DB->prepare("SELECT pagesText FROM pages WHERE (:id)");
$select->bindParam(':id', $data);
$select->execute();
$select=$select->fetch(PDO::FETCH_ASSOC);
$result=json_encode($select);
{
    print($result);
}
?>
