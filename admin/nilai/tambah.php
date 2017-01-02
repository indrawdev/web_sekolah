<?php include('../../include/header.php'); ?>
<?php include('../../admin/session.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<h2>Website Informasi Sekolah</h2>
		<p><a href="index.php" class="btn btn-primary">Beranda</a> / <a href="tambah.php" class="btn btn-success">Tambah Data</a></p>
		<h3>Tambah Data Nilai</h3>
		<form class="form-horizontal" action="tambah-proses.php" method="post">
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
				<input type="text" class="form-control" placeholder="Nilai" name="nilai" required>
		    </div>
		  </div>
		  <button type="submit" name="tambah" class="btn btn-default">Simpan</button>
  		</form>
	</div>
</div>
<?php include('../../include/footer.php'); ?>