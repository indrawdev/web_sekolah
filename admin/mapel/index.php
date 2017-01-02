<?php include('../../include/header.php'); ?>
<?php include('../../admin/session.php'); ?>
	<div class="row-fluid" style="margin-top:20px">
		<div class="col-md-12">
		<h2>DATA MATA PELAJARAN</h2>
		<p><a href="index.php" class="btn btn-primary">Beranda</a> / <a href="tambah.php" class="btn btn-success">Tambah Data</a></p>
		<h3>Data Siswa</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Kode Mata Pelajaran</th>
						<th>Nama Mata Pelajaran</th>
						<th>Nama Guru</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = mysql_query("SELECT * FROM m_mapel INNER JOIN m_guru ON m_mapel.guru_id=m_guru.guru_id ORDER BY kode_mapel DESC") or die(mysql_error());
						if(mysql_num_rows($query) == 0){
							echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
						} else {
							$no = 1;
							while($data = mysql_fetch_assoc($query)){
								echo '<tr>';
									echo '<td>'.$no.'</td>';
									echo '<td>'.$data['kode_mapel'].'</td>';
									echo '<td>'.$data['nama_pelajaran'].'</td>';
									echo '<td>'.$data['nama_guru'].'</td>';
									echo '<td><a href="edit.php?id='.$data['mapel_id'].'">Edit</a> / <a href="hapus.php?id='.$data['mapel_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
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