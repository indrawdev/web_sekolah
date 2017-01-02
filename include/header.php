<!DOCTYPE html>
<html>
<head>
	<title>Website Informasi Sekolah</title>
	<link rel="stylesheet" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sekolah/assets/css/bootstrap.min.css'; ?>">
</head>
<body>
<?php include('koneksi.php'); ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sekolah/index.php';?>">Website Informasi Sekolah</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sekolah/admin/index.php';?>">Admin</a>
				</li>
				<li>
					<a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sekolah/admin/siswa/index.php';?>">Siswa</a>
				</li>
				<li>
					<a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sekolah/admin/guru/index.php';?>">Guru</a>
				</li>
				<li>
					<a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sekolah/admin/mapel/index.php';?>">Mata Pelajaran</a>
				</li>
				<li>
					<a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sekolah/admin/nilai/index.php';?>">Nilai</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid" style="margin-top: 50px;">
