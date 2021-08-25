<?php
include_once("../db2.php");
$status["status"]="";
if(isset($_POST["data"]))
{
    $id=1;
    $select=$DB->prepare("UPDATE pages SET pagesText=:pagesText WHERE id=:id");
    $select->bindParam(':id', $id);
    $select->bindParam(':pagesText', $_POST["data"]);
    $select->execute();
    $status["status"]="ok";
}
else
{
    $status["status"]="error";
    echo json_encode($status);
};
?>
