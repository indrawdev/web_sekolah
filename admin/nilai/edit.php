<?php include('../../include/header.php'); ?>
<?php include('../../admin/session.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<h2>Edit Data Mata Pelajaran</h2>
		<p><a href="index.php" class="btn btn-primary">Beranda</a> / <a href="tambah.php" class="btn btn-success">Tambah Data</a></p>
		<h3>Edit Data Mata Pelajaran</h3>
		<?php
			include('../../include/koneksi.php');
			$id = $_GET['id'];
			$show = mysql_query("SELECT * FROM t_nilai WHERE nilai_id='$id'");
			if(mysql_num_rows($show) == 0){
				echo '<script>window.history.back()</script>';
			} else {
				$data1 = mysql_fetch_assoc($show);
			}
		?>
		<form class="form-horizontal" action="edit-proses.php" method="post">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Siswa</label>
		    <div class="col-sm-9">
				<select name="siswa_id" class="form-control" required>
					<option value="">Pilih Nama Siswa</option>
					<?php 
						$query = mysql_query("SELECT * FROM m_siswa ORDER BY nis DESC") or die(mysql_error());
						if(mysql_num_rows($query) == 0){
							echo '<option value="">Tidak ada data!</option>';
						} else {
							while($data = mysql_fetch_assoc($query)){
								echo '<option value="'.$data['siswa_id'].'">'.$data['nis'].' - '.$data['nama_siswa'].'</option>';
							}
						}
					?>
				</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Pelajaran</label>
		    <div class="col-sm-9">
				<select name="mapel_id" class="form-control" required>
					<option value="">Pilih Nama Pelajaran</option>
					<?php 
						$query = mysql_query("SELECT * FROM m_mapel ORDER BY kode_mapel DESC") or die(mysql_error());
						if(mysql_num_rows($query) == 0){
							echo '<option value="">Tidak ada data!</option>';
						} else {
							while($data = mysql_fetch_assoc($query)){
								echo '<option value="'.$data['mapel_id'].'">'.$data['kode_mapel'].' - '.$data['nama_pelajaran'].'</option>';
							}
						}
					?>
				</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nilai</label>
		    <div class="col-sm-9">
				<input type="text" class="form-control" name="nilai" value="<?php echo $data1['nilai']; ?>" required>
		    </div>
		  </div>
		  <input type="hidden" name="id" value="<?php echo $id; ?>">
		  <button type="submit" name="simpan" class="btn btn-default">Simpan</button>
		</form>
	</div>
</div>
<?php include('../../include/footer.php'); ?>