<?php include('../../include/header.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<?php
		if(isset($_GET['id'])){

			include('../../include/koneksi.php');
			$id = $_GET['id'];
			$cek = mysql_query("SELECT siswa_id FROM m_siswa WHERE siswa_id='$id'") or die(mysql_error());

			if(mysql_num_rows($cek) == 0){
				echo '<script>window.history.back()</script>';
			
			} else {

				$del = mysql_query("DELETE FROM m_siswa WHERE siswa_id='$id'");
				
				if($del){
					
					echo '<p class="bg-success" style="padding:15px">Data berhasil di hapus! ';
					echo '<a href="index.php">Kembali</a></p>';	

				}else{
					
					echo '<p class="bg-danger" style="padding:15px">Gagal menghapus data! ';
					echo '<a href="index.php">Kembali</a></p>';
				}
				
			}
			
		}else{
			echo '<script>window.history.back()</script>';
		}
		?>
	</div>
</div>
<?php include('../../include/footer.php'); ?>