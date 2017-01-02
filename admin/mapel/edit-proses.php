<?php include('../../include/header.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<?php
		if(isset($_POST['simpan'])){
			$id			= $_POST['id'];	
			$kode		= $_POST['kode'];
			$nama		= $_POST['nama'];
			$guru		= $_POST['guru_id'];

			$update = mysql_query("UPDATE m_mapel SET kode_mapel='$kode', nama_pelajaran='$nama', guru_id='$guru' WHERE mapel_id='$id'") or die(mysql_error());

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