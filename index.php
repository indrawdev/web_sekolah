<?php include('include/header.php'); ?>

<!--<div class="row-fluid">
	<div class="col-md-6">
		<h3>Mata Pelajaran</h3>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Mapel</th>
					<th>Mata Pelajaran</th>
					<th>Guru</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query1 = mysql_query("SELECT * FROM m_mapel INNER JOIN m_guru ON m_mapel.guru_id=m_guru.guru_id ORDER BY kode_mapel DESC") or die(mysql_error());
						if(mysql_num_rows($query1) == 0) {
							echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
						} else {
							$no = 1;
							while($data = mysql_fetch_assoc($query1)){
						?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['kode_mapel']; ?></td>
								<td><?php echo $data['nama_pelajaran']; ?></td>
								<td><?php echo $data['nama_guru']; ?></td>
							</tr>
				<?php $no++; 
							}
						}	 
				?>
			</tbody>
		</table>
	</div>

	<div class="col-md-6">
		<h3>Guru</h3>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama Guru</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query2 = mysql_query("SELECT * FROM m_guru ORDER BY nip DESC") or die(mysql_error());
						if(mysql_num_rows($query2) == 0){
							echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
						} else {
							$no = 1;
							while($data = mysql_fetch_assoc($query2)){
					?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nip']; ?></td>
								<td><?php echo $data['nama_guru']; ?></td>
							</tr>
				<?php $no++;
							}
						}
				?>
			</tbody>
		</table>
	</div>
</div>

<div class="row-fluid">
	<div class="col-md-6">
		<h3>Siswa</h3>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama Siswa</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query3 = mysql_query("SELECT * FROM m_siswa ORDER BY nis DESC") or die(mysql_error());
						if(mysql_num_rows($query3) == 0){
							echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
						} else {
							$no = 1;
							while($data = mysql_fetch_assoc($query3)){
					?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nis']; ?></td>
								<td><?php echo $data['nama_siswa']; ?></td>
							</tr>
				<?php $no++;
							}
						}
				?>
			</tbody>
		</table>	
	</div>
	<div class="col-md-6">

	</div>
</div>-->


	<div class="row-fluid" style="background-color: #da251c">
			<img src="assets/images/sekolah-home.png">
	</div>

<?php include('include/footer.php'); ?>