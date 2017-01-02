<?php include('../include/header.php'); ?>
<?php include('login.php'); 
	if(isset($_SESSION['login_user'])){
	header("location: admin.php");
}
?>
<div class="row-fluid" style="margin-top:20px">
	<div class="col-md-6 col-md-offset-3">
		<h2 class="text-center">Login Website Informasi Sekolah</h2>
		<p class="help-block text-center">Masuk ke menu halaman sebagai admin</p>
		<form action="" method="post">
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="username" name="username" class="form-control" placeholder="Username">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" name="password" class="form-control" placeholder="Password">
		  </div>
		  <p><?php echo $error; ?></p>
		  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<?php include('../include/footer.php'); ?>