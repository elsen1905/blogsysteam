
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<meta charset="utf-8">
		<style>
			body{
				background: #EDEFF0;
			}
			.loginForm{
				background: white;
				border-radius: 2px;
				margin-top: 50px;
				box-shadow: 0px 0px 15px gray;
				text-align: center;
			}
			img{
				border: 2px solid #EDEFF0;
				padding: 4px;
				height: 100px;
				margin-top: 30px;
			}
			span{
				color: #7F8FA4;
			}
			input{
				margin-top: 15px;
			}
			.submit{
				height: 50px;
				margin-top: 15px;
				border: none;
				border-radius: 3px;
			}
			.footer{
				background: #FAFAFA;
				margin-top: 30px;
				padding-top: 10px;
			}
			p{
				color:red;
			}
			.footerP{
				color:black;
			}
		</style>
	</head>
	<body>
<?php
session_start();
if (isset($_SESSION['hazir'])) {
	header('Location:admin.php');
}
?>
		<div class="container">
			<div class="row">
				<div class="loginForm col-md-4 col-md-offset-4">
					<img src="no-image.png" class="img-circle">
					<h3>Admin Login</h3>
					<span>Sign in to your account</span>
					<form action="check.php" method="post">
						<input type="text" class="form-control" placeholder="Email Address" name="email">
						<input type="password" class="form-control" placeholder="Password" name="password">
						<input type="submit" class="col-md-4 col-md-offset-4 submit btn-success" value="Sign In" name="submitContact">
					</form>
					<?php
if (isset($_SESSION['mesaj'])) {
	?>
					<p class="col-md-12"><?=$_SESSION['mesaj']?></p>
					<?php
unset($_SESSION['mesaj']);
}
?>
					<?php
if (isset($_SESSION['mesaj2'])) {
	?>
					<p class="col-md-12"><?=$_SESSION['mesaj2']?></p>
					<?php
unset($_SESSION['mesaj2']);
}
?>
					<div class="row">
						<div class="footer col-md-12">
							<p class="footerP">© Code Academy 2016.All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>