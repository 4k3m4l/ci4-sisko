<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


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
												<h2><strong>Daftar</strong> Inventaris Ruangan</h2>
											</div>
											<?= $info ?>
											<div class="body">
												<div class="form-row">
													<div class="form-group col-md-6">
														<span id="tambah_data" style="border:none; background: none">
															Seleksi Ruangan :
															<select name="ctk_dir" onchange="window.location.href=this.options
													[this.selectedIndex].value" target="_blank">
																<option value="<?php echo base_URL() ?>index.php/adm/dir/det/">- SEMUA -</option>
																<?php
																if ($this->uri->segment(3) == "det") {
																	$id_ruang = $this->uri->segment(4);
																} else {
																	$id_ruang = "";
																}
																foreach ($ruang as $r) {
																	if ($id_ruang == $r->id) {
																		echo "<option value='" . base_URL() . "index.php/adm/dir/det/" . $r->id . "' selected>" . $r->nama . "</option>";
																	} else {
																		echo "<option value='" . base_URL() . "index.php/adm/dir/det/" . $r->id . "'>" . $r->nama . "</option>";
																	}
																}
																?>
															</select>
														</span>
													</div>
												</div>

												<table class="table thead-light table-bordered table-striped table-hover dataTable js-exportable">
													<thead class="bg-cyan">
														<tr>
															<th width="17%">Kode Brg / No Aset</th>
															<th width="43%">Nama</th>
															<th width="30%">Letak</th>
															<th width="10%">Action</th>
														</tr>
													</thead>

													<?php
													$i = 0;
													if (empty($dir)) {
														echo "<tr><td colspan='4' align='center'> -- Data TIDAK DITEMUKAN -- </td></tr>";
													} else {
														foreach ($dir as $d) :
															$i++;
													?>

															<tr>
																<td class='tengah'><?php echo $d->kd_brg . "." . $d->no_aset ?></td>
																<td class='ki'><?php echo $d->nama_brg ?></td>
																<td class='ki'><?php echo $d->nama ?></td>
																<td class='tengah'>
																	<a href="<?php echo base_URL() ?>index.php/adm/dir/pindah_dir/<?php echo $d->id_brg ?>">Pindah ke : </a>
																</td>
															</tr>

													<?php
														endforeach;
													}
													?>

												</table>
												<a href="<?php echo base_url(); ?>index.php/adm/ruang/" class="btn btn-secondary mb-2" role="button" aria-pressed="true">Kembali</a>
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