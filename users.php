<div class="col-md-3">
	<h3><b>Form Data Users</b></h3>
	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>E-mail</label>
			<input  type="text" name="email" class="form-control form-group" placeholder="example@gmail.com" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required>
		</div>
		<div class="form-group">
			<button type="submit" name="simpan" class="btn btn-success">Save</button>
			<button type="reset"  class="btn btn-danger">Reset</button>
		</div>
	</form>
	<?php
		include"koneksi.php";
		if(isset($_POST['simpan'])){
		$email=$_POST['email'];
		$created_at=date('YmdHms');
		$password=$_POST['password'];
		$query=mysql_query("insert into users values('','$email','$password','$created_at')");
		}
	?>
</div>
<div class="col-md-8">
	<h3 style="font-family:arial black">Data Regions</h3>
	<table class="table table-striped table-bordered">
		<tr style="background-color:Green;color:white">
			<th style="text-align:center">Id</th>
			<th style="text-align:center">E-mail</th>
			<th style="text-align:center">Created at</th>
		</tr>
			<?php
				include"koneksi.php";
				$query=mysql_query("select * from users");
				$d=mysql_num_rows($query);
				if($d==0){
			?>
		<tr>
			<td colspan="3" class="text-center bg-info"><b>Data tidak ditemukan</b></td>
		</tr>
			<?php
				}else{
					while($d1=mysql_fetch_array($query)){
			?>
		<tr>
			<td style="background-color:lightgrey"><?php echo$d1['id']?></td>
			<td><?php echo$d1['email']?></td>
			<td><?php echo$d1['created_at']?></td>
		</tr>
			<?php
				} }
			?>
		<tr>
			
		</tr>
	</table>
</div>