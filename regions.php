<div class="col-md-3">
	<h3><b>Form Data Region</b></h3>
	<form role="form" method="POST" action="">
		<div class="form-group">
			<label>Id</label>
			<?php
				include"koneksi.php";
				$cari_id=mysql_query("select MAX(id)as id from regions");
				$data=mysql_fetch_array($cari_id);
				$kode=substr($data['id'],1,4);
				$tambah=$kode+1;
				if($tambah<10){
					$id="J000".$tambah;
				}else{
					$id="J00".$tambah;
				}
			?>
			<input type="text" name="id" value="<?php echo$id ?>" class="form-control" readonly>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" name="simpan" class="btn btn-success">Save</button>
			<button type="reset"  class="btn btn-danger">Reset</button>
		</div>
	</form>
	<?php
		if(isset($_POST['simpan'])){
			$id_region=$_POST['id'];
			$name=$_POST['name'];
			$date=date('YmdHms');
			$query=mysql_query("insert into regions values('$id_region','$name','$date')");
			if($query){
				echo"<h3>Data Berhasil disimpan</h3>";
			}else{
				echo"<h3>Data Gagal disimpan</h3>";
			}
		}
	?>
</div>
<div class="col-md-8">
	<h3 style="font-family:arial black">Data Regions</h3>
	<table class="table table-striped table-bordered">
		<tr style="background-color:Green;color:white">
			<th style="text-align:center">No</th>
			<th style="text-align:center">Id</th>
			<th style="text-align:center">Name</th>
			<th style="text-align:center">Created at</th>
			<th style="text-align:center">Menu</th>
		</tr>
			<?php
				include"koneksi.php";
				$no=0;
				$query=mysql_query("select * from regions");
				$d=mysql_num_rows($query);
				if($d==0){
			?>
		<tr>
			<td colspan="6" class="text-center bg-info"><b>Data tidak ditemukan</b></td>
		</tr>
			<?php
				}else{
					while($d1=mysql_fetch_array($query)){
					$no++;
			?>
		<tr>
			<td style="background-color:lightgrey"><?php echo$no?></td>
			<td><?php echo$d1['id']?></td>
			<td><?php echo$d1['name']?></td>
			<td><?php echo$d1['created_at']?></td>
			<td>
				<a href="?page=edit_region&id_region=<?php echo$d1['id']?>" title="Edit data" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="hapus_region.php?id=<?php echo$d1['id']?>" class="btn btn-default" style="color:red" title="Hapus data"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
			<?php
				} }
			?>
		<tr>
			
		</tr>
	</table>
</div>