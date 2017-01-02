<?php include('../../include/header.php'); ?>
<?php include('../../admin/session.php'); ?>
	<div class="row-fluid" style="margin-top:20px">
		<div class="col-md-12">
		<h2>DATA SISWA</h2>
		<p><a href="index.php" class="btn btn-primary">Beranda</a> / <a href="tambah.php" class="btn btn-success">Tambah Data</a></p>
		<h3>Data Siswa</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Jenis Kelamin</th>
						<th>Kelas</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = mysql_query("SELECT * FROM m_siswa ORDER BY nis DESC") or die(mysql_error());
						if(mysql_num_rows($query) == 0){
							echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
						} else {
							$no = 1;
							while($data = mysql_fetch_assoc($query)){
								echo '<tr>';
									echo '<td>'.$no.'</td>';
									echo '<td>'.$data['nis'].'</td>';
									echo '<td>'.$data['nama_siswa'].'</td>';
									echo '<td>'.$data['jekel'].'</td>';
									echo '<td>'.$data['kelas'].'</td>';
									echo '<td>'.$data['alamat'].'</td>';
									echo '<td><a href="edit.php?id='.$data['siswa_id'].'">Edit</a> / <a href="hapus.php?id='.$data['siswa_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
								echo '</tr>';
								$no++;
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
<?php include('../../include/footer.php'); ?>