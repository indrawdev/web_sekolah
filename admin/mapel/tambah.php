<?php include('../../include/header.php'); ?>
<?php include('../../admin/session.php'); ?>
<?php
 	function get_code() {
 		$prefix = "MP";
 		$query = mysql_query("SELECT RIGHT(`kode_mapel`, 3) AS `SEQ` FROM `m_mapel` ORDER BY `SEQ` DESC") or die(mysql_error());
		$result = $query;
		    	
		if ($result && (mysql_num_rows($result)>0)) {
    		$seq = mysql_result($result, 0);
 			return $prefix . $seq;
 		} else {
 			return $prefix . '000';
 		}
 	}
?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<h2>Website Informasi Sekolah</h2>
		<p><a href="index.php" class="btn btn-primary">Beranda</a> / <a href="tambah.php" class="btn btn-success">Tambah Data</a></p>
		<h3>Tambah Data Mata Pelajaran</h3>
		<form class="form-horizontal" action="tambah-proses.php" method="post">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Kode</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" placeholder="Kode Mata Pelajaran" name="kode" value="<?php echo get_code(); ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Pelajaran</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" placeholder="Nama Pelajaran" name="nama" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Guru</label>
		    <div class="col-sm-9">
				<select name="guru_id" class="form-control" required>
					<option value="">Pilih Nama Guru</option>
					<?php 
						$query = mysql_query("SELECT * FROM m_guru ORDER BY nip DESC") or die(mysql_error());
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
		  <button type="submit" name="tambah" class="btn btn-default">Simpan</button>
  		</form>
	</div>
</div>
<?php include('../../include/footer.php'); ?>