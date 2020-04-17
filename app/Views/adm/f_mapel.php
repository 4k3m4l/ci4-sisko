<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";


	$prodi 			= $this->input->post('prodi');
	$jenis 			= $this->input->post('jenis');
	$nama_mapel		= $this->input->post('nama_mapel');
	$semester		= $this->input->post('semester');
	$kkm 			= $this->input->post('kkm');
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";

	$id				= $mapel->id;

	$prodi  			= $mapel->prodi;
	$jenis  			= $mapel->jenis;
	$nama_mapel  		= $mapel->nama_mapel;
	$semester  			= $mapel->semester;
	$kkm	  			= $mapel->kkm;
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
												<h2><strong>Edit</strong> Mapel</h2>
											</div>
											<div class="body">
												<?= $info ?>
												<form action="<?= base_URL() ?>index.php/adm/mapel/<?= $act_ ?>/<?= $id ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" onsubmit="return tanah_valid()" id="f_mapel">
													<input type="hidden" name="id" value="<?= $id ?>">
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-4 col-form-label">Prodi</label>
														<div class="col-sm-6">
															<select name="prodi" class="form-control" class="required">
																<option value="">-Pilih Prodi-</option>
																<?php
																$prodi_list	= array("IPA", "IPS");
																foreach ($prodi_list as $p) {
																	if ($p == $prodi) {
																		echo "<option value='" . $p . "' selected>" . $p . "</option>";
																	} else {
																		echo "<option value='" . $p . "'>" . $p . "</option>";
																	}
																}
																?>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-4 col-form-label">Nama Mapel</label>
														<div class="col-sm-6">
															<input class="form-control" class="required" name="nama_mapel" value="<?= $nama_mapel ?>">
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-4 col-form-label">Semester</label>
														<div class="col-sm-6">
															<select name="semester" Class="form-control" class="required">
																<option value="">-Pilih Semester-</option>
																<?php
																$semester_list	= array("1", "2");
																foreach ($semester_list as $s) {
																	if ($s == $semester) {
																		echo "<option value='" . $s . "' selected>Semester " . $s . "</option>";
																	} else {
																		echo "<option value='" . $s . "'>Semester " . $s . "</option>";
																	}
																}
																?>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label for="colFormLabel" class="col-sm-4 col-form-label">KKM</label>
														<div class="col-sm-6">
															<input class="form-control class=" required" type="text" name="kkm" value="<?= $kkm ?>" onkeypress="return onlyNumbers();">
														</div>
													</div>
													<button type="submit" class="btn btn-danger mb-2" value="Simpan">Simpan</button>
													<a href="<?php echo base_url(); ?>index.php/adm/mapel/" class="btn btn-secondary mb-2" role="button" aria-pressed="true">Batal</a>
											</div>
											</form>
										</div>
									</div>


									<script type="text/javascript">
										$(document).ready(function() {
											$("#f_mapel").validate();


										});
									</script>