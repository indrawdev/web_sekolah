<?php include('../include/header.php'); ?>
<?php include('../admin/session.php'); ?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<h1>Selamat Datang di Menu Utama <br>Website Informasi Sekolah</h1>
		<a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sekolah/admin/logout.php';?>" class="btn btn-primary">Keluar</a>
	</div>
</div>
<?php include('../include/footer.php'); ?>