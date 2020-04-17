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
											<h2><strong>Data</strong> Kelas</h2>
										</div>

										<div class="body" id="isi">
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#tambahdata">Tambah Data</button>
											<div class="table-responsive">
												<table class="table thead-light table-bordered table-striped table-hover dataTable js-exportable">
													<thead class="bg-success text-white">
														<tr>
															<th>No.</th>
															<th>Prodi</th>
															<th>Tingkat</th>
															<th>Nama Kelas</th>
															<th>Kapasitas</th>
															<th>Wali Kelas</th>
															<th>Action</th>
														</tr>
													</thead>
													<?php
													if (empty($kelas)) {
														echo "<tr><td colspan='7' align='center'>-- Data tidak ditemukan --</td></tr>";
													} else {
														$i = 0;
														foreach ($kelas as $k) :
															$i++;
													?>

															<tr>
																<td class='tengah'><?php echo $k->id ?></td>
																<td class='tengah'><?php echo $k->prodi ?></td>
																<td class='tengah'><?php echo $k->tkt ?></td>
																<td><?php echo $k->nama ?></td>
																<td class='tengah'><?php echo $k->kapasitas ?></td>
																<td class='tengah'><?php echo $k->wali ?></td>
																<td class='tengah'>
																	<a href="<?php echo base_URL() ?>index.php/adm/kelas/edt/<?php echo $k->id ?>"><span class="ti-pencil"></span></a> -
																	<a href="<?php echo base_URL() ?>index.php/adm/kelas/hps/<?php echo $k->id ?>"><span class="ti-trash"></span></a></td>
															</tr>

													<?php
														endforeach;
													}
													?>

												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
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
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="title" id="defaultModalLabel">Form Tambah Data</h4>
			</div>
			<div class="modal-body">
				<div id="isi">
					<div class="body">
						<form action="http://localhost/sisko/index.php/adm/kelas/act_add/" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="f_kelas">
							<input type="hidden" name="id" value="">
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-5 col-form-label">Prodi</label>
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
								<label for="colFormLabel" class="col-sm-5 col-form-label">Tingkat</label>
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
								<label for="colFormLabel" class="col-sm-5 col-form-label">Nama Kelas</label>
								<div class="col-sm-6">
									<input type="text" name="nama" size="30" value="" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-5 col-form-label">Kapasitas Kelas</label>
								<div class="col-sm-6">
									<input type="text" name="kapasitas" size="10" value="" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-5 col-form-label">Wali Kelas</label>
								<div class="col-sm-6">
									<input type="text" name="wali" size="30" value="" class="form-control">
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary mb-2">Simpan</button>
							</div>
						</form>
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