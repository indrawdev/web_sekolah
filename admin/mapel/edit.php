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
			$show = mysql_query("SELECT * FROM m_mapel WHERE mapel_id='$id'");
			if(mysql_num_rows($show) == 0){
				echo '<script>window.history.back()</script>';
			} else {
				$data = mysql_fetch_assoc($show);
			}
		?>
		<form class="form-horizontal" action="edit-proses.php" method="post">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Kode</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="kode" value="<?php echo $data['kode_mapel']; ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Pelajaran</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_pelajaran']; ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Guru</label>
		    <div class="col-sm-9">
				<select name="guru_id" class="form-control" required>
					<option value="">Pilih Nama Guru</option>
					<?php 
						$query = mysql_query("SELECT * FROM m_guru ORDER BY guru_id DESC") or die(mysql_error());
						if(mysql_num_rows($query) == 0){
							echo '<option value="">Tidak ada data!</option>';
						} else {
							while($data = mysql_fetch_assoc($query)){
								echo '<option value="'.$data['guru_id'].'">'.$data['nip'].' - '.$data['nama_guru'].'</option>';
							}
						}
					?>
				</select>
		    </div>
		  </div>
		  <input type="hidden" name="id" value="<?php echo $id; ?>">
		  <button type="submit" name="simpan" class="btn btn-default">Simpan</button>
		</form>
	</div>
</div>
<?php include('../../include/footer.php'); ?>