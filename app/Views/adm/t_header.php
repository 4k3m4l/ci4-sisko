<!doctype html>
<html class="no-js " lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
	<title>SD Negeri 002 Merapun</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
	<!-- Font Icon -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/footable-bootstrap/css/footable.standalone.min.css">


	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/charts-c3/plugin.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.min.css">

	<!-- JQuery DataTable Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.css">
	<!-- Custom Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css">

	<!-- Tambah Sendiri -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/dropify/css/dropify.min.css">






</head>

<body class="theme-blush">

	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
			<div class="m-t-30"><img class="zmdi-hc-spin" src="<?php echo base_url(); ?>assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
			<p>Tunggu Bosku...</p>
		</div>
	</div>

	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>

	<!-- Main Search -->
	<div id="search">
		<button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
		<form>
			<input type="search" value="" placeholder="Ketik kata untuk mencari" />
			<button type="submit" class="btn btn-primary">Cari</button>
		</form>
	</div>



	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<div class="navbar-brand">
			<button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
			<a href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
		</div>
		<div class="menu">
			<ul class="list">
				<li>
					<div class="user-info">
						<a class="image" href="profile.html"><img src="<?php echo base_url(); ?>assets/images/profile_av.jpg" alt="User"></a>
						<div class="detail">
							<h4>Admin</h4>
						</div>
					</div>
				</li>
				<li class="menu"><a href="<?php echo base_URL() ?>index.php/adm"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>

				<li><a class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Master Data</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/adm/ruang/">Ruangan</a>
						</li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/kelas/">Kelas</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/mapel/">Mata Pelajaran</a></li>
					</ul>
				</li>
				<li><a class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Data</span>
					</a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/adm/profil_sekolah/">Profil Sekolah</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/buku_induk/">Buku Induk Siswa</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/siswa_kelas">Data Siswa per Kelas</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/alumni">Data Alumni</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/guru_data/">Guru</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/guru_duk/">Daftar DUK</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/ledger/">Data Ledger Siswa</a></li>
					</ul>
				</li>
				<li><a class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Invetaris</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/adm/tanah/">Tanah</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/g_bangunan/">Gedung Bangunan</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/no_tanah_bgn/">Selain Tanah & Gedung</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/dir/">Inventaris Ruangan</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Proses</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/adm/pindah_kelas">Pindah Kelas</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/input_nilai_per_kelas">Input Ledger</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Jadwal PBM</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/adm/jadwal">Administrasi Jadwal</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/jadwal_by_guru">Lihat Jadwal Per Guru</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/jadwal_by_kelas">Lihat Jadwal Per Kelas</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/jadwal_by_hari">Lihat Jadwal Per Hari</a></li>
					</ul>
				</li>

				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Administrator</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/adm/backup">Backup Database</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/adm/edit_passwod">Edit Passwod</a></li>
					</ul>
				</li>
				<li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span></a>
					<ul class="ml-menu">
						<li><a href="google.html">Google Map</a></li>
						<li><a href="yandex.html">YandexMap</a></li>
						<li><a href="jvectormap.html">jVectorMap</a></li>
					</ul>
				</li>

			</ul>
		</div>
	</aside>
	<!-- Jquery Core Js -->
	<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
	<!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
	<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>
	<!-- slimscroll, waves Scripts Plugin Js -->
	<script src=" <?php echo base_url(); ?>assets/bundles/jvectormap.bundle.js"></script>
	<!-- JVectorMap Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/bundles/sparkline.bundle.js"></script>
	<!-- Sparkline Plugin Js -->
	<script src="<?php echo base_url(); ?>assets/bundles/c3.bundle.js"></script>
	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pages/index.js"></script>
	<!--/ calender javascripts -->
	<script src="<?php echo base_url() ?>assets/bundles/fullcalendarscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/js/pages/calendar/calendar.js"></script>
	<!-- Jquery DataTable Plugin Js -->
	<script src="<?php echo base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/pages/tables/jquery-datatable.js"></script>
	<script src="<?php echo base_url() ?>assets/js/active.menu.js"></script>

	<!-- Jquery Input Mask Plugin Js -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/inputmask/inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/inputmask/inputmask.dependencyLib.jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/inputmask/inputmask.extensions.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/inputmask/inputmask.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/inputmask/jquery.inputmask.js"></script>
	<!-- JPlugin Select2 -->
	<script src="<?php echo base_url() ?>assets/plugins/select2/select2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/select2/select2_locale_id.js"></script>

	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


	<script src="<?php echo base_url() ?>assets/js/ui-kit/plugins/bootstrap-switch.js"></script>
	<script src="<?php echo base_url() ?>assets/js/ui-kit/plugins/jquery.sharrre.js"></script>
	<script src="<?php echo base_url() ?>assets/js/ui-kit/plugins/nouislider.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/ui-kit/now-ui-kit.js"></script>

	<script src="<?php echo base_url() ?>assets/js/pages/ui/animations.js"></script>
	<script src="<?php echo base_url() ?>assets/js/pages/ui/modals.js"></script>
	<script src="<?php echo base_url() ?>assets/js/pages/ui/notifications.js"></script>
	<script src="<?php echo base_url() ?>assets/js/pages/ui/sweetalert.js"></script>
	<script src="<?php echo base_url() ?>assets/js/pages/ui/tooltips-popovers.js"></script>

	<script src="<?php echo base_url() ?>assets/js/pages/forms/form-validation.js"></script>

	<script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<script src="<?php echo base_url() ?>assets/plugins/material/material.min.js"></script>

	<script src="<?php echo base_url() ?>assets/plugins/jquery-datatable//dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/dropify/js/dropify.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/pages/forms/dropify.js"></script>





	<script>
		var url = window.location;
		// for sidebar menu entirely but not cover treeview
		$('li.menu a').filter(function() {
			return this.href != url;
		}).parent().removeClass('active');

		// for sidebar menu entirely but not cover treeview
		$('li.menu a').filter(function() {
			return this.href == url;
		}).parent().addClass('active');

		// for treeview
		$('ul.ml-menu a').filter(function() {
			return this.href == url;
		}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
	</script>