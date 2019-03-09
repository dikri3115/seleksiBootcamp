<?php error_reporting(E_ALL ^ (E_NOTICE|E_WARNING));?>
<?php
	include"koneksi.php";
	session_start();
	if(!isset($_SESSION['email'])){
		header("location:login.php");
	}
?>
<html>
	<head>
		<title>Sensus Penduduk</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body style="background-color:#f8f8f8">
		<div class="container-fluid">
			<div class="row" style="background-color:Black;">
				<div class="col-md-12">
					<a href="?page=home"><img src="gambar/logo.png" style="width:50;margin-top:-10;margin-bottom:5">&nbsp; <b style="color:white;margin-top:2;font-size:40px">Aplikasi Kependudukan Provinsi DKI Jakarta</b></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2" >
					<ul class="nav nav-pills  nav-stacked" style="background-color:black;height:50%">
						<li><a href="?page=home"><b>Home</b></a></li>
						<li><a href="?page=region"><b>Data Regions</b></a></li>
						<li><a href="?page=person"><b>Data Person</b></a></li>
						<li><a href="?page=users"><b>Data Users</b></a></li>
						<li><a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-off"></span></a></li>
					</ul>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<?php
								$page=$_GET['page'];
								if($page=="home"){
									include"home.php";
								}elseif($page=="region"){
									include"regions.php";
								}elseif($page=="users"){
									include"users.php";
								}elseif($page=="person"){
									include"person.php";
								}elseif($page=="edit_region"){
									include"edit_region.php";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>