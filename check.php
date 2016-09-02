<?php
if (isset($_POST['submitContact'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	session_start();
	if (!empty($email) && !empty($password)) {
		if ($email == "admin" && $password == "admin") {
			$_SESSION['giris'] = true;
			header('Location:admin.php');
		} else {
			$_SESSION['mesaj2'] = "Email və ya şifrəniz səhvdir.";
			header('Location:index.php');
		}
	} else {
		$_SESSION['mesaj'] = "Müvafiq xanaları doldurun!";
		header('Location:index.php');
	}
} else {
	header('Location:index.php');
}
?>