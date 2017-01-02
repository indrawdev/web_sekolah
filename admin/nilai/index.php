<?php include('../../include/header.php'); ?>
<?php include('../../admin/session.php'); ?>
	<div class="row-fluid" style="margin-top:20px">
		<div class="col-md-12">
		<h2>DATA NILAI</h2>
		<p><a href="index.php" class="btn btn-primary">Beranda</a> / <a href="tambah.php" class="btn btn-success">Tambah Data</a></p>
		<h3>Data Nilai</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Kode</th>
						<th>Mata Pelajaran</th>
						<th>Nilai</th>
						<th>Tanggal</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = mysql_query("SELECT * FROM t_nilai INNER JOIN m_siswa ON t_nilai.siswa_id = m_siswa.siswa_id INNER JOIN m_mapel ON t_nilai.mapel_id = m_mapel.mapel_id ORDER BY nilai_id DESC") or die(mysql_error());
						if(mysql_num_rows($query) == 0){
							echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
						} else {
							$no = 1;
							while($data = mysql_fetch_assoc($query)){
								echo '<tr>';
									echo '<td>'.$no.'</td>';
									echo '<td>'.$data['nis'].'</td>';
									echo '<td>'.$data['nama_siswa'].'</td>';
									echo '<td>'.$data['kode_mapel'].'</td>';
									echo '<td>'.$data['nama_pelajaran'].'</td>';
									echo '<td class="bg-info">'.$data['nilai'].'</td>';
									echo '<td>'.$data['tanggal'].'</td>';
									echo '<td><a href="edit.php?id='.$data['nilai_id'].'">Edit</a> / <a href="hapus.php?id='.$data['nilai_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
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