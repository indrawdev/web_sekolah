<?php include('../../include/header.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<?php
		if(isset($_POST['simpan'])){
			include('../../include/koneksi.php');
			$id			= $_POST['id'];	
			$nis		= $_POST['nis'];
			$nama		= $_POST['nama'];
			$jekel		= $_POST['jekel'];
			$kelas		= $_POST['kelas'];
			$alamat		= $_POST['alamat'];

			$update = mysql_query("UPDATE m_siswa SET nis='$nis', nama_siswa='$nama', jekel='$jekel', kelas='$kelas', alamat='$alamat' WHERE siswa_id='$id'") or die(mysql_error());

			if($update){

				echo '<p class="bg-success" style="padding:15px">Data berhasil di simpan!';
				echo '<a href="index.php"> Kembali</a></p>';
				
			}else{
				
				echo '<p class="bg-danger" style="padding:15px">Gagal menyimpan data! ';
				echo '<a href="index.php"> Kembali</a></p>';
				
			}

		}else{
			echo '<script>window.history.back()</script>';
		}
		?>
	</div>
</div>
<?php include('../../include/footer.php'); ?>