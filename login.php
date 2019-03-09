<?php
	include"koneksi.php";
	session_start();
	if(isset($_SESSION['email'])){
		header("location:index.php?page=home");
	}
?>
<html>
	<head>
		<title>Login | Aplikasi Kependudukan DKI Jakarta</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body style="background-color:lightgray">
		<div class="container-fluid">
			<br><br>
			<div class="row">
			</div>
			<div class="row">
				<?php
					include"koneksi.php";
					session_start();
					if(isset($_POST['login'])){
						$email=$_POST['email'];
						$password=$_POST['password'];
						$query=mysql_query("select * from users where email='$email' and password='$password'");
						if(mysql_num_rows($query)>0){
							$_SESSION['email']=$email;
							header("location:index.php?page=home");
						}else{
				?>
					<div class="alert alert-danger">Login gagal !!! Silahkan Ulangi</div>
				<?php
						}
					}
				?>
			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<table class="table" style="background-color:white">
								<tr>
									<td>
										<center><img src="gambar/logo.png" style="width:40%"></center><br>
										<div style="text-align:center;color:white;background-color:black;font-size:29"><b>Login User</b></div><br>
										<div>
										<form role="form" action="" method="POST">
											<label>E-mail</label>
											&nbsp;<input type="text" autoset="off" name="email" class="form-control" required>
											<label>Password</label>
											<input type="password" name="password" class="form-control" required>
										</div>
											<button type="submit" name="login" class="btn btn-success">Login</button>
											<button type="reset" class="btn btn-danger">Cancel</button>
										</form>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div><br><br>
	</body>
</html>