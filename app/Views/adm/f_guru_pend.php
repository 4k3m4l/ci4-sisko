<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_		= "act_add";
	$id			= "";
	$jenjang	= "";
	$nama		= "";
	$kota		= "";
	$th_lulus	= "";
	$fak		= "";
	$jur		= "";
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	$id			= $pend_detil->id;
	$jenjang	= $pend_detil->jenjang;
	$nama		= $pend_detil->nama;
	$kota		= $pend_detil->kota;
	$th_lulus	= $pend_detil->th_lulus;
	$fak		= $pend_detil->fak;
	$jur		= $pend_detil->jur;
}

?>
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
											<h2><strong>Riwayat Pendidikan</strong> Guru</h2>
										</div>
										<div id="isi">
											<div class="body">
												<button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#tambahdata">Tambah Data</button>
												<span id="tambah_data" style="position: relative">
													<a href="<?php echo base_URL() ?>index.php/adm/guru_pend/add/<?php echo $this->uri->segment(4) ?>">Tambah Data</a>
												</span>

												<div class="table-responsive">
													<table class="table thead-light table-bordered table-striped table-hover dataTable js-exportable">
														<thead class="bg-cyan justify-content-center">
															<tr>
																<th>No</th>
																<th>Jenjang</th>
																<th>Nama</th>
																<th>Kota</th>
																<th>Th. Lulus</th>
																<th>Fakultas</th>
																<th>Jurusan</th>
																<th>Action</th>
															</tr>
														</thead>

														<?php $i = 0 ?>
														<?php foreach ($guru_pend as $gp) {
															$i++;
														?>

															<tr>
																<td class='tengah'><?php echo $i ?></td>
																<td class='ki'><?php echo $gp->jenjang ?></td>
																<td class='ki'><?php echo $gp->nama ?></td>
																<td class='tengah'><?php echo $gp->kota ?></td>
																<td class='tengah'><?php echo $gp->th_lulus ?></td>
																<td class='tengah'><?php echo $gp->fak ?></td>
																<td class='tengah'><?php echo $gp->jur ?></td>
																<td class='tengah'>
																	<a href="<?php echo base_URL() ?>index.php/adm/guru_pend/edt/<?php echo $gp->id_guru ?>/<?php echo $gp->id ?>">Edit</a> -
																	<a href="<?php echo base_URL() ?>index.php/adm/guru_pend/hps/<?php echo $gp->id_guru ?>/<?php echo $gp->id ?>">Hapus</a></td>

															</tr>

														<?php }
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
			</div>
		</section>
	</div>
</div>
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="title" id="defaultModalLabel">Form Tambah Data</h4>
				<div class="modal-body">
					<form action="<?php echo base_URL() ?>index.php/adm/guru_pend/<?php echo $act_ ?>/<?php echo $this->uri->segment(4) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_pend" onsubmit="return tanah_valid()" id="f_pend">
						<input type="hidden" value="<?php echo $id ?>" name="id">
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Jenjang</label>
							<div class="col-sm-6">
								<select class="form-control" name="jenjang" class="required">
									<option value="">-Pilih Jenjang-</option>
									<?php
									$data_jenj	= array("SD", "SMP", "SMA", "D1", "D2", "D3", "D4", "S1", "S2", "S3");
									foreach ($data_jenj as $dj) {
										if ($dj == $jenjang) {
											echo "<option value='" . $dj . "' selected>" . $dj . "</option>";
										} else {
											echo "<option value='" . $dj . "'>" . $dj . "</option>";
										}
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Nama</label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="nama" size="40" value="<?php echo $nama ?>" class="required">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Kota</label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="kota" size="40" value="<?php echo $kota ?>" class="required">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Tahun Lulus</label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="th_lulus" size="10" value="<?php echo $th_lulus ?>" class="required" onkeypress="return onlyNumbers();">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Fakultas</label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="fak" size="40" value="<?php echo $fak ?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Jurusan</label>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="jur" size="40" value="<?php echo $jur ?>">


								<input type="submit" value="Simpan">

					</form>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function() {
					$("#f_pend").validate();
				});
			</script>
		</div>
	</div>
</div>
</div>