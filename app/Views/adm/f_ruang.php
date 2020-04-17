<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";

	$nama			= "";
	$tgg_jwb		= "";
	$nip_tgg_jwb	= "";
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";

	$id				= $ruang->id;

	$nama			= $ruang->nama;
	$tgg_jwb		= $ruang->tgg_jwb;
	$nip_tgg_jwb	= $ruang->nip_tgg_jwb;
}

?>
<div id="isi">
	<div id="main" class="clearfix">
		<div id="content">
			<section class="content">
				<div class="body_scroll">
					<div class="block-header">
						<div class="row">
							<div class="col-lg-7 col-md-6 col-sm-12">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Master Data</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0);">Ruang</a></li>
									<li class="breadcrumb-item active">Data Ruangan</li>
								</ul>
								<button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-12">
								<button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row clearfix">
							<div class="col-sm-12">
								<div class="row justify-content-center">
									<div class="col-sm-12">
										<div class="card">
											<div class="header">
												<h2><strong>Edit</strong> Data</h2>
											</div>
											<?= $info ?>
											<div class="body">
												<form action="<?= base_URL() ?>index.php/adm/ruang/<?= $act_ ?>/<?= $id ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" id="f_ruang">
													<input type="hidden" name="id" value="<?= $id ?>">
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-3 col-form-label">Nama Ruang</label>
														<div class="col-sm-6">
															<input type="text" name="nama" value="<?= $nama ?>" Class="form-control" class="required">
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-3 col-form-label">Penanggung Jawab</label>
														<div class="col-sm-6">
															<input type="text" name="tgg_jwb" value="<?= $tgg_jwb ?>" Class="form-control" class="required">
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-3 col-form-label">NIP Penanggung Jawab</label>
														<div class="col-sm-6">
															<input type="text" name="nip_tgg_jwb" value="<?= $nip_tgg_jwb ?>" Class="form-control" class="required">
														</div>
													</div>

													<button type="submit" class="btn btn-danger mb-2" value="Simpan">Simpan</button>
													<a href="<?php echo base_url(); ?>index.php/adm/ruang/" class="btn btn-secondary mb-2" role="button" aria-pressed="true">Batal</a>
												</form>
											</div>
										</div>
										<script type="text/javascript">
											$(document).ready(function() {
												$("#f_ruang").validate();
											});
										</script>