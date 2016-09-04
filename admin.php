<?php
session_start();
if ($_SESSION['giris'] == true) {
	$_SESSION['hazir'] = true;
	?>



<?php

	include "db.php";

	$newConnection = new Database("localhost", "root", "", "newss");
	$a = $newConnection->select('xeberr');
	?>
<!DOCTYPE html>
<html>
<head>
<style>
.img img{
	width: 200px;
	height: 200px;
}
.button1{
	background: #217647;

}
.button1 a{
	color:white;
	text-decoration: none;
}
.button2{
	background: #D34826;

}
.button2 a{
	color:white;
	text-decoration: none;
}
.button3{
	background: #217647;
	float: left;
	padding: 10px;
	margin: 10px;
}
.button3 a{
	color:white;
	text-decoration: none;
}
.button4{
	background: red;
	float: right;
	padding: 10px;
	margin: 10px;
}
.button4 a{
	color:white;
	text-decoration: none;
}
</style>
	<title></title>
</head>
<body>

<button class="button3"><a href="insert.php">elave et</a></button>
<button class="button4"><a href="logout.php">Cixis et</a></button>
		<table border="1">
			<thead>
				<tr>
					<th>id</th>
					<th>title</th>
					<th>text</th>
					<th>create.date</th>
					<th>photo</th>
				</tr>
			</thead>
			<tbody>
			<?php while ($row = mysqli_fetch_assoc($a)): ?>

			<tr>
				<td><?=$row['id']?></td>
				<td><?=$row['title']?></td>
				<td><?=$row['text']?></td>
				<td><?=$row['create.date']?></td>
				<td class="img"><img src="uploads/<?=$row['img']?>"/>
				</td>

				<td><button class="button1"><a href="edit.php?id=<?=$row['id']?>">edit</a></button></td>
				<td> <button class="button2"><a href="delete.php?id=<?=$row['id']?>">delete</a></button></td>
			</tr>
			<?php endwhile;?>
			</tbody>
		</table>





<?php
} else {
	header('Location:index.php');
}
?>
</body>
</html>


