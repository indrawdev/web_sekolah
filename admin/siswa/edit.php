<?php include('../../include/header.php'); ?>
<?php include('../../admin/session.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<h2>Edit Data Siswa</h2>
		<p><a href="index.php" class="btn btn-primary">Beranda</a> / <a href="tambah.php" class="btn btn-success">Tambah Data</a></p>
		<h3>Edit Data Siswa</h3>
		<?php
			include('../../include/koneksi.php');
			$id = $_GET['id'];
			$show = mysql_query("SELECT * FROM m_siswa WHERE siswa_id='$id'");
			if(mysql_num_rows($show) == 0){
				echo '<script>window.history.back()</script>';
			} else {
				$data = mysql_fetch_assoc($show);
			}
		?>
		<form class="form-horizontal" action="edit-proses.php" method="post">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">NIS</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="nis" value="<?php echo $data['nis']; ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Siswa</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_siswa']; ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Jenis Kelamin</label>
		    <div class="col-sm-9">
				<select name="jekel" class="form-control" required>
					<option value="">Pilih Jenis Kelamin</option>
					<option value="LAKI-LAKI" <?php if($data['jekel'] == 'LAKI-LAKI'){ echo 'selected'; } ?>>LAKI-LAKI</option>
					<option value="PEREMPUAN" <?php if($data['jekel'] == 'PEREMPUAN'){ echo 'selected'; } ?>>PEREMPUAN</option>
				</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Kelas</label>
		    <div class="col-sm-9">
				<select name="kelas" class="form-control" required>
					<option value="">Pilih Kelas</option>
					<option value="X" <?php if($data['kelas'] == 'X'){ echo 'selected'; } ?>>X</option>
					<option value="XI" <?php if($data['kelas'] == 'XI'){ echo 'selected'; } ?>>XI</option>
					<option value="XII" <?php if($data['kelas'] == 'XII'){ echo 'selected'; } ?>>XII</option>
				</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Alamat</label>
		    <div class="col-sm-9">
		    	<textarea name="alamat" class="form-control" rows="4"><?php echo $data['alamat']; ?></textarea>
		    </div>
		  </div>
		  <input type="hidden" name="id" value="<?php echo $id; ?>">
		  <button type="submit" name="simpan" class="btn btn-default">Simpan</button>
		</form>
	</div>
</div>
<?php include('../../include/footer.php'); ?>