<?php
include "db.php";
$id = $_GET['id'];
$newConnection = new Database("localhost", "root", "", "newss");
$a = $newConnection->select('xeberr', "*", "id=$id");
$row = mysqli_fetch_assoc($a);

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="update.php" method="post" enctype="multipart/form-data">
 	<input type="hidden" name="id" value="<?=$row['id']?>">
 	<input type="text" name="ad" value="<?=$row['title']?>">
 	<input type="file" name="Photo" value="<?=$row['img']?>">
 	<input type="text" name="soyad" value="<?=$row['text']?>">

 	<input type="submit" name="submit">
 </form>
 </body>
 </html>