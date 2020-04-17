<div id="main" class="clearfix">
	<div id="content">
		<section class="content">
			<div class="body_scroll">
				<div class="block-header">
					<div class="row">
						<div class="col-lg-7 col-md-6 col-sm-12">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Master Data</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Mapel</a></li>
								<li class="breadcrumb-item active">Data Mapel</li>
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
											<h2><strong>Data</strong> Mata Pelajaran</h2>
										</div>
										<div class="body" id="isi">
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#tambahdata">Tambah Data</button>
											<div class="table-responsive">
												<table class="table thead-light table-bordered table-striped table-hover dataTable js-exportable">
													<thead class="bg-danger text-white">
														<tr>
															<th>ID</th>
															<!--<th>Prodi</th>-->
															<th>Jenis</th>
															<th>Nama Mapel</th>
															<th>Semester</th>
															<th>KKM</th>
															<th>Action</th>
														</tr>
													</thead>

													<?php
													if (empty($mapel)) {
														echo "<tr><td colspan='7' align='center'>-- Data tidak ditemukan --</td></tr>";
													} else {
														$i = 0;
														foreach ($mapel as $m) :
															$i++;
													?>

															<tr>
																<td><?= $m->id ?></td>
																<td class='tengah'><?= $m->prodi ?></td>
																<!--
																	<td class='tengah'><?= $m->jenis ?></td>-->
																<td><span title="<?= $m->nama_mapel ?>"><?= substr($m->nama_mapel, 0, 75) ?></span></td>
																<td class='tengah'><?= $m->semester ?></td>
																<td class='tengah'><?= $m->kkm ?></td>
																<td class='tengah'>
																	<a href="<?= base_URL() ?>index.php/adm/mapel/edt/<?= $m->id ?>">Edit</a> -
																	<a href="<?= base_URL() ?>index.php/adm/mapel/hps/<?= $m->id ?>">Hapus</a></td>
															</tr>

													<?php
														endforeach;
													}
													?>

												</table>
												<div class="paging"><?php echo $this->pagination->create_links(); ?></div>
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
			</div>
			<div class="modal-body">
				<div id="isi">
					<form action="http://localhost/sisko/index.php/adm/mapel/act_add/" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" onsubmit="return tanah_valid()" id="f_mapel" novalidate="novalidate">
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-5 col-form-label">Prodi</label>
							<div class="col-sm-6">
								<select name="prodi" Class="form-control" class="required">
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
							<label for="colFormLabel" class="col-sm-5 col-form-label">Nama Mapel</label>
							<div class="col-sm-6">
								<input type="text" name="nama_mapel" value="" class="form-control" class="required">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-5 col-form-label">Semester</label>
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
							<label for="colFormLabel" class="col-sm-5 col-form-label">KKM</label>
							<div class="col-sm-6">
								<input type="text" name="kkm" value="" class="form-control" class="required">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary mb-2">Simpan</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#f_mapel").validate();


	});
</script>