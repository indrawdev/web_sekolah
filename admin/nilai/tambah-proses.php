<?php include('../../include/header.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<?php
		if(isset($_POST['tambah'])){
			$siswa		= $_POST['siswa_id'];
			$mapel		= $_POST['mapel_id'];
			$nilai 		= $_POST['nilai'];
			$tanggal 	= date("Y-m-d");

			$input = mysql_query("INSERT INTO t_nilai (siswa_id, mapel_id, nilai, tanggal) VALUES('$siswa', '$mapel', '$nilai', '$tanggal')") or die(mysql_error());
			
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