<?php
include "db.php";
$id = $_GET['id'];
$newConnection = new Database("localhost", "root", "", "newss");
$a = $newConnection->delete('xeberr', $id);
header('Location:admin.php');

?>