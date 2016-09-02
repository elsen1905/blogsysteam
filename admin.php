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
				<td><?=$row['img']?></td>

				<td><a href="edit.php?id=<?=$row['id']?>">edit</a></td>
				<td><a href="delete.php?id=<?=$row['id']?>">delete</a></td>
			</tr>
			<?php endwhile;?>
			</tbody>
		</table>
		<a href="insert.php">elave et</a>




<h1>Xoş gəlmisiniz, admin!</h1>
<a href="logout.php">Cixis et</a>












<?php
} else {
	header('Location:index.php');
}
?>