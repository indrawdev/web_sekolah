<?php include('../../include/header.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<?php
		if(isset($_POST['tambah'])){
			$kode		= $_POST['kode'];
			$nama		= $_POST['nama'];
			$guru 		= $_POST['guru_id'];

			$input = mysql_query("INSERT INTO m_mapel (kode_mapel, nama_pelajaran, guru_id) VALUES('$kode', '$nama', '$guru')") or die(mysql_error());
			
			if($input){
				
				echo '<p class="bg-success" style="padding:15px">Data berhasil di tambahkan!';
				echo '<a href="index.php"> Kembali</a></p>';
				
			}else{
				
				echo '<p class="bg-danger" style="padding:15px">Gagal menambahkan data! ';
				echo '<a href="index.php"> Kembali</a></p>';
			}

		}else{
			echo '<script>window.history.back()</script>';
		}
		?>
	</div>
</div>
<?php include('../../include/footer.php'); ?>