<br>
<div class="row">
	<div class="col-md-3">
	<div class="panel panel-default">
		<div class="panel-body" style="background-color:lightgreen">
			<?php
				include"koneksi.php";
				$query=mysql_query("select *from regions");
				$data=mysql_num_rows($query);
			?><b>Data Region</b><h3><?php echo$data ?>&nbsp;&nbsp;<span class='glyphicon glyphicon-book'></span></h3>
		</div>
		<div class="panel-heading" style="background-color:green">
			<a href="?page=region" style="color:white"><b>Selengkapnya</b></a>
		</div>
	</div>
	</div>
	<div class="col-md-3">
	<div class="panel panel-default">
		<div class="panel-body" style="background-color:lightgreen">
			<?php
				include"koneksi.php";
				$query=mysql_query("select *from users");
				$data=mysql_num_rows($query);
			?>	
			<b>Data Users</b><h3><?php echo$data ?>&nbsp;&nbsp;<span class='glyphicon glyphicon-book'></span></h3>
		</div>
		<div class="panel-heading" style="background-color:green">
			<a href="?page=users" style="color:white"><b>Selengkapnya</b></a>
		</div>
	</div>
	</div>
	<div class="col-md-3">
	<div class="panel panel-default">
		<div class="panel-body" style="background-color:lightgreen">
			<?php
				include"koneksi.php";
				$query=mysql_query("select *from person");
				$data=mysql_num_rows($query);
			?>
			<b>Data Person</b><h3><?php echo$data ?>&nbsp;&nbsp;<span class='glyphicon glyphicon-book'></span></h3>
		</div>
		<div class="panel-heading" style="background-color:green">
			<a href="?page=barang_keluar" style="color:white"><b>Selengkapnya</b></a>
		</div>
	</div>
	</div>
</div>