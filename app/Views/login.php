<!doctype html>
<html class="no-js " lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

	<title>:: SD Negeri 002 Merapun</title>
	<!-- Favicon-->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Custom Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css">
</head>

<body class="theme-blush">
	<div class="authentication">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-12">
					<form class="card auth_form" id="login" action="<?php echo base_URL() ?>index.php/login/process" method="post">
						<div class="header">
							<img class="logo" src="<?php echo base_url(); ?>assets/images/tut.png" alt="">
							<h5>Log in Admin</h5>
						</div>
						<fieldset id="inputs">
							<div class="body">

								<div class="input-group mb-3">
									<input class="form-control" id="username" name="username" type="text" placeholder="Pengguna" required>
									<div class="input-group-append">
										<span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
									</div>
								</div>
								<div class="input-group mb-3">
									<input class="form-control" id="password" name="password" type="password" placeholder="Kata Kunci" required>
									<div class="input-group-append">
										<span class="input-group-text"><i class="zmdi zmdi-lock"></i></a></span>
									</div>
								</div>
								<div class="form-group mb-4">
									<label for="username">Pilih Tahun Ajaran</label>
									<select class="form-control" id="ta" name="ta" required>
										<option value=""> -- </option>
										<?php
										$x = date('Y');
										for ($i = ($x - 2); $i < ($x + 1); $i++) {
											if ($i == $x) {
												echo "<option selected value='$i'>$i/" . ($i + 1) . "</option>";
											} else {
												echo "<option value='$i'>$i/" . ($i + 1) . "</option>";
											}
										}
										?>
									</select>
								</div>
							</div>
						</fieldset>
						<center style="margin: -20px 0 15px 0"><b><?php echo $info; ?></b></center>
						<fieldset id="actions">
							<div class="col-mt-4">
								<button class="btn btn-success btn-block waves-effect waves-light" type="submit" id="submit" value="Log in">Log In</button>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="col-lg-8 col-sm-12">
					<div class="card">
						<img src="<?php echo base_url(); ?>assets/images/signin.svg" alt="Sign In" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Jquery Core Js -->
	<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>

</html>