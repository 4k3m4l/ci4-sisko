<!doctype html>
<html class="no-js " lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
	<title>SD Negeri oo2 Merapun</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
	<!-- Font Icon -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/footable-bootstrap/css/footable.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/footable-bootstrap/css/footable.standalone.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/charts-c3/plugin.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morrisjs/morris.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.min.css">
	<!-- JQuery DataTable Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" />
	<!-- Custom Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css">
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

	<!-- Right Icon menu Sidebar -->
	<div class="navbar-right">
		<ul class="navbar-nav">
			<li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>
			<li class="dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle" title="App" data-toggle="dropdown" role="button"><i class="zmdi zmdi-apps"></i></a>
				<ul class="dropdown-menu slideUp2">
					<li class="header">App Sortcute</li>
					<li class="body">
						<ul class="menu app_sortcut list-unstyled">
							<li>
								<a href="image-gallery.html">
									<div class="icon-circle mb-2 bg-blue"><i class="zmdi zmdi-camera"></i></div>
									<p class="mb-0">Photos</p>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle mb-2 bg-amber"><i class="zmdi zmdi-translate"></i></div>
									<p class="mb-0">Translate</p>
								</a>
							</li>
							<li>
								<a href="events.html">
									<div class="icon-circle mb-2 bg-green"><i class="zmdi zmdi-calendar"></i></div>
									<p class="mb-0">Calendar</p>
								</a>
							</li>
							<li>
								<a href="contact.html">
									<div class="icon-circle mb-2 bg-purple"><i class="zmdi zmdi-account-calendar"></i></div>
									<p class="mb-0">Contacts</p>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle mb-2 bg-red"><i class="zmdi zmdi-tag"></i></div>
									<p class="mb-0">News</p>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle mb-2 bg-grey"><i class="zmdi zmdi-map"></i></div>
									<p class="mb-0">Maps</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
					<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
				</a>
				<ul class="dropdown-menu slideUp2">
					<li class="header">Notifications</li>
					<li class="body">
						<ul class="menu list-unstyled">
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
									<div class="menu-info">
										<h4>8 New Members joined</h4>
										<p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
									<div class="menu-info">
										<h4>4 Sales made</h4>
										<p><i class="zmdi zmdi-time"></i> 22 mins ago </p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
									<div class="menu-info">
										<h4><b>Nancy Doe</b> Deleted account</h4>
										<p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
									<div class="menu-info">
										<h4><b>Nancy</b> Changed name</h4>
										<p><i class="zmdi zmdi-time"></i> 2 hours ago </p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
									<div class="menu-info">
										<h4><b>John</b> Commented your post</h4>
										<p><i class="zmdi zmdi-time"></i> 4 hours ago </p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
									<div class="menu-info">
										<h4><b>John</b> Updated status</h4>
										<p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i></div>
									<div class="menu-info">
										<h4>Settings Updated</h4>
										<p><i class="zmdi zmdi-time"></i> Yesterday </p>
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
					<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
				</a>
				<ul class="dropdown-menu slideUp2">
					<li class="header">Tasks List <small class="float-right"><a href="javascript:void(0);">View All</a></small></li>
					<li class="body">
						<ul class="menu tasks list-unstyled">
							<li>
								<div class="progress-container progress-primary">
									<span class="progress-badge">eCommerce Website</span>
									<div class="progress">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
											<span class="progress-value">86%</span>
										</div>
									</div>
									<ul class="list-unstyled team-info">
										<li class="m-r-15"><small>Team</small></li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar2.jpg" alt="Avatar">
										</li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar3.jpg" alt="Avatar">
										</li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar4.jpg" alt="Avatar">
										</li>
									</ul>
								</div>
							</li>
							<li>
								<div class="progress-container">
									<span class="progress-badge">iOS Game Dev</span>
									<div class="progress">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
											<span class="progress-value">45%</span>
										</div>
									</div>
									<ul class="list-unstyled team-info">
										<li class="m-r-15"><small>Team</small></li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar10.jpg" alt="Avatar">
										</li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar9.jpg" alt="Avatar">
										</li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar8.jpg" alt="Avatar">
										</li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar7.jpg" alt="Avatar">
										</li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar6.jpg" alt="Avatar">
										</li>
									</ul>
								</div>
							</li>
							<li>
								<div class="progress-container progress-warning">
									<span class="progress-badge">Home Development</span>
									<div class="progress">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
											<span class="progress-value">29%</span>
										</div>
									</div>
									<ul class="list-unstyled team-info">
										<li class="m-r-15"><small>Team</small></li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar5.jpg" alt="Avatar">
										</li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar2.jpg" alt="Avatar">
										</li>
										<li>
											<img src="<?php echo base_url(); ?>assets/images/xs/avatar7.jpg" alt="Avatar">
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="javascript:void(0);" class="app_calendar" title="Calendar"><i class="zmdi zmdi-calendar"></i></a></li>
			<li><a href="javascript:void(0);" class="app_google_drive" title="Google Drive"><i class="zmdi zmdi-google-drive"></i></a></li>
			<li><a href="javascript:void(0);" class="app_group_work" title="Group Work"><i class="zmdi zmdi-group-work"></i></a></li>
			<li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
			<li><a href="<?php echo base_URL() ?>index.php/adm" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
		</ul>
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
				<li class="active open"><a href="<?php echo base_URL() ?>index.php/depan"><i class="zmdi zmdi-home"></i><span>Beranda</span></a></li>
				<li><a href="<?php echo base_URL() ?>index.php/depan/profil"><i class="zmdi zmdi-store"></i><span>Profil Sekolah</span></a></li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/depan/email">Email</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/depan/events">Kalender </a> </li>
						<li><a href="<?php echo base_url(); ?>assets/contact.html">Kontak Guru </a> </li>
					</ul>
				</li>
				<li><a href="<?php echo base_URL() ?>index.php/depan/buku_induk"><i class="zmdi zmdi-assignment"></i><span>Data Siswa</span></a>

				</li>
				<li><a href="<?php echo base_URL() ?>index.php/depan/guru"><i class=" zmdi zmdi-account"></i><span>Data PTK</span></a>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Invetaris</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/depan/tanah">Tanah</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/gedung">Gedung Bangunan</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/inventaris/PM">Peralatan Mesin</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/inventaris/AT">Aset Tetap Lainya</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/inventaris/JI">Jalan, Irigasi, Jaringan</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/inventaris/BR">Barang</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/dir">Inventaris Ruangan</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Nilai Siswa</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/depan/pilih_jur/IPA">Jurusan IPA</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/pilih_jur/IPS">Jurusan IPS</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Rekapitulasi</span></a>
					<ul class="ml-menu">
						<li><a href="<?php echo base_URL() ?>index.php/depan/rekap_keahlian">Siswa Per Keahlian</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/rekap_kelas">Siswa Per Kelas</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/rekap_agama">Siswa Per Agama</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/guru_duk">Daftar Urut Kepangkatan</a></li>
						<li><a href="<?php echo base_URL() ?>index.php/depan/guru">Data Guru/Pegawai</a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_URL() ?>index.php/depan/jadwal"><i class="zmdi zmdi-flower"></i><span>Jadwal KBM</span></a>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span></a>
					<ul class="ml-menu">
						<li><a href="basic-form-elements.html">Basic Form</a></li>
						<li><a href="advanced-form-elements.html">Advanced Form</a></li>
						<li><a href="form-examples.html">Form Examples</a></li>
						<li><a href="form-validation.html">Form Validation</a></li>
						<li><a href="form-wizard.html">Form Wizard</a></li>
						<li><a href="form-editors.html">Editors</a></li>
						<li><a href="form-upload.html">File Upload</a></li>
						<li><a href="form-summernote.html">Summernote</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
					<ul class="ml-menu">
						<li><a href="normal-tables.html">Normal Tables</a></li>
						<li><a href="jquery-datatable.html">Jquery Datatables</a></li>
						<li><a href="editable-table.html">Editable Tables</a></li>
						<li><a href="footable.html">Foo Tables</a></li>
						<li><a href="table-color.html">Tables Color</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span></a>
					<ul class="ml-menu">
						<li><a href="echarts.html">E Chart</a></li>
						<li><a href="c3.html">C3 Chart</a></li>
						<li><a href="morris.html">Morris</a></li>
						<li><a href="flot.html">Flot</a></li>
						<li><a href="chartjs.html">ChartJS</a></li>
						<li><a href="sparkline.html">Sparkline</a></li>
						<li><a href="jquery-knob.html">Jquery Knob</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
					<ul class="ml-menu">
						<li><a href="widgets-app.html">Apps Widgets</a></li>
						<li><a href="widgets-data.html">Data Widgets</a></li>
					</ul>
				</li>
				<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
					<ul class="ml-menu">
						<li><a href="sign-in.html">Sign In</a></li>
						<li><a href="sign-up.html">Sign Up</a></li>
						<li><a href="forgot-password.html">Forgot Password</a></li>
						<li><a href="404.html">Page 404</a></li>
						<li><a href="500.html">Page 500</a></li>
						<li><a href="page-offline.html">Page Offline</a></li>
						<li><a href="locked.html">Locked Screen</a></li>
					</ul>
				</li>
				<li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
					<ul class="ml-menu">
						<li><a href="blank.html">Blank Page</a></li>
						<li><a href="image-gallery.html">Image Gallery</a></li>
						<li><a href="profile.html">Profile</a></li>
						<li><a href="timeline.html">Timeline</a></li>
						<li><a href="pricing.html">Pricing</a></li>
						<li><a href="invoices.html">Invoices</a></li>
						<li><a href="invoices-list.html">Invoices List</a></li>
						<li><a href="search-results.html">Search Results</a></li>
					</ul>
				</li>
				<li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span></a>
					<ul class="ml-menu">
						<li><a href="google.html">Google Map</a></li>
						<li><a href="yandex.html">YandexMap</a></li>
						<li><a href="jvectormap.html">jVectorMap</a></li>
					</ul>
				</li>
				<li>
					<div class="progress-container progress-primary m-t-10">
						<span class="progress-badge">Traffic this Month</span>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
								<span class="progress-value">67%</span>
							</div>
						</div>
					</div>
					<div class="progress-container progress-info">
						<span class="progress-badge">Server Load</span>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
								<span class="progress-value">86%</span>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>

	<!-- Right Sidebar -->
	<aside id="rightsidebar" class="right-sidebar">
		<ul class="nav nav-tabs sm">
			<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="setting">
				<div class="slim_scroll">
					<div class="card">
						<h6>Theme Option</h6>
						<div class="light_dark">
							<div class="radio">
								<input type="radio" name="radio1" id="lighttheme" value="light" checked="">
								<label for="lighttheme">Light Mode</label>
							</div>
							<div class="radio mb-0">
								<input type="radio" name="radio1" id="darktheme" value="dark">
								<label for="darktheme">Dark Mode</label>
							</div>
						</div>
					</div>
					<div class="card">
						<h6>Color Skins</h6>
						<ul class="choose-skin list-unstyled">
							<li data-theme="purple">
								<div class="purple"></div>
							</li>
							<li data-theme="blue">
								<div class="blue"></div>
							</li>
							<li data-theme="cyan">
								<div class="cyan"></div>
							</li>
							<li data-theme="green">
								<div class="green"></div>
							</li>
							<li data-theme="orange">
								<div class="orange"></div>
							</li>
							<li data-theme="blush" class="active">
								<div class="blush"></div>
							</li>
						</ul>
					</div>
					<div class="card">
						<h6>General Settings</h6>
						<ul class="setting-list list-unstyled">
							<li>
								<div class="checkbox rtl_support">
									<input id="checkbox1" type="checkbox" value="rtl_view">
									<label for="checkbox1">RTL Version</label>
								</div>
							</li>
							<li>
								<div class="checkbox ms_bar">
									<input id="checkbox2" type="checkbox" value="mini_active">
									<label for="checkbox2">Mini Sidebar</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input id="checkbox3" type="checkbox" checked="">
									<label for="checkbox3">Notifications</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input id="checkbox4" type="checkbox">
									<label for="checkbox4">Auto Updates</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input id="checkbox5" type="checkbox" checked="">
									<label for="checkbox5">Offline</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input id="checkbox6" type="checkbox" checked="">
									<label for="checkbox6">Location Permission</label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="tab-pane right_chat" id="chat">
				<div class="slim_scroll">
					<div class="card">
						<ul class="list-unstyled">
							<li class="online">
								<a href="javascript:void(0);">
									<div class="media">
										<img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar4.jpg" alt="">
										<div class="media-body">
											<span class="name">Sophia <small class="float-right">11:00AM</small></span>
											<span class="message">There are many variations of passages of Lorem Ipsum available</span>
											<span class="badge badge-outline status"></span>
										</div>
									</div>
								</a>
							</li>
							<li class="online">
								<a href="javascript:void(0);">
									<div class="media">
										<img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar5.jpg" alt="">
										<div class="media-body">
											<span class="name">Grayson <small class="float-right">11:30AM</small></span>
											<span class="message">All the Lorem Ipsum generators on the</span>
											<span class="badge badge-outline status"></span>
										</div>
									</div>
								</a>
							</li>
							<li class="offline">
								<a href="javascript:void(0);">
									<div class="media">
										<img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar2.jpg" alt="">
										<div class="media-body">
											<span class="name">Isabella <small class="float-right">11:31AM</small></span>
											<span class="message">Contrary to popular belief, Lorem Ipsum</span>
											<span class="badge badge-outline status"></span>
										</div>
									</div>
								</a>
							</li>
							<li class="me">
								<a href="javascript:void(0);">
									<div class="media">
										<img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar1.jpg" alt="">
										<div class="media-body">
											<span class="name">John <small class="float-right">05:00PM</small></span>
											<span class="message">It is a long established fact that a reader</span>
											<span class="badge badge-outline status"></span>
										</div>
									</div>
								</a>
							</li>
							<li class="online">
								<a href="javascript:void(0);">
									<div class="media">
										<img class="media-object " src="<?php echo base_url(); ?>assets/images/xs/avatar3.jpg" alt="">
										<div class="media-body">
											<span class="name">Alexander <small class="float-right">06:08PM</small></span>
											<span class="message">Richard McClintock, a Latin professor</span>
											<span class="badge badge-outline status"></span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
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

	<!-- Resposive Iframe -->