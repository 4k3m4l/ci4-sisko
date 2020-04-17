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
									<li class="breadcrumb-item active">Pindah Barang</li>
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
												<h2><strong>Form Pindah </strong> Inventaris Ruangan</h2>
											</div>
											<?php echo $info ?>
											<div class="body">
												<form action="<?php echo base_URL() ?>index.php/adm/dir/act_pindah_dir/<?php echo $det_dir->id_brg ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" onsubmit="return tanah_valid()">

													<table class="col-md-12" class="form">
														<tr>
															<td>Nama Barang</td>
															<td> : <?php echo $det_dir->nama_brg ?></td>
														</tr>
														<tr>
															<td>Letak semula</td>
															<td> : <?php echo $det_dir->nama ?></td>
														</tr>
														<tr>
															<td>Pindahkan Ke</td>
															<td><select class="mdb-select" name="ruang_baru">
																	<?php
																	foreach ($ruang as $r) {
																		if ($det_dir->letak == $r->id) {
																			echo "<option value='" . $r->id . "' selected>" . $r->nama . "</option>";
																		} else {
																			echo "<option value='" . $r->id . "'>" . $r->nama . "</option>";
																		}
																	}
																	?>
																</select>
															</td>
														</tr>
													</table>
													<button type="submit" class="btn btn-danger mb-2" value="Simpan">Simpan</button>
													<a href="<?php echo base_url(); ?>index.php/adm/ruang/" class="btn btn-secondary mb-2" role="button" aria-pressed="true">Kembali</a>
												</form>
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
</div>