<?php
include"koneksi.php";
$id=$_GET['id'];
$query=mysql_query("delete from person where id_p='$id'");
if($query){
	echo"<script>alert('Data berhasil dihapus')</script>";
	echo"<meta http-equiv='refresh' content='0.5 url=index.php?page=person'>";
}else{
	echo"<script>alert('Data gagal dihapus')</script>";
	echo"<meta http-equiv='refresh' content='0.5 url=index.php?page=person'>";
}