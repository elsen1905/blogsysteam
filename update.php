<?php
include "db.php";
if (isset($_POST['submit'])) {
	$ad = $_POST['ad'];
	$soyad = $_POST['soyad'];
	$id = $_POST['id'];
	$target_dir = "uploads/";
	$target_file = date('dmYGis') . basename($_FILES["Photo"]["name"]);
	move_uploaded_file($_FILES["Photo"]["tmp_name"], "uploads/" . $target_file);
	$newConnection = new Database("localhost", "root", "", "newss");
	$a = $newConnection->update('xeberr', $ad, $soyad, $target_file, "id=$id");
	var_dump($target_file);
	if ($a) {
		header('Location:admin.php');

	}
}

?>