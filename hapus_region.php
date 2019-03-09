<?php
include"koneksi.php";
$id=$_GET['id'];
$query=mysql_query("delete from regions where id='$id'");
if($query){
	echo"<script>alert('Data berhasil dihapus')</script>";
	echo"<meta http-equiv='refresh' content='0.5 url=index.php?page=region'>";
}else{
	echo"<script>alert('Data gagal dihapus')</script>";
	echo"<meta http-equiv='refresh' content='0.5 url=index.php?page=region'>";
}