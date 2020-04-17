<?php
$act = $this->uri->segment(3);

//radiobox
$s_L	= "";
$s_P	= "";
$s_NI	= "";
$s_NA	= "";
$a_NI	= "";
$a_NA	= "";
$i_NI	= "";
$i_NA	= "";
$s_AK	= "";
$s_AT	= "";
$s_AA	= "";
$s_ASH	= "";
$s_ASM = "";
$s_NEG	= "";
$s_SW = "";

if ($act == "add" || $act == "act_add") {
	$act_		= "act_add";
	$lihat_foto	= "";
	$foto		= "";

	$id			= $id_terakhir;
	$nm_lkp		= $this->input->post('nm_lkp');
	$nm_pggl	= $this->input->post('nm_pggl');
	$no_induk	= $this->input->post('no_induk');
	$nisn		= $this->input->post('nisn');
	$jk			= $this->input->post('jk');
	$tmp_lahir	= $this->input->post('tmp_lahir');
	$tgl_lahir	= $this->input->post('tgl_lahir');
	$umur		= $this->input->post('umur');
	$agama		= $this->input->post('agama');
	$wn			= $this->input->post('wn');
	$anak_ke	= $this->input->post('anak_ke');
	$sdr_kandung = $this->input->post('sdr_kandung');
	$sdr_tiri	= $this->input->post('sdr_tiri');
	$sdr_angkat	= $this->input->post('sdr_angkat');
	$stat_anak	= $this->input->post('stat_anak');
	$bahasa		= $this->input->post('bahasa');
	$stat_aktif	= $this->input->post('stat_aktif');

	$alamat		= "";
	$no_telp	= "";
	$tggl_dgn	= "";
	$alamat_kos	= "";
	$jarak		= "";
	$sarana		= "";

	$gol_darah	= "";
	$penyakit	= "";
	$kelainan	= "";
	$tgg_bdn	= "";
	$brt_bdn	= "";

	$asal_sklh	= "";
	$tgl_ijazah	= "";
	$no_ijazah	= "";
	$tgl_stl	= "";
	$no_stl		= "";
	$no_ujian	= "";
	$lama_bljr	= "";
	$stat_sasal	= "";
	$pindah_dari = "";
	$alasan_pindah	= "";
	$msk_kelas	= "";
	$msk_tgl	= "";
	$bid_studi	= "";
	$prodi		= "";
	$kompetensi	= "";

	$ay_nama	= "";
	$ay_tmp_lahir	= "";
	$ay_tgl_lahir	= "";
	$ay_agama	= "";
	$ay_wn		= "";
	$ay_pend	= "";
	$ay_pkj		= "";
	$ay_phasilan	= "";
	$ay_stat	= "";
	$ay_alamat	= "";

	$ib_nama	= "";
	$ib_tmp_lahir	= "";
	$ib_tgl_lahir	= "";
	$ib_agama	= "";
	$ib_wn		= "";
	$ib_pend	= "";
	$ib_pkj		= "";
	$ib_phasilan	= "";
	$ib_stat	= "";
	$ib_alamat	= "";

	$wa_nama	= "";
	$wa_tmp_lahir	= "";
	$wa_tgl_lahir	= "";
	$wa_agama	= "";
	$wa_wn		= "";
	$wa_pend	= "";
	$wa_pkj		= "";
	$wa_phasilan	= "";
	$wa_stat	= "";
	$wa_alamat	= "";

	$seni		= "";
	$olahraga	= "";
	$organisasi	= "";
	$lain		= "";

	$bs1		= "-";
	$bs2		= "-";
	$bs3		= "-";
	$tgl_pindah	= "";
	$alasan_pindah_keluar	= "";
	$tgl_lulus	= "";
	$lls_tgl_ijazah	= "";
	$lls_no_ijazah	= "";
	$lls_tgl_stl	= "";
	$lls_no_stl		= "";

	$klh_tmp		= "";
	$klh_jrs		= "";
	$klh_kota		= "";
	$krj_tgl_mulai	= "";
	$krj_namapt		= "";
	$krj_lembaga	= "";
	$krj_mandiri	= "";
	$krj_lainnya	= "";
	$krj_hasil		= "";
} else if ($act == "edt"  || $act == "act_edt") {
	$act_		= "act_edt";
	$foto		= $data_siswa->foto;
	$lihat_foto	= "| <a href='#' id='klik'>Lihat Foto</a> <div id='fotonya' style='display: none; margin-left: 57'><img src='" . base_URL() . "upload/foto_siswa/" . $data_siswa->foto . "' width='100px' height='100px'></div>";


	$id			= $data_siswa->id;
	$nm_lkp		= $data_siswa->nama;
	$nm_pggl	= $data_siswa->nama_pgl;
	$no_induk	= $data_siswa->nis;
	$nisn		= $data_siswa->nisn;
	$jk			= $data_siswa->jk;
	$tmp_lahir	= $data_siswa->tmp_lahir;
	$tgl_lahir	= $data_siswa->tgl_lahir;
	$umur		= $data_siswa->umur;
	$agama		= $data_siswa->agama;
	$wn			= $data_siswa->warga_negara;
	$anak_ke	= $data_siswa->anak_ke;
	$sdr_kandung = $data_siswa->sdr_kandung;
	$sdr_tiri	= $data_siswa->sdr_tiri;
	$sdr_angkat	= $data_siswa->sdr_angkat;
	$stat_anak	= $data_siswa->stat_anak;
	$bahasa		= $data_siswa->bahasa;
	$stat_aktif	= $data_siswa->stat_aktif;


	$alamat		= $tmp_tinggal->alamat;
	$no_telp	= $tmp_tinggal->no_tlp;
	$tggl_dgn	= $tmp_tinggal->ket_tinggal;
	$alamat_kos	= $tmp_tinggal->kos_di;
	$jarak		= $tmp_tinggal->jarak;
	$sarana		= $tmp_tinggal->transport;

	$gol_darah	= $kesehatan->gol_darah;
	$penyakit	= $kesehatan->penyakit;
	$kelainan	= $kesehatan->kelainan;
	$tgg_bdn	= $kesehatan->tgg_bdn;
	$brt_bdn	= $kesehatan->brt_bdn;

	$asal_sklh	= $pend_sebelum->lulus_dari;
	$tgl_ijazah	= $pend_sebelum->tgl_ijazah;
	$no_ijazah	= $pend_sebelum->no_ijazah;
	$tgl_stl	= $pend_sebelum->tgl_stl;
	$no_stl		= $pend_sebelum->no_stl;
	$no_ujian	= $pend_sebelum->no_un_asal;
	$lama_bljr	= $pend_sebelum->lama_bljr;
	$stat_sasal	= $pend_sebelum->status_sasal;
	$pindah_dari = $pend_sebelum->pndh_dari;
	$alasan_pindah	= $pend_sebelum->alasan;
	$msk_kelas	= $pend_sebelum->msk_kelas;
	$msk_tgl	= $pend_sebelum->msk_tgl;
	$bid_studi	= $pend_sebelum->bid_studi;
	$prodi		= $pend_sebelum->prodi;
	$kompetensi	= $pend_sebelum->kompetensi;

	$ay_nama	= $ortu_ayah->nama;
	$ay_tmp_lahir	= $ortu_ayah->tmp_lahir;
	$ay_tgl_lahir	= $ortu_ayah->tgl_lahir;
	$ay_agama	= $ortu_ayah->agama;
	$ay_wn		= $ortu_ayah->kwarga;
	$ay_pend	= $ortu_ayah->pddk;
	$ay_pkj		= $ortu_ayah->pkj;
	$ay_phasilan	= $ortu_ayah->phasilan;
	$ay_stat	= $ortu_ayah->stat;
	$ay_alamat	= $ortu_ayah->alamat_telp;

	$ib_nama	= $ortu_ibu->nama;
	$ib_tmp_lahir	= $ortu_ibu->tmp_lahir;
	$ib_tgl_lahir	= $ortu_ibu->tgl_lahir;
	$ib_agama	= $ortu_ibu->agama;
	$ib_wn		= $ortu_ibu->kwarga;
	$ib_pend	= $ortu_ibu->pddk;
	$ib_pkj		= $ortu_ibu->pkj;
	$ib_phasilan	= $ortu_ibu->phasilan;
	$ib_stat	= $ortu_ibu->stat;
	$ib_alamat	= $ortu_ibu->alamat_telp;

	$wa_nama	= $ortu_wali->nama;
	$wa_tmp_lahir	= $ortu_wali->tmp_lahir;
	$wa_tgl_lahir	= $ortu_wali->tgl_lahir;
	$wa_agama	= $ortu_wali->agama;
	$wa_wn		= $ortu_wali->kwarga;
	$wa_pend	= $ortu_wali->pddk;
	$wa_pkj		= $ortu_wali->pkj;
	$wa_phasilan	= $ortu_wali->phasilan;
	$wa_stat	= $ortu_wali->stat;
	$wa_alamat	= $ortu_wali->alamat_telp;

	$seni		= $gemar->seni;
	$olahraga	= $gemar->olahraga;
	$organisasi	= $gemar->organisasi;
	$lain		= $gemar->lain;

	$bs1		= $kembang_siswa->bs_1;
	$bs2		= $kembang_siswa->bs_2;
	$bs3		= $kembang_siswa->bs_3;
	$tgl_pindah	= $kembang_siswa->tgl_tggl_sek;
	$alasan_pindah_keluar	= $kembang_siswa->alasan;
	$tgl_lulus	= $kembang_siswa->tamat_tgl;
	$lls_tgl_ijazah	= $kembang_siswa->ijazah_tgl;
	$lls_no_ijazah	= $kembang_siswa->ijazah_no;
	$lls_tgl_stl	= $kembang_siswa->skhu_tgl;
	$lls_no_stl		= $kembang_siswa->skhu_no;

	$klh_tmp		= $setelah->klh_tmp;
	$klh_jrs		= $setelah->klh_jrs;
	$klh_kota		= $setelah->klh_kota;
	$krj_tgl_mulai	= $setelah->krj_tgl_mulai;
	$krj_namapt		= $setelah->krj_namapt;
	$krj_lembaga	= $setelah->krj_lembaga;
	$krj_mandiri	= $setelah->krj_mandiri;
	$krj_lainnya	= $setelah->krj_lainnya;
	$krj_hasil		= $setelah->krj_hasil;
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
								<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Data</a>
								</li>
								<li class="breadcrumb-item active">Data Siswa</li>
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
											<h2><strong>Formulir Buku</strong> Induk Siswa</h2>
										</div>
										<div class="body">

											<?php echo $info ?>
											<form action="<?php echo base_URL() ?>index.php/adm/buku_induk/<?php echo $act_ ?>/<?php echo $id ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="f_buku_induk" name="f_buku_induk" onsubmit="return buku_induk_valid()">
												<ul class="nav nav-tabs p-0 mb-3">
													<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#data_diri_siswa">Data Siswa</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#alamat_siswa">Alamat</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kesehatan_siswa">Kesehatan</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pendidikan_siswa">Pendidikan</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ayah_siswa">Ayah</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ibu_siswa">Ibu</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#wali_siswa">Wali</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hobi_siswa">Hobi</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#perkembangan_siswa">Perkembangan</a></li>
													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#selesai_siswa">Selesai</a></li>
												</ul>

												<div class="tab-content">
													<div role="tabpanel" class="tab-pane in active" id="data_diri_siswa">
														<div class="form d-flex justify-content-between">
															<div class="images border-danger">
																<input type="file" name="foto" id="dropify-event" data-default-file="<?php echo $foto ?>">
															</div>
															<div class="col-sm">
																<div class="table-responsive">
																	<table id="maintable" class="table table-hover c_table theme-color">
																		<tbody>
																			<tr>
																				<td width="10%">ID</td>
																				<td>
																					<input class="form-control col-lg" type="text" name="id" value="<?php echo $id ?>" readonly>
																				</td>
																			</tr>
																			<tr>
																				<td>NIS</td>
																				<td>
																					<input type="text" class="form-control" name="no_induk" value="<?php echo $no_induk ?>" onkeypress="return onlyNumbers();" class="required">
																				</td>
																			</tr>
																			<tr>
																				<td>NISN</td>
																				<td>
																					<input type="text" class="form-control " name="nisn" value="<?php echo $nisn ?>" onkeypress="return onlyNumbers();" class="required">
																				</td>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>

														<div class="table-responsive">
															<table id="maintable" class="table table-hover c_table theme-color col-sm">
																<tr>
																	<td>Nama Lengkap</td>
																	<td><input class="form-control" type="text" name="nm_lkp" value="<?php echo $nm_lkp ?>" class="required"></td>
																</tr>
																<tr>
																	<td>Nama Panggilan</td>
																	<td><input class="form-control" type="text" name="nm_pggl" value="<?php echo $nm_pggl ?>"></td>
																</tr>

																<tr>
																	<td>Jenis Kelamin</td>
																	<td>
																		<?php if ($jk == "L") {
																			$s_L = "checked";
																		} else if ($jk == "P") {
																			$s_P = "checked";
																		} else {
																			$s_L = "";
																			$s_P = "";
																		} ?>
																		<div class="radio custom-control-inline">
																			<input type="radio" name="jk" value="L" id="l" <?php echo $s_L ?> class="custom-control-input">
																			<label class="custom-control-label" for="l">Laki-laki</label>
																		</div>
																		<div class="radio custom-control-inline">
																			<input type="radio" name="jk" value="P" id="p" <?php echo $s_P ?> class="custom-control-input">
																			<label class="custom-control-label" for="p">Perempuan</label>
																		</div>

																	</td>
																</tr>
																<tr>
																	<td>Tempat Lahir</td>
																	<td><input class="form-control" type="text" name="tmp_lahir" value="<?php echo $tmp_lahir ?>"></td>
																</tr>
																<tr>
																	<td>Tanggal Lahir</td>
																	<td>
																		<div class="input-group">
																			<div class="input-group-prepend">
																				<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																			</div>
																			<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir ?>">

																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Umur</td>
																	<td><input type="number" class="form-control" name="umur" value="<?php echo $umur ?>"></td>
																</tr>
																<tr>
																	<td>Agama</td>
																	<td>
																		<select class="form-control" name="agama">
																			<option value="">Pilih Agama</option>
																			<?php
																			$val_s	= array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
																			foreach ($val_s as $v) {
																				if ($v == $agama) {
																					echo "<option value='" . $v . "' selected>" . $v . "</option>";
																				} else {
																					echo "<option value='" . $v . "'>" . $v . "</option>";
																				}
																			}
																			?>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>Kewarganegaraan</td>
																	<td>
																		<?php if ($wn == "WNI") {
																			$s_NI = "checked";
																		} else if ($wn == "WNA") {
																			$s_NA = "checked";
																		} else {
																			$s_NI = "";
																			$s_NA = "";
																		} ?>
																		<div class="radio custom-control-inline">
																			<input type="radio" id="wni" name="wn" value="WNI" class="custom-control-input" <?php echo $s_NI ?>>
																			<label class="custom-control-label" for="wni">W N I</label>
																		</div>
																		<div class="radio custom-control-inline">
																			<input type="radio" name="wn" value="WNA" id="wna" class="custom-control-input" <?php echo $s_NA ?>>
																			<label class="custom-control-label" for="wna">W N A</label>
																		</div>
																	</td>
																</tr>

																<tr>
																	<td>Anak Ke</td>
																	<td><input class="form-control" type="number" name="anak_ke" value="<?php echo $anak_ke ?>" onkeypress="return onlyNumbers();"></td>
																</tr>
																<tr>
																	<td>Jumlah Saudara</td>
																	<td>
																		<div class="form-inline">
																			<label class="form-label">Kandung&nbsp;&nbsp;&nbsp;</label>
																			<input class="form-control col-2" type="number" name="sdr_kandung" value="<?php echo $sdr_kandung ?>" onkeypress="return onlyNumbers();">
																			<label class="form-label">&nbsp;&nbsp;&nbsp;Tiri&nbsp;&nbsp;&nbsp;</label>
																			<input class="form-control col-2" type="number" name="sdr_tiri" value="<?php echo $sdr_tiri ?>" onkeypress="return onlyNumbers();">
																			<label>&nbsp;&nbsp;&nbsp;Angkat&nbsp;&nbsp;&nbsp;</label>
																			<input class="form-control col-2" type="number" name="sdr_angkat" value="<?php echo $sdr_angkat ?>" onkeypress="return onlyNumbers();">
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Status Anak</td>
																	<td>

																		<?php if ($stat_anak == "AK") {
																			$s_AK = "checked";
																		} else if ($stat_anak == "AT") {
																			$s_AT = "checked";
																		} else if ($stat_anak == "AT") {
																			$s_AT = "checked";
																		} else {
																			$s_AK = "";
																			$s_AT = "";
																			$s_AA = "";
																		} ?>
																		<div class="radio custom-control-inline">
																			<input type="radio" name="stat_anak" value="AK" id="ak" class="custom-control-input" <?php echo $s_AK ?>>
																			<label class="custom-control-label" for="ak">Anak Kandung</label>
																		</div>
																		<div class="radio custom-control-inline">
																			<input type="radio" name="stat_anak" value="AT" id="at" class="custom-control-input" <?php echo $s_AT ?>>
																			<label class="custom-control-label" for="at">Anak Tiri</label>
																		</div>
																		<div class="radio custom-control-inline">
																			<input type="radio" name="stat_anak" value="AA" id="aa" class="custom-control-input" <?php echo $s_AA ?>>
																			<label class="custom-control-label" for="aa">Anak Angkat</label>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Bahasa Sehari-hari&nbsp;&nbsp;&nbsp;&nbsp;</td>
																	<td><input class="form-control" type="text" name="bahasa" value="<?php echo $bahasa ?>"></td>
																</tr>
																<tr>
																	<td>Status Aktif</td>
																	<td>
																		<select class="form-control col-md" name="stat_aktif">
																			<option value="">Pilih Status</option>
																			<?php
																			$val_stat_ak	= array("Aktif", "Keluar", "Pindah", "Lulus");
																			foreach ($val_stat_ak as $vsa) {
																				if ($vsa == $stat_aktif) {
																					echo "<option value='" . $vsa . "' selected>" . $vsa . "</option>";
																				} else {
																					echo "<option value='" . $vsa . "'>" . $vsa . "</option>";
																				}
																			}
																			?>
																		</select>
																	</td>
																</tr>
															</table>
														</div>
													</div>


													<div role="tabpanel" class="tab-pane" id="alamat_siswa">
														<div class="table-responsive">
															<table id="maintable" class="table table-hover c_table theme-color">
																<tr>
																	<td width="20%">Alamat</td>
																	<td><input class="form-control" type=" text" name="alamat" value="<?php echo $alamat ?>"></td>
																</tr>
																<tr>
																	<td>No. Telp</td>
																	<td><input class="form-control" type="text" name="no_telp" value="<?php echo $no_telp ?>" onkeypress="return onlyNumbers();"></td>
																</tr>
																<tr>
																	<td>Tinggal Dengan</td>
																	<td><input class="form-control" type="text" name="tggl_dgn" value="<?php echo $tggl_dgn ?>"></td>
																</tr>
																<tr>
																	<td>Jika Kos, alamt di</td>
																	<td><input class="form-control" type="text" name="alamat_kos" value="<?php echo $alamat_kos ?>"></td>
																</tr>
																<tr>
																	<td>Jarak ke Sekolah</td>
																	<td>
																		<div class="input-group mb">
																			<input class="form-control col-4" type="number" name="jarak" value="<?php echo $jarak ?>" onkeypress="return onlyNumbers();">
																			<div class="input-group-append">
																				<span class="input-group-text">Km</span>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>Sarana Transportasi</td>
																	<td><input class="form-control" type="text" name="sarana" value="<?php echo $sarana ?>"></td>
																</tr>

															</table>
														</div>
													</div>

													<div role="tabpanel" class="tab-pane" id="kesehatan_siswa">
														<div class="col-sm">
															<div class="table-responsive">
																<table id="maintable" class="table table-hover c_table theme-color">
																	<tbody>
																		<tr>
																			<td width="20%">Golongan Darah</td>
																			<td><input type="text" class="form-control" name="gol_darah" value="<?php echo $gol_darah ?>"></td>
																		</tr>
																		<tr>
																			<td>Penyakit pernah diderita</td>
																			<td><input type="text" class="form-control" name="penyakit" value="<?php echo $penyakit ?>"></td>
																		</tr>
																		<tr>
																			<td>Kelainan</td>
																			<td><input type="text" class="form-control" name="kelainan" value="<?php echo $kelainan ?>"></td>
																		</tr>
																		<tr>
																			<td>Tinggi Badan</td>
																			<td>
																				<div class="input-group mb">
																					<input type="text" class="form-control col-4" name="tgg_bdn" value="<?php echo $tgg_bdn ?>" onkeypress="return onlyNumbers();">
																					<div class="input-group-append">
																						<span class="input-group-text">cm</span>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Berat Badan</td>
																			<td>
																				<div class="input-group mb">
																					<input type="text" class="form-control col-4" name="brt_bdn" value="<?php echo $brt_bdn ?>" onkeypress="return onlyNumbers();">
																					<div class="input-group-append">
																						<span class="input-group-text">kg</span>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>

													<div role="tabpanel" class="tab-pane" id="pendidikan_siswa">
														<div class="col-sm">
															<div class="table-responsive">
																<table id="maintable" class="table table-hover c_table theme-color">
																	<tbody>
																		<tr>
																			<td width="20%">Sekolah asal</td>
																			<td><input type="text" class="form-control" name="asal_sklh" value="<?php echo $asal_sklh ?>"></td>
																		</tr>
																		<tr>
																			<td>Nomor Ijazah</td>
																			<td><input type="text" class="form-control" name="no_ijazah" value="<?php echo $no_ijazah ?>"></td>
																		</tr>
																		<tr>
																			<td>Tgl. Ijazah</td>
																			<td>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																					</div>
																					<input type="date" class="form-control" name="tgl_ijazah" id="tgl_ijazah" value="<?php echo $tgl_ijazah ?>">
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Nomor SKHU/STL</td>
																			<td><input type="text" class="form-control" name="no_stl" value="<?php echo $no_stl ?>"></td>
																		</tr>
																		<tr>
																			<td>Tgl. SKHU/STL</td>
																			<td>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																					</div>
																					<input type="date" class="form-control" name="tgl_stl" id="tgl_stl" value="<?php echo $tgl_stl ?>">
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>No. Ujian Sebelumnya</td>
																			<td><input type="text" class="form-control" name="no_ujian" value="<?php echo $no_ujian ?>"></td>
																		</tr>
																		<tr>
																			<td>Lama belajar</td>
																			<td>
																				<div class="input-group mb">
																					<input type="text" class="form-control col-4" name="lama_bljr" value="<?php echo $lama_bljr ?>" onkeypress="return onlyNumbers();">
																					<div class="input-group-append">
																						<span class="input-group-text">Tahun</span>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Status Sekolah Asal</td>
																			<td>

																				<?php if ($stat_sasal == "N") {
																					$s_NEG = "checked";
																				} else if ($stat_sasal == "S") {
																					$s_SW == "checked";
																				} else {
																					$s_NEG = "";
																					$s_SW = "";
																				} ?>
																				<div class="custom-control custom-radio custom-control-inline">
																					<input type="radio" name="stat_sasal" value="N" id="sn" class="custom-control-input" <?php echo $s_NEG ?>>
																					<label class="custom-control-label" for="sn">Negeri</label>
																				</div>
																				<div class="custom-control custom-radio custom-control-inline">
																					<input type="radio" name="stat_sasal" value="S" id="ss" class="custom-control-input" <?php echo $s_SW ?>>
																					<label class="custom-control-label" for="ss">Swasta</label>
																				</div>

																			</td>
																		</tr>
																		</td>
																		</tr>
																		<tr>
																			<td>Pindahan dari</td>
																			<td><input type="text" class="form-control" name="pindah_dari" value="<?php echo $pindah_dari ?>"></td>
																		</tr>
																		<tr>
																			<td>Alasan pindah</td>
																			<td><input type="text" class="form-control" name="alasan_pindah" value="<?php echo $alasan_pindah ?>"></td>
																		</tr>
																		<tr>
																			<td>Masuk di Kelas</td>
																			<td>
																				<div class="form-inline">
																					<select class="form-control col-sm-4" name="msk_kelas">
																						<option value="">-Pilih Kelas-</option>
																						<?php
																						$a_kelas	= $this->db->query("SELECT * FROM tl_kelas ORDER BY id ASC")->result();
																						foreach ($a_kelas as $kelas) {
																							if ($msk_kelas == $kelas->nama) {
																								echo "<option value='" . $kelas->nama . "' selected>" . $kelas->nama . "</option>";
																							} else {
																								echo "<option value='" . $kelas->nama . "'>" . $kelas->nama . "</option>";
																							}
																						}
																						?>
																					</select>
																					<label>&nbsp;&nbsp;&nbspPada tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
																					<div class="input-group">
																						<div class="input-group-prepend">
																							<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																						</div class="col-10">
																						<input type="date" class="form-control" name="msk_tgl" id="msk_tgl" value="<?php echo $msk_tgl ?>">
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Bidang Studi</td>
																			<td><input type="text" class="form-control" name="bid_studi" value="<?php echo $bid_studi ?>"></td>
																		</tr>
																		<tr>
																			<td>Program Studi</td>
																			<td><input type="text" class="form-control" name="prodi" value="<?php echo $prodi ?>"></td>
																		</tr>
																		<tr>
																			<td>Kompetensi</td>
																			<td><input type="text" class="form-control" name="kompetensi" value="<?php echo $kompetensi ?>"></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>

													<div role="tabpanel" class="tab-pane" id="ayah_siswa">
														<div class="col-sm">
															<div class="table-responsive">
																<table id="maintable" class="table table-hover c_table theme-color">
																	<tbody>
																		<tr>
																			<td width="20%">Nama Ayah</td>
																			<td><input class="form-control" type="text" name="ay_nama" value="<?php echo $ay_nama ?>"></td>
																		</tr>
																		<tr>
																			<td>Tempat Lahir</td>
																			<td><input class="form-control" type="text" name="ay_tmp_lahir" value="<?php echo $ay_tmp_lahir ?>">
																		</tr>
																		<tr>
																			<td>Tanggal Lahir</td>
																			<td>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																					</div>
																					<input class="form-control" type="date" name="ay_tgl_lahir" id="ay_tgl_lahir" value="<?php echo $ay_tgl_lahir ?>">
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Agama</td>
																			<td>
																				<select class="form-control show-tick" name="ay_agama">
																					<?php
																					$val_ay_agama	= array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
																					foreach ($val_ay_agama as $vaa) {
																						if ($vaa == $ay_agama) {
																							echo "<option value='" . $vaa . "' selected>" . $vaa . "</option>";
																						} else {
																							echo "<option value='" . $vaa . "'>" . $vaa . "</option>";
																						}
																					}
																					?></select>
																			</td>
																		</tr>
																		<tr>
																			<td>Kewarganegaraan</td>
																			<td>
																				<?php if ($ay_wn == "WNI") {
																					$a_NI = "checked";
																				} else if ($ib_wn == "WNA") {
																					$a_NA = "checked";
																				} else {
																					$a_NI = "";
																					$a_NA = "";
																				} ?>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="ay_wn" value="WNI" id="wni_a" <?php echo $a_NI ?> class="custom-control-input">
																					<label class="custom-control-label" for="wni_a">W N I</label>
																				</div>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="ay_wn" value="WNA" id="wna_a" <?php echo $a_NA ?> class="custom-control-input">
																					<label class="custom-control-label" for="wna_a">W N A</label>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Pendidikan Terakhir</td>
																			<td>
																				<select class="form-control show-tick" name="ay_pend">
																					<?php
																					$val_ay_pend	= array("Tidak Sekolah", "SD", "SMP", "SMA", "Diploma", "Sarjana", "S-2");
																					foreach ($val_ay_pend as $pdka) {
																						if ($pdka == $ay_pend) {
																							echo "<option value='" . $pdka . "' selected>" . $pdka . "</option>";
																						} else {
																							echo "<option value='" . $pdka . "'>" . $pdka . "</option>";
																						}
																					}
																					?></select>
																			</td>
																		</tr>
																		<tr>
																			<td>Pekerjaan</td>
																			<td><input class="form-control show-tick" type="text" name="ay_pkj" value="<?php echo $ay_pkj ?>"></td>
																		</tr>
																		<tr>
																			<td>Penghasilan</td>
																			<td><input class="form-control show-tick" type="text" name="ay_phasilan" value="<?php echo $ay_phasilan ?>" onkeypress="return onlyNumbers();"></td>
																		</tr>
																		<tr>
																			<td>Status</td>
																			<td>

																				<?php if ($ay_stat == "Masih Hidup") {
																					$s_ASH = "checked";
																				} else if ($ay_stat == "Sudah Meninggal") {
																					$s_ASM == "checked";
																				} else {
																					$s_ASH = "";
																					$s_ASM = "";
																				} ?>

																				<input type="radio" name="ay_stat" value="Masih Hidup" id="mh" <?php echo $s_ASH ?>><label for="mh">Masih Hidup</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" name="ay_stat" value="Sudah Meninggal" id="sm" <?php echo $s_ASM ?>><label for="sm">Sudah Meninggal</label>
																			</td>
																		</tr>
																		<tr>
																			<td>Alamat, Nomor telepon</td>
																			<td><input type="text" name="ay_alamat" value="<?php echo $ay_alamat ?>"></td>
																		</tr>
																</table>
															</div>
														</div>
													</div>

													<div role="tabpanel" class="tab-pane" id="ibu_siswa">
														<div class="col-sm">
															<div class="table-responsive">
																<table id="maintable" class="table table-hover c_table theme-color">
																	<tbody>
																		<tr>
																			<td width="20%">Nama Ibu</td>
																			<td><input class="form-control" type="text" name="ib_nama" value="<?php echo $ib_nama ?>"> </td>
																		</tr>
																		<tr>
																			<td>Tempat Lahir</td>
																			<td><input class="form-control" type="text" name="ib_tmp_lahir" value="<?php echo $ib_tmp_lahir ?>"></td>
																		</tr>
																		<tr>
																			<td>Tanggal Lahir</td>
																			<td>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																					</div>
																					<input class="form-control" type="text" name="ib_tgl_lahir" id="ib_tgl_lahir" value="<?php echo $ib_tgl_lahir ?>">
																			</td>
																		</tr>
																		<tr>
																			<td>Agama</td>
																			<td>
																				<select class="form-control" name="ib_agama">
																					<?php
																					$val_ib_agama	= array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
																					foreach ($val_ib_agama as $vaa) {
																						if ($vaa == $ib_agama) {
																							echo "<option value='" . $vaa . "' selected>" . $vaa . "</option>";
																						} else {
																							echo "<option value='" . $vaa . "'>" . $vaa . "</option>";
																						}
																					}
																					?></select>
																			</td>
																		</tr>
																		<tr>
																			<td>Kewarganegaraan</td>
																			<td>
																				<?php if ($ib_wn == "WNI") {
																					$i_NI = "checked";
																				} else if ($ib_wn == "WNA") {
																					$i_NA = "checked";
																				} else {
																					$i_NI = "";
																					$i_NA = "";
																				} ?>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="ib_wn" value="WNI" id="wni_i" <?php echo $i_NI ?> class="custom-control-input">
																					<label class="custom-control-label" for="wni_i">W N I</label>
																				</div>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="ib_wn" value="WNA" id="wna_i" <?php echo $i_NA ?> class="custom-control-input">
																					<label class="custom-control-label" for="wna_i">W N A</label>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Pendidikan Terakhir</td>
																			<td>
																				<select class="form-control" name="ib_pend">
																					<?php
																					$val_ib_pend	= array("Tidak Sekolah", "SD", "SMP", "SMA", "Diploma", "Sarjana", "S-2");
																					foreach ($val_ib_pend as $pdka) {
																						if ($pdka == $ib_pend) {
																							echo "<option value='" . $pdka . "' selected>" . $pdka . "</option>";
																						} else {
																							echo "<option value='" . $pdka . "'>" . $pdka . "</option>";
																						}
																					}
																					?></select>
																			</td>
																		</tr>
																		<tr>
																			<td>Pekerjaan</td>
																			<td><input class="form-control" type="text" name="ib_pkj" value="<?php echo $ib_pkj ?>"></td>
																		</tr>
																		<tr>
																			<td>Penghasilan</td>
																			<td><input class="form-control" type="text" name="ib_phasilan" value="<?php echo $ib_phasilan ?>" onkeypress="return onlyNumbers();"></td>
																		</tr>
																		<tr>
																			<td>Status</td>
																			<td>

																				<?php if ($ib_stat == "Masih Hidup") {
																					$s_ASH = "checked";
																				} else if ($ib_stat == "Sudah Meninggal") {
																					$s_ASM == "checked";
																				} else {
																					$s_ASH = "";
																					$s_ASM = "";
																				} ?>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="ib_stat" value="Masih Hidup" id="mhi" <?php echo $s_ASH ?> class="custom-control-input">
																					<label class="custom-control-label" for="mhi">Masih Hidup</label>
																				</div>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="ib_stat" value="Sudah Meninggal" id="smi" <?php echo $s_ASM ?> class="custom-control-input">
																					<label class="custom-control-label" for="smi">Sudah Meninggal</label>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Alamat, Nomor telepon</td>
																			<td><input class="form-control" type="text" name="ib_alamat" value="<?php echo $ib_alamat ?>"></td>
																		</tr>
																</table>
															</div>
														</div>
													</div>

													<!-- Wali Siswa -->
													<div role="tabpanel" class="tab-pane" id="wali_siswa">
														<div class="col-sm">
															<div class="table-responsive">
																<table id="maintable" class="table table-hover c_table theme-color">
																	<tbody>
																		<tr>
																			<td width="20%">Nama Wali</td>
																			<td><input class="form-control" type="text" name="wa_nama" value="<?php echo $wa_nama ?>"></td>
																		</tr>
																		<tr>
																			<td>Tempat Lahir</td>
																			<td><input class="form-control" type="text" name="wa_tmp_lahir" value="<?php echo $wa_tmp_lahir ?>">
																		</tr>
																		<tr>
																			<td>Tanggal Lahir</td>
																			<td>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																					</div>
																					<input class="form-control" type="text" name="wa_tgl_lahir" id="wa_tgl_lahir" value="<?php echo $wa_tgl_lahir ?>">
																			</td>
																		</tr>
																		<tr>
																			<td>Agama</td>
																			<td>
																				<select class="form-control" name="wa_agama">
																					<?php
																					$val_wa_agama	= array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
																					foreach ($val_wa_agama as $vaa) {
																						if ($vaa == $wa_agama) {
																							echo "<option value='" . $vaa . "' selected>" . $vaa . "</option>";
																						} else {
																							echo "<option value='" . $vaa . "'>" . $vaa . "</option>";
																						}
																					}
																					?></select>
																			</td>
																		</tr>
																		<tr>
																			<td>Kewarganegaraan</td>
																			<td>
																				<?php if ($wa_wn == "WNI") {
																					$w_NI = "checked";
																				} else if ($wa_wn == "WNA") {
																					$w_NA = "checked";
																				} else {
																					$w_NI = "";
																					$w_NA = "";
																				} ?>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="wa_wn" value="WNI" id="wni_w" <?php echo $w_NI ?> class="custom-control-input">
																					<label class="custom-control-label" for="wni_w">W N I</label>
																				</div>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="wa_wn" value="WNA" id="wna_w" <?php echo $w_NA ?> class="custom-control-input">
																					<label class="custom-control-label" for="wna_w">W N A</label>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Pendidikan Terakhir</td>
																			<td>
																				<select class="form-control" name="wa_pend">
																					<?php
																					$val_wa_pend	= array("Tidak Sekolah", "SD", "SMP", "SMA", "Diploma", "Sarjana", "S-2");
																					foreach ($val_wa_pend as $pdka) {
																						if ($pdka == $wa_pend) {
																							echo "<option value='" . $pdka . "' selected>" . $pdka . "</option>";
																						} else {
																							echo "<option value='" . $pdka . "'>" . $pdka . "</option>";
																						}
																					}
																					?></select>
																			</td>
																		</tr>
																		<tr>
																			<td>Pekerjaan</td>
																			<td><input class="form-control" type="text" name="wa_pkj" value="<?php echo $wa_pkj ?>"></td>
																		</tr>
																		<tr>
																			<td>Penghasilan</td>
																			<td><input class="form-control" type="text" name="wa_phasilan" value="<?php echo $wa_phasilan ?>" onkeypress="return onlyNumbers();"></td>
																		</tr>
																		<tr>
																			<td>Status</td>
																			<td>
																				<?php if ($wa_stat == "Masih Hidup") {
																					$s_ASH = "checked";
																				} else if ($wa_stat == "Sudah Meninggal") {
																					$s_ASM == "checked";
																				} else {
																					$s_ASH = "";
																					$s_ASM = "";
																				} ?>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="wa_stat" value="Masih Hidup" id="mhw" <?php echo $s_ASH ?> class="custom-control-input">
																					<label class="custom-control-label" for="mhw">Masih Hidup</label>
																				</div>
																				<div class="radio custom-control-inline">
																					<input type="radio" name="wa_stat" value="Sudah Meninggal" id="smw" <?php echo $s_ASM ?> class="custom-control-input">
																					<label class="custom-control-label" for="smw">Sudah Meninggal</label>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Alamat, Nomor telepon</td>
																			<td><input class="form-control" type="text" name="wa_alamat" value="<?php echo $wa_alamat ?>"></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>

													<!-- Hobi -->
													<div role="tabpanel" class="tab-pane" id="hobi_siswa">
														<div class="col-sm">
															<div class="table-responsive">
																<table id="maintable" class="table table-hover c_table theme-color">
																	<tbody>
																		<tr>
																			<td width="20%">Kegemaran Seni</td>
																			<td><input class="form-control" type="text" name="seni" value="<?php echo $seni ?>"></td>
																		</tr>
																		<tr>
																			<td>Kegemaran Olahraga</td>
																			<td><input class="form-control" type="text" name="olahraga" value="<?php echo $olahraga ?>"></td>
																		</tr>
																		<tr>
																			<td>Kegemaran Organisasi</td>
																			<td><input class="form-control" type="text" name="organisasi" value="<?php echo $organisasi ?>"></td>
																		</tr>
																		<tr>
																			<td>Kegemaran Lainnya</td>
																			<td><input class="form-control" type="text" name="lain" value="<?php echo $lain ?>"></td>
																		</tr>
																</table>
															</div>
														</div>
													</div>

													<!-- Perekmbangan -->
													<div role="tabpanel" class="tab-pane" id="perkembangan_siswa">
														<div class="col-sm">
															<div class="table-responsive">
																<table id="maintable" class="table table-hover c_table theme-color">
																	<tbody>
																		<?php
																		$bs1_pc	= explode("-", $bs1);
																		$bs_1_th = $bs1_pc[1];
																		$bs_1_nama = $bs1_pc[0];
																		$bs2_pc	= explode("-", $bs2);
																		$bs_2_th = $bs2_pc[1];
																		$bs_2_nama = $bs2_pc[0];
																		$bs3_pc	= explode("-", $bs3);
																		$bs_3_th = $bs3_pc[1];
																		$bs_3_nama = $bs3_pc[0];
																		?>

																		<tr>
																			<td>Beasiswa 1</td>
																			<td>
																				<div class="form-inline">
																					<label class="form-label">Nama&nbsp;&nbsp;&nbsp;</label>
																					<input class="form-control" type="text" name="bs_1_nama" value="<?php echo $bs_1_nama ?>">
																					<label class="form-label">&nbsp;&nbsp;&nbsp;Tahun&nbsp;&nbsp;&nbsp;</label>
																					<input class="form-control" type="text" class="form-control" name="bs_1_th" value="<?php echo $bs_1_th ?>" onkeypress="return onlyNumbers();">
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td width="20%">Beasiswa 2</td>
																			<td>
																				<div class="form-inline">
																					<label class="form-label">Nama&nbsp;&nbsp;&nbsp;</label>
																					<input class="form-control" type="text" name="bs_2_nama" value="<?php echo $bs_2_nama ?>">
																					<label class="form-label">&nbsp;&nbsp;&nbsp;Tahun&nbsp;&nbsp;&nbsp;</label>
																					<input class="form-control" type="text" name="bs_2_th" value="<?php echo $bs_2_th ?>" onkeypress="return onlyNumbers();">
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Beasiswa 3</td>
																			<td>
																				<div class="form-inline">
																					<label class="form-label">Nama&nbsp;&nbsp;&nbsp;</label>
																					<input class="form-control" type="text" name="bs_3_nama" value="<?php echo $bs_3_nama ?>">
																					<label class="form-label">&nbsp;&nbsp;&nbsp;Tahun&nbsp;&nbsp;&nbsp;</label>
																					<input class="form-control" type="text" name="bs_3_th" value="<?php echo $bs_3_th ?>" onkeypress="return onlyNumbers();">
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Meninggalkan sekolah</td>
																		</tr>
																		<tr>
																			<td>&nbsp;&nbsp;&nbsp;Tanggal</td>
																			<td>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																					</div>
																					<input class="form-control" type="date" name="tgl_pindah" id="tgl_pindah" value="<?php echo $tgl_pindah ?>">
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>&nbsp;&nbsp;&nbsp;Alasan</td>

																			<td>
																				<input class="form-control" type="text" name="alasan_pindah_keluar" value="<?php echo $alasan_pindah_keluar ?>">

																			</td>
																		</tr>
																		<tr>
																			<td>Akhir Pendidikan</td>
																		</tr>
																		<tr>
																			<td>&nbsp;&nbsp;&nbsp;Tamat Belajar</td>
																			<td>
																				<div class="input-group">
																					<div class="input-group-prepend">
																						<span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
																					</div>
																					<input class="form-control" type="date" name="tgl_lulus" id="tgl_lulus" value="<?php echo $tgl_lulus ?>">
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>&nbsp;&nbsp;&nbsp;No. Ijazah</td>
																			<td><input class="form-control" type="text" name="lls_no_ijazah" value="<?php echo $lls_no_ijazah ?>"></td>
																			<!--<input class="form-control" type="date" name="lls_tgl_ijazah" id="lls_tgl_ijazah" value="<?php echo $lls_tgl_ijazah ?>" readonly>-->
																		</tr>
																		<tr>
																			<td>&nbsp;&nbsp;&nbsp;No. SKHU/STL</td>
																			<td><input class="form-control" type="text" name="lls_no_stl" value="<?php echo $lls_no_stl ?>"></td>
																			<!--<input class="form-control" type="date" name="lls_tgl_stl" id="lls_tgl_stl" value="<?php echo $lls_tgl_stl ?>" readonly>-->
																		</tr>
																</table>
															</div>
														</div>
													</div>

													<!-- Selesai -->
													<div role="tabpanel" class="tab-pane" id="selesai_siswa">
														<div class="col-sm">
															<div class="table-responsive">
																<table id="maintable" class="table table-hover c_table theme-color">
																	<tbody>
																		<tr>
																			<td width="20%">Kuliah di</td>
																			<td><input class="form-control" type="text" name="klh_tmp" value="<?php echo $klh_tmp ?>"></td>
																		</tr>
																		<tr>
																			<td>Kuliah jurusan</td>
																			<td><input class="form-control" type="text" name="klh_jrs" value="<?php echo $klh_jrs ?>"></td>
																		</tr>
																		<tr>
																			<td>Kuliah di kota</td>
																			<td><input class="form-control" type="text" name="klh_kota" value="<?php echo $klh_kota ?>"></td>
																		</tr>

																		<tr>
																			<td>Kerja Mulai Tgl.</td>
																			<td><input class="form-control" type="text" name="krj_tgl_mulai" id="krj_tgl_mulai" value="<?php echo $krj_tgl_mulai ?>" readonly></td>
																		</tr>
																		<tr>
																			<td>Kerja di</td>
																			<td><input class="form-control" type="text" name="krj_namapt" value="<?php echo $krj_namapt ?>"></td>
																		</tr>
																		<tr>
																			<td>Kerja di Lembaga</td>
																			<td><input class="form-control" type="text" name="krj_lembaga" value="<?php echo $krj_lembaga ?>"></td>
																		</tr>
																		<tr>
																			<td>Kerja mandiri di</td>
																			<td><input class="form-control" type="text" name="krj_mandiri" value="<?php echo $krj_mandiri ?>"></td>
																		</tr>
																		<tr>
																			<td>Kerja Lainnya di</td>
																			<td><input class="form-control" type="text" name="krj_lainnya" value="<?php echo $krj_lainnya ?>"></td>
																		</tr>
																		<tr>
																			<td>Penghasilan</td>
																			<td><input class="form-control" type="text" name="krj_hasil" value="<?php echo $krj_hasil ?>" onkeypress="return onlyNumbers();"></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
													<div class="tombol_submit  margin-right">
														<input class="btn btn-success" type="submit" name="kirim" value="Simpan">
														<a href="<?php echo base_url() ?>index.php/adm/buku_induk/" class="btn btn-secondary mb-2" role="button" aria-pressed="true">Kembali</a>
													</div>

												</div>
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


<script type="text/javascript">
	$(document).ready(function() {
		$("#f_buku_induk").validate();

		$("#klik").click(function() {
			$("#fotonya").toggle();
			return false;
		});

	});
</script>
<script>
	$("a.nav-link").on('click', function() {
		$(".tab-pane").hide();
		$($(this).attr("href")).show();
	});
</script>