<?php include('../../include/header.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<?php
		if(isset($_POST['tambah'])){
			include('../../include/koneksi.php');
			$nip		= $_POST['nip'];
			$nama		= $_POST['nama'];
			$jekel 		= $_POST['jekel'];
			$alamat		= $_POST['alamat'];

			$input = mysql_query("INSERT INTO m_guru (nip, nama_guru, jekel, alamat) VALUES('$nip', '$nama', '$jekel', '$alamat')") or die(mysql_error());
			
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