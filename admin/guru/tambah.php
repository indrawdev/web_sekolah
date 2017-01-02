<?php include('../../include/header.php'); ?>
<?php include('../../admin/session.php'); ?>
<?php
 	function get_code() {
 		$prefix = "NIP";
 		$query = mysql_query("SELECT RIGHT(`nip`, 3) AS `SEQ` FROM `m_guru` ORDER BY `SEQ` DESC") or die(mysql_error());
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
		<h3>Tambah Data Guru</h3>
		<form class="form-horizontal" action="tambah-proses.php" method="post">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">NIP</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" placeholder="NIP" name="nip" value="<?php echo get_code(); ?>" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Guru</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" placeholder="Nama Guru" name="nama" required>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Jenis Kelamin</label>
		    <div class="col-sm-9">
				<select name="jekel" class="form-control" required>
					<option value="">Pilih Jenis Kelamin</option>
					<option value="LAKI-LAKI">LAKI-LAKI</option>
					<option value="PEREMPUAN">PEREMPUAN</option>
				</select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Alamat</label>
		    <div class="col-sm-9">
		    	<textarea name="alamat" class="form-control" rows="4"></textarea>
		    </div>
		  </div>
		  <button type="submit" name="tambah" class="btn btn-default">Simpan</button>
  		</form>
	</div>
</div>
<?php include('../../include/footer.php'); ?>