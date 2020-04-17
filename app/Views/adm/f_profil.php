<?php
$act = $this->uri->segment(3);

if ($act == "edit"  || $act == "act_edit") {
	$id			= $profil_sekolah->id;

	$nama 		= "<input class='form-control' type='text' name='nama' value='" . $profil_sekolah->nama . "'>";
	$nss 		= "<input class='form-control'type='text' name='nss'  value='" . $profil_sekolah->nss . "' onkeypress='return onlyNumbers();'>";
	$nis 		= "<input class='form-control' type='text' name='nis' value='" . $profil_sekolah->nis . "' onkeypress='return onlyNumbers();'>";
	$npsn 		= "<input class='form-control' type='text' name='npsn' value='" . $profil_sekolah->npsn . "' onkeypress='return onlyNumbers();'>";
	$prov 		= "<input class='form-control' type='text' name='prov' value='" . $profil_sekolah->prov . "'>";
	$kab 		= "<input class='form-control' type='text' name='kab' value='" . $profil_sekolah->kab . "'>";
	$kec 		= "<input class='form-control' type='text' name='kec' value='" . $profil_sekolah->kec . "'>";
	$desa 		= "<input class='form-control' type='text' name='desa' value='" . $profil_sekolah->desa . "'>";
	$jl 		= "<input class='form-control' type='text' name='jl' value='" . $profil_sekolah->jl . "'>";
	$kd_pos 	= "<input class='form-control' type='text' name='kd_pos' value='" . $profil_sekolah->kd_pos . "' onkeypress='return onlyNumbers();'>";
	$telp 		= "<input class='form-control' type='text' name='telp' value='" . $profil_sekolah->telp . "' onkeypress='return onlyNumbers();'>";
	$fax 		= "<input class='form-control' type='text' name='fax' value='" . $profil_sekolah->fax . "' onkeypress='return onlyNumbers();'>";
	$daerah 	= "<input class='form-control col-lg' type='text' name='daerah' value='" . $profil_sekolah->daerah . "'>";
	$status 	= "<input class='form-control' type='text' name='status'  value='" . $profil_sekolah->status . "'>";
	$prodi 		= "<input class='form-control' type='text' name='prodi' value='" . $profil_sekolah->prodi . "'>";
	$kompetensi = "<textarea cols='60' rows='5' name='kompetensi'>" . $profil_sekolah->kompetensi . "</textarea> *) ganti baris pakai \"" . htmlentities("<br>") . "\"";
	$akre 		= "<input class='form-control col-2' type='text' name='akre' value='" . $profil_sekolah->akre . "'>";
	$akre_th 	= "<input class='form-control col-4' type='text' name='akre_th' value='" . $profil_sekolah->akre_th . "' onkeypress='return onlyNumbers();' maxlength='4'>";
	$npwp_rutin = "<input class='form-control' type='text' name='npwp_rutin' value='" . $profil_sekolah->npwp_rutin . "'>";
	$npwp_bop 	= "<input class='form-control' type='text' name='npwp_bop' value='" . $profil_sekolah->npwp_bop . "'>";
	$sk 		= "<input class='form-control' type='text' name='sk' value='" . $profil_sekolah->sk . "'>";
	$sk_tgl 	= "<input class='form-control' type='text' name='sk_tgl' id='sk_tgl' readonly value='" . $profil_sekolah->sk_tgl . "'>";
	$sk_ttd 	= "<input class='form-control' type='text' name='sk_ttd' value='" . $profil_sekolah->sk_ttd . "'>";
	$jml_guru 	= "<input class='form-control' type='text' name='jml_guru' value='" . $profil_sekolah->jml_guru . "' onkeypress='return onlyNumbers();'>";
	$th_berdiri = "<input class='form-control' type='text' name='th_berdiri' value='" . $profil_sekolah->th_berdiri . "' onkeypress='return onlyNumbers();' maxlength='4'>";
	$th_negeri 	= "<input class='form-control' type='text' name='th_negeri' value='" . $profil_sekolah->th_negeri . "' onkeypress='return onlyNumbers();' maxlength='4'>";
	$waktu_kbm 	= "<input class='form-control' type='text' name='waktu_kbm' value='" . $profil_sekolah->waktu_kbm . "'>";
	$stat_gedung = "<input class='form-control' type='text' name='stat_gedung' value='" . $profil_sekolah->stat_gedung . "'>";
	$jrk_kec 	= "<input class='form-control col-4' type='text' name='jrk_kec' value='" . $profil_sekolah->jrk_kec . "' onkeypress='return onlyNumbers();'>";
	$jrk_kab 	= "<input class='form-control col-4' type='text' name='jrk_kab' value='" . $profil_sekolah->jrk_kab . "' onkeypress='return onlyNumbers();'>";
	$lintasan 	= "<input class='form-control' type='text' name='lintasan' value='" . $profil_sekolah->lintasan . "'>";
	$lintang 	= "<input class='form-control' type='text' name='lintang' value='" . $profil_sekolah->lintang . "'>";
	$bujur 		= "<input class='form-control' type='text' name='bujur' value='" . $profil_sekolah->bujur . "'>";
	$penyelenggara 	= "<input class='form-control' type='text' name='penyelenggara' value='" . $profil_sekolah->penyelenggara . "'>";
	$kepsek_nama 	= "<input class='form-control' type='text' name='kepsek_nama' value='" . $profil_sekolah->kepsek_nama . "'>";
	$kepsek_nip 	= "<input class='form-control' type='text' name='kepsek_nip' value='" . $profil_sekolah->kepsek_nip . "'>";
	$kepsek_pkt 	= "<input class='form-control' type='text' name='kepsek_pkt' value='" . $profil_sekolah->kepsek_pkt . "'>";
	$kepsek_gol 	= "<input class='form-control' type='text' name='kepsek_gol' value='" . $profil_sekolah->kepsek_gol . "'>";
	$kepsek_pkt_tmt = "<input class='form-control' type='text' name='kepsek_pkt_tmt' id='kepsek_pkt_tmt' readonly value='" . $profil_sekolah->kepsek_pkt_tmt . "'>";
	$kepsek_pend 	= "<input class='form-control' type='text' name='kepsek_pend' value='" . $profil_sekolah->kepsek_pend . "'>";
	$kepsek_jur 	= "<input class='form-control' type='text' name='kepsek_jur' value='" . $profil_sekolah->kepsek_jur . "'>";
	$kepsek_sk 		= "<input class='form-control' type='text' name='kepsek_sk' value='" . $profil_sekolah->kepsek_sk . "'>";
	$kepsek_tmt 	= "<input class='form-control' type='text' name='kepsek_tmt' id='kepsek_tmt' readonly value='" . $profil_sekolah->kepsek_tmt . "'>";
	$kepsek_nope1 	= "<input class='form-control' type='text' name='kepsek_nope1' value='" . $profil_sekolah->kepsek_nope1 . "' onkeypress='return onlyNumbers();'>";
	$kepsek_nope2 	= "<input class='form-control' type='text' name='kepsek_nope2' value='" . $profil_sekolah->kepsek_nope2 . "' onkeypress='return onlyNumbers();'>";

	$tombol			= '<div class="button">
						<input class="btn btn-info" type="submit" name="kirim" value="Simpan">
						</div>';
	$jscript		= 'function catcalc(cal) {
							var date = cal.date;
							var time = date.getTime()
						}';
} else {
	$act_	= "act_edt";
	$foto	= "";

	$id			= $profil_sekolah->id;


	$nama  		= $profil_sekolah->nama;
	$nss  		= $profil_sekolah->nss;
	$nis  		= $profil_sekolah->nis;
	$npsn 	 	= $profil_sekolah->npsn;
	$prov  		= $profil_sekolah->prov;
	$kab  		= $profil_sekolah->kab;
	$kec  		= $profil_sekolah->kec;
	$desa  		= $profil_sekolah->desa;
	$jl  		= $profil_sekolah->jl;
	$kd_pos  	= $profil_sekolah->kd_pos;
	$telp  		= $profil_sekolah->telp;
	$fax  		= $profil_sekolah->fax;
	$daerah  	= $profil_sekolah->daerah;
	$status  	= $profil_sekolah->status;
	$prodi  	= $profil_sekolah->prodi;
	$kompetensi = $profil_sekolah->kompetensi;
	$akre  		= $profil_sekolah->akre;
	$akre_th  	= $profil_sekolah->akre_th;
	$npwp_rutin = $profil_sekolah->npwp_rutin;
	$npwp_bop  	= $profil_sekolah->npwp_bop;
	$sk  		= $profil_sekolah->sk;
	$sk_tgl  	= $profil_sekolah->sk_tgl;
	$sk_ttd  	= $profil_sekolah->sk_ttd;
	$jml_guru  	= $profil_sekolah->jml_guru;
	$th_berdiri = $profil_sekolah->th_berdiri;
	$th_negeri  = $profil_sekolah->th_negeri;
	$waktu_kbm  = $profil_sekolah->waktu_kbm;
	$stat_gedung = $profil_sekolah->stat_gedung;
	$jrk_kec  	= $profil_sekolah->jrk_kec;
	$jrk_kab  	= $profil_sekolah->jrk_kab;
	$lintasan  	= $profil_sekolah->lintasan;
	$lintang  	= $profil_sekolah->lintang;
	$bujur  	= $profil_sekolah->bujur;
	$penyelenggara  = $profil_sekolah->penyelenggara;
	$kepsek_nama  	= $profil_sekolah->kepsek_nama;
	$kepsek_nip  	= $profil_sekolah->kepsek_nip;
	$kepsek_pkt  	= $profil_sekolah->kepsek_pkt;
	$kepsek_gol  	= $profil_sekolah->kepsek_gol;
	$kepsek_pkt_tmt = $profil_sekolah->kepsek_pkt_tmt;
	$kepsek_pend  	= $profil_sekolah->kepsek_pend;
	$kepsek_jur  	= $profil_sekolah->kepsek_jur;
	$kepsek_sk  	= $profil_sekolah->kepsek_sk;
	$kepsek_tmt  	= $profil_sekolah->kepsek_tmt;
	$kepsek_nope1  	= $profil_sekolah->kepsek_nope1;
	$kepsek_nope2  	= $profil_sekolah->kepsek_nope2;
	$tombol			= '<div class="tombol_submit">
						<input class="btn btn-danger"type="button" name="kirim" value="Edit" onclick="window.open(\'' . base_URL() . 'index.php/adm/profil_sekolah/edit\', \'_self\');">
						</div>';
	$jscript		= "";
}

?>


<section class="content">
	<div class="body_scroll">
		<div class="block-header">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-sm-12">
					<h2>Tabs</h2>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
						<li class="breadcrumb-item active">Tabs</li>
					</ul>
					<button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12">
					<button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<!-- Example Tab -->
			<div class="row clearfix">
				<div class="col-sm-12">
					<div class="row justify-content-center">
						<div class="col-sm-12">
							<div class="card">
								<div class="header">
									<h2><strong>Profil</strong> Sekolah</h2>
								</div>

								<form action="<?php echo base_URL() ?>index.php/adm/profil_sekolah/simpan/<?php echo $id ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_buku_induk" onsubmit="return buku_induk_valid()">

									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="card">
												<div class="p-3 mb-2 bg-primary text-white">Data Sekolah</div>
												<div class="table-responsive">
													<table id="maintable" class="table table-hover c_table theme-color mb-0">
														<tr>
															<td>Nama</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
															<td><?php echo $nama ?></td>
														</tr>
														<tr>
															<td>NSS</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
															<td><?php echo $nss ?></td>
														</tr>
														<tr>
															<td>NIS</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
															<td><?php echo $nis ?></td>
														</tr>
														<tr>
															<td>NPSN</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
															<td><?php echo $npsn ?></td>
														</tr>
														<tr>
															<td>Status</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
															<td><?php echo $status ?></td>
														</tr>
														<tr>
															<td>Akreditasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
															<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
															<td>
																<div class="form-inline">
																	<?php echo $akre ?>
																	Tahun <?php echo $akre_th ?>
																</div>
															</td>
														</tr>

													</table>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-12">

											<div class="p-3 mb-2 bg-danger text-white">Alamat</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-hover c_table theme-color mb-0">
													<tr>
														<td>Jalan</td>
														<td>:</td>
														<td><?php echo $jl ?></td>
													</tr>
													<tr>
														<td>Desa</td>
														<td>:</td>
														<td><?php echo $desa ?></td>

													</tr>
													<tr>

														<td>Kecamatan</td>
														<td>:</td>
														<td><?php echo $kec ?></td>
													</tr>
													<tr>
														<td>Kabupaten</td>
														<td>:</td>
														<td><?php echo $kab ?></td>
													</tr>
													<tr>
														<td>Provinsi</td>
														<td>:</td>
														<td><?php echo $prov ?></td>

													</tr>
													<tr>
														<td>Kode Pos</td>
														<td>:</td>
														<td><?php echo $kd_pos ?></td>
													</tr>
													<tr>
														<td>Telepon</td>
														<td>:</td>
														<td><?php echo $telp ?></td>
													</tr>
													<tr>
														<td>Nomor Fax</td>
														<td>:</td>
														<td><?php echo $fax ?></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
							</div>


							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="p-3 mb-2 bg-success  text-white">Geografis</div>
										<div class="table-responsive">
											<table id="maintable" class="table table-hover c_table theme-color mb-0">
												<tr>
													<td>Daerah</td>
													<td>:&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td><?php echo $daerah ?></td>
												</tr>
												<tr>
													<td>Lintasan</td>
													<td>:&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td><?php echo $lintasan ?></td>
												</tr>
												<tr>
													<td>Jarak Ke Kecamatan</td>
													<td>:&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td>
														<div class="form-inline">
															<?php echo $jrk_kec ?> &nbsp;&nbsp;KM
													</td>
												</tr>
												<tr>
													<td>Jarak Ke Kabupaten</td>
													<td>:</td>
													<td>
														<div class="form-inline">
															<?php echo $jrk_kab ?> &nbsp;&nbsp;KM
													</td>
												</tr>
												<tr>
													<td>Lintang</td>
													<td>:</td>
													<td><?php echo $lintang ?> Bujur <?php echo $lintang ?></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="p-3 mb-2 bg-warning text-white">Akademik</div>
										<div class="table-responsive">
											<table id="maintable" class="table table-hover c_table theme-color mb-0">
												<tr>
													<td>Program Studi</td>
													<td>:</td>
													<td><?php echo $prodi ?></td>
												</tr>
												<tr>
													<td>Jumlah Guru</td>
													<td>:</td>
													<td><?php echo $jml_guru ?> orang</td>
												</tr>
												<tr>
													<td>Waktu KBM</td>
													<td>:</td>
													<td><?php echo $waktu_kbm ?></td>
												</tr>

											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="p-3 mb-2 bg-dark text-white">Legalitas</div>
										<div class="table-responsive">
											<table id="maintable" class="table table-hover c_table theme-color mb-0">
												<tr>
													<td>SK Berdiri</td>
													<td>:</td>
													<td><?php echo $sk ?></td>
												</tr>
												<tr>
													<td>SK Tanggal</td>
													<td>:</td>
													<td><?php echo $sk_tgl ?></td>
												</tr>
												<tr>
													<td>Penanda Tangan SK</td>
													<td>:</td>
													<td><?php echo $sk_ttd ?></td>
												</tr>
												<tr>
													<td>Tahun Berdiri</td>
													<td>:</td>
													<td><?php echo $th_berdiri ?> Tahun Penegrian <?php echo $th_negeri ?></td>
												</tr>
												<tr>
													<td>NPWP Rutin</td>
													<td>:</td>
													<td><?php echo $npwp_rutin ?></td>
												</tr>
												<tr>
													<td>NPWP BOP</td>
													<td>:</td>
													<td><?php echo $npwp_bop ?></td>
												</tr>
												<tr>
													<td>Status Gedung</td>
													<td>:</td>
													<td><?php echo $stat_gedung ?></td>
												</tr>
												<tr>
													<td>Penyelenggara</td>
													<td>:</td>
													<td><?php echo $penyelenggara ?></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card">
										<div class="p-3 mb-2 bg-info text-white">Kepala Sekolah</div>
										<div class="table-responsive">
											<table id="maintable" class="table table-hover c_table theme-color mb-0">
												<tr>
													<td>Nama Kepala Sekolah</td>
													<td>:</td>
													<td><?php echo $kepsek_nama ?></td>
												</tr>
												<tr>
													<td>NIP</td>
													<td>:</td>
													<td><?php echo $kepsek_nip ?></td>
												</tr>
												<tr>
													<td>Pangkat</td>
													<td>:</td>
													<td><?php echo $kepsek_pkt ?> Gol : <?php echo $kepsek_gol ?> TMT : <?php echo $kepsek_pkt_tmt ?></td>
												</tr>
												<tr>
													<td>Pendidikan Terakhir</td>
													<td>:</td>
													<td><?php echo $kepsek_pend ?></td>
												</tr>
												<tr>
													<td>Jurusan</td>
													<td>:</td>
													<td><?php echo $kepsek_jur ?></td>
												</tr>
												<tr>
													<td>SK Jadi Kepala Sekolah</td>
													<td>:</td>
													<td id="date"><?php echo $kepsek_sk ?> TMT : <?php echo $kepsek_tmt ?></td>
												</tr>
												<tr>
													<td>Nomor HP 1</td>
													<td>:</td>
													<td><?php echo $kepsek_nope1 ?></td>
												</tr>
												<tr>
													<td>Nomor HP 2</td>
													<td>:</td>
													<td><?php echo $kepsek_nope2 ?></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
							<?php echo $tombol ?>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
</div>
<script type="text/javascript">
	<?php echo $jscript ?>

	Calendar.setup({
		inputField: "kepsek_tmt", // id of the input field
		ifFormat: "%Y-%m-%d", // format of the input field
		showsTime: true,
		timeFormat: "24",
		onUpdate: catcalc
	});
	Calendar.setup({
		inputField: "kepsek_pkt_tmt", // id of the input field
		ifFormat: "%Y-%m-%d", // format of the input field
		showsTime: true,
		timeFormat: "24",
		onUpdate: catcalc
	});
	Calendar.setup({
		inputField: "sk_tgl", // id of the input field
		ifFormat: "%Y-%m-%d", // format of the input field
		showsTime: true,
		timeFormat: "24",
		onUpdate: catcalc
	});
</script>