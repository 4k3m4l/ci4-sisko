<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";

	$prodi			= "";
	$tkt			= "";
	$nama			= "";
	$kapasitas		= "";
	$wali			= "";
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";

	$id				= $kelas->id;

	$prodi			= $kelas->prodi;
	$tkt			= $kelas->tkt;
	$nama			= $kelas->nama;
	$kapasitas		= $kelas->kapasitas;
	$wali			= $kelas->wali;
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
									<li class="breadcrumb-item active">Data Kelas</li>
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
												<h2><strong>Edit</strong> Kelas</h2>
											</div>
											<?= $info ?>
											<div class="body">
												<?= $info ?>
												<form action="<?= base_URL() ?>index.php/adm/kelas/<?= $act_ ?>/<?= $id ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="f_kelas">
													<input type="text" name="id" value="<?= $id ?>">
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-3 col-form-label">Prodi</label>
														<div class="col-sm-6">
															<select name="prodi" Class="form-control" class="required">
																<option value="">Pilih Prodi</option>
																<?php
																$progdi = array("IPA", "IPS");
																foreach ($progdi as $prod) {
																	if ($prodi == $prod) {
																		echo "<option value='$prod' selected>$prod</option>";
																	} else {
																		echo "<option value='$prod'>$prod</option>";
																	}
																}
																?>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-3 col-form-label">Tingkat</label>
														<div class="col-sm-6">
															<select name="tkt" Class="form-control" class="required">
																<option value="">Pilih Tingkat</option>
																<?php
																$tingkat = array("X", "XI", "XII");
																foreach ($tingkat as $tgkt) {
																	if ($tgkt == $tkt) {
																		echo "<option value='$tgkt' selected>$tgkt</option>";
																	} else {
																		echo "<option value='$tgkt'>$tgkt</option>";
																	}
																}
																?>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-3 col-form-label">Nama Kelas</label>
														<div class="col-sm-6">
															<input type="text" name="nama" size="30" value="<?= $nama ?>" Class="form-control" class="required">
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-3 col-form-label">Kapasitas Kelas</label>
														<div class="col-sm-6">
															<input type="text" name="kapasitas" size="10" value="<?= $kapasitas ?>" Class="form-control" class="required">
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-3 col-form-label">Wali Kelas</label>
														<div class="col-sm-6">
															<input type="text" name="wali" size="30" value="<?= $wali ?>" Class="form-control" class="required">
														</div>
													</div>
													<button type="submit" class="btn btn-danger mb-2" value="Simpan">Simpan</button>
													<a href="<?php echo base_url(); ?>index.php/adm/kelas/" class="btn btn-secondary mb-2" role="button" aria-pressed="true">Batal</a>
												</form>
											</div>
										</div>
									</div>

									<script type="text/javascript">
										$(document).ready(function() {
											$("#f_kelas").validate();
										});
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>