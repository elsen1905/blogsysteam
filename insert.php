<?php

include "db.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<input type="text" name="ad">
	<input type="text" name="soyad">
	<input type="file" name="Photo">
	<input type="submit" name="submit">

</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$ad = $_POST['ad'];
	$soyad = $_POST['soyad'];
	$target_dir = "uploads/";
	$target_file = date('dmYGis') . basename($_FILES["Photo"]["name"]);
	move_uploaded_file($_FILES["Photo"]["tmp_name"], "uploads/" . $target_file);
	$newConnection = new Database("localhost", "root", "", "newss");

	$a = $newConnection->insert('xeberr', $ad, $soyad, $target_file);
	var_dump($a);

	if ($a) {
		header('Location:admin.php');
	}

}

?>