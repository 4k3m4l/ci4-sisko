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
											<h2><strong>Data</strong> Ruangan</h2>
										</div>
										<div class="body" id="isi">
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#tambahdata">Tambah Data</button>
											<div class="table-responsive">
												<table class="table thead-light table-bordered table-striped table-hover dataTable js-exportable">
													<thead class="bg-cyan">
														<tr>
															<th>Kode</th>
															<th>Nama</th>
															<th>Penanggun Jawab</th>
															<th>NIP</th>
															<th>Action</th>
														</tr>
													</thead>
													<?php
													if (empty($ruang)) {
														echo "<tr><td colspan='6' align='center'>-- Data tidak ditemukan -- </td></tr>";
													} else {
														$i = 0;
														foreach ($ruang as $r) :
															$i++;
													?>
															<tr>
																<td class='tengah'><?php echo $r->id ?></td>
																<td class='ki'><?php echo $r->nama ?></td>
																<td class='ki'><?php echo $r->tgg_jwb ?></td>
																<td class='tengah'><?php echo $r->nip_tgg_jwb ?></td>
																<td class='tengah'><a href="<?php echo base_URL() ?>index.php/adm/dir/det/<?php echo $r->id ?>"><span class="ti-eye"></a> -
																	<a href="<?php echo base_URL() ?>index.php/adm/ruang/edt/<?php echo $r->id ?>"><span class="ti-pencil"></a> -
																	<a href="<?php echo base_URL() ?>index.php/adm/ruang/hps/<?php echo $r->id ?>"><span class="ti-trash"></span></a></td>
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
	</div>
	</section>
</div>
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="title" id="defaultModalLabel">Form Tambah Data</h4>
			</div>
			<div class="modal-body">
				<div id="isi">
					<form action="http://localhost/sisko/index.php/adm/ruang/act_add/" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" id="f_ruang">
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Nama Ruang</label>
							<div class="col-sm-6">
								<input type="text" name="nama" value="" class="form-control" class="required">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">Penanggung Jawab</label>
							<div class="col-sm-6">
								<input type="text" name="tgg_jwb" value="" class="form-control" class="required">
							</div>
						</div>
						<div class="form-group row">
							<label for="colFormLabel" class="col-sm-6 col-form-label">NIP Penanggung Jawab</label>
							<div class="col-sm-6">
								<input type="text" name="nip_tgg_jwb" value="" class="form-control" class="required">
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
</div>