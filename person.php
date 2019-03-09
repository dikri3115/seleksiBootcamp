<div class="col-md-3">
	<h3><b>Form Data Region</b></h3>
	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Region</label>
			<select name="region" class="form-control">
				<?php 
					include"koneksi.php";
					$query=mysql_query("select * from regions");
					while($data=mysql_fetch_array($query)){
				?>
					<option value="<?php echo$data['id']?>"><?php echo$data['id']?> | <?php echo$data['name']?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Address</label>
			<textarea name="address" class="form-control" required></textarea>
		</div>
		<div class="form-group">
			<label>Income</label>
			<input type="text" name="income" class="form-control" required>
		</div>
		<div class="form-group">
			<button type="submit" name="simpan" class="btn btn-success">Save</button>
			<button type="reset"  class="btn btn-danger">Reset</button>
		</div>
	</form>
	<?php
		include"koneksi.php";
		if(isset($_POST['simpan'])){
			$nama=$_POST['name'];
			$region=$_POST['region'];
			$created_at=date('YmdHms');
			$address=$_POST['address'];
			$income=$_POST['income'];
			
			$query=mysql_query("insert into person values('','$nama','$region','$address','$income','$created_at')");
			if($query){
	?>
		<div><b>Data berhasil disimpan</b></div>
	<?php
			}else{
	?>
		<div><b>Data gagal disimpan</b></div>
	<?php
			}
		}
	?>
</div>
<div class="col-md-8">
	<h3 style="font-family:arial black">Data Person</h3>
	<table class="table table-striped table-bordered">
		<tr style="background-color:Green;color:white">
			<th style="text-align:center">Id</th>
			<th style="text-align:center">Name</th>
			<th style="text-align:center">Income</th>
			<th style="text-align:center">Daerah</th>
			<th style="text-align:center">Menu</th>
		</tr>
			<?php
				include"koneksi.php";
				$query=mysql_query("select * from person inner join regions on person.region_id=regions.id");
				$d=mysql_num_rows($query);
				if($d==0){
			?>
		<tr>
			<td colspan="7" class="text-center bg-info"><b>Data tidak ditemukan</b></td>
		</tr>
			<?php
				}else{
					while($d1=mysql_fetch_array($query)){
			?>
		<tr>
			<td style="background-color:lightgrey"><?php echo$d1['id_p']?></td>
			<td><?php echo$d1['name_p']?></td>
			<td><?php echo "Rp ".number_format($d1['income'])?></td>
			<td><?php echo$d1['name']?></td>
			<td>
				<a href="hapus_person.php?id=<?php echo$d1['id_p']?>" class="btn btn-default" style="color:red" title="Hapus data"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
			<?php
				} }
			?>
	</table>
</div>