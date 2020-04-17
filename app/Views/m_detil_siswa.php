<!doctype html>
<html class="no-js " lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
	<title>SD Negeri oo2 Merapun</title>
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon"> <!-- Favicon-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- JQuery DataTable Css -->


	<!-- Custom Css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css">
</head>

<body>
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
			<div class="m-t-30"><img class="zmdi-hc-spin" src="<?php echo base_url(); ?>assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
			<p>Tunggu Bosku...</p>
		</div>
	</div>
	<section class="content">
		<div class="body_scroll">
			<div class="container-fluid col-md ">
				<div class="row">
					<div class="col-lg">
						<div class="header justify-content-center">
							<h4 class="m-t-10"><strong>LEMBAR BUKU</strong> INDUK SISWA</h4>
						</div>
					</div>
					<div class="col-md">
						<nav aria-label="Page navigation example">

							<ul class="pagination justify-content-end">
								<li class="page-item"><a class="page-link" href="<?php echo $data_siswa->id - 1; ?>">Previous</a></li>

								<li class="page-item"><a class="page-link" href="<?php echo $data_siswa->id + 1; ?>">Next</a></li>
							</ul>
							<ul class="pagination justify-content-end">
								<li class="page-item"><a class="page-link" href="<?php echo base_url(); ?>index.php/depan/cetak" target="_blank">Cetak</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class=" row clearfix justify-content-center">
					<div class="col-xl">
						<div class="card mcard_2">
							<div class="img">
								<img src="<?php echo base_url(); ?>assets/images/image-gallery/3.jpg" class="img-fluid" alt="">
							</div>
							<div class="body">
								<div class="user">
									<img src="<?php echo base_url(); ?>assets/images/lg/avatar1.jpg" class="img-raised" alt="profile-image">
									<div class="details">
										<h4 class="mb-0"><?php echo $data_siswa->nama ?></h4>
										<tr>
											<td width="30%">NIS / NISN</td>
											<td>: <b><?php echo $data_siswa->nis ?></b></td> /
											<td id="kiri"><b><?php echo $data_siswa->nisn ?></b></td>
										</tr>
									</div>
								</div>

								<div class="row">
									<div class="col-lg">
										<div class="card">
											<div class="p-3 mb-2 bg-primary text-white">A. Keterangan Tentang Diri Sisiwa</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">

													<tr>
														<td id="kiri"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. &nbsp;Nama Siswa</td>
													</tr>
													<tr>
														<td id="kiri" width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Nama Lengkap</td>
														<td id="kiri">: <b><?php echo $data_siswa->nama ?></b></td>
													</tr>
													<tr>
														<td id="kiri"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Nama Panggilan</td>
														<td id="kiri">: <b><?php echo $data_siswa->nama_pgl ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. &nbsp;Jenis Kelamin</td>
														<td id="kiri">: <b><?php echo $data_siswa->jk ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. &nbsp;Tempat dan Tanggal Lahir</td>
														<td id="kiri">: <b><?php echo $data_siswa->tmp_lahir . ", " . tgl_pendek($data_siswa->tgl_lahir) ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. &nbsp;Agama</td>
														<td id="kiri">: <b><?php echo $data_siswa->agama ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. &nbsp;Kewarganegaraan</td>
														<td id="kiri">: <b><?php echo $data_siswa->warga_negara ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. &nbsp;Anak Keberapa</td>
														<td id="kiri">: <b><?php echo $data_siswa->anak_ke ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. &nbsp;Jumlah Saudara Kandung</td>
														<td id="kiri">: <b><?php echo $data_siswa->sdr_kandung ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8. &nbsp;Jumlah Saudara Tiri</td>
														<td id="kiri">: <b><?php echo $data_siswa->sdr_tiri ?></b></td>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9. &nbsp;Jumlah Saudara Angkat</td>
														<td id="kiri">: <b><?php echo $data_siswa->sdr_angkat ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10. Anak Yatim / Yatim Piatu</td>
														<td id="kiri">: <b><?php echo $data_siswa->stat_anak ?></b></td>
													</tr>
													<tr>
														<td id="kiri">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11. Bahasa Sehari-hari Dirumah</td>
														<td id="kiri">: <b><?php echo $data_siswa->bahasa ?></b></td>
													</tr>
												</table>
											</div>
										</div>
										<div class="card">
											<div class="p-3 mb-2 bg-danger text-white">B. Keterangan Tempat Tinggal</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12. Alamat</td>
														<td id=" kiri">: <b><?php echo $tmp_tinggal->alamat ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13. Nomor Telepon</td>
														<td id="kiri">: <b><?php echo $tmp_tinggal->no_tlp ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14. Tinggal Dengan</td>
														<td id="kiri">: <b><?php echo $tmp_tinggal->ket_tinggal ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika Menyewa, Alamat di</td>
														<td id="kiri">: <b><?php echo $tmp_tinggal->kos_di ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15. Jarak Tempat Tinggal Dengan Sekolah</td>
														<td id="kiri">: <b><?php echo $tmp_tinggal->jarak ?></b> Km</td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16. Sarana Transportasi</td>
														<td id="kiri">: <b><?php echo $tmp_tinggal->transport ?></b></td>
													</tr>
												</table>
											</div>
										</div>

										<div class="card">
											<div class="p-3 mb-2 bg-success text-white">C. Keterangan Kesehatan</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17. Golongan Darah</td>
														<td id="kiri">: <b><?php echo $kesehatan->gol_darah ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18. Penyakit Yang Pernah Diderita</td>
														<td id="kiri">: <b><?php echo $kesehatan->penyakit ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19. Kelainan Jasmani</td>
														<td id="kiri">: <b><?php echo $kesehatan->kelainan ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20. Tinggi Badan / Berat Badan</td>
														<td id="kiri">: <b><?php echo $kesehatan->tgg_bdn ?></b> cm / <b><?php echo $kesehatan->brt_bdn ?></b> kg</td>
													</tr>
												</table>
											</div>
										</div>

										<div class="card">
											<div class="p-3 mb-2 bg-secondary text-white">D. Keterangan Pendidikan</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21. Lulusan dari</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->lulus_dari ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22. Ijazah / Tanggal Ijazah</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->no_ijazah ?> / <?php echo tgl_indo($pend_sebelum->tgl_ijazah) ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;23. SKHU / Tanggal SKHU</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->no_stl ?> / <?php echo tgl_indo($pend_sebelum->tgl_stl) ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24. No. Ujian Sebelumnya</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->no_un_asal ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25. Lama Belajar</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->lama_bljr ?></b> Tahun</td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26. Status Sekolah Asal</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->status_sasal ?></b></td>
													</tr>
													</td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;27. Pindahan dari</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->pndh_dari ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28. Alasan pindah</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->alasan ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;29. Diterima Di Kelas</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->msk_kelas ?></b> Pada Tanggal <b><?php echo tgl_indo($pend_sebelum->msk_tgl) ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30. Bidang Studi</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->bid_studi ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31. Program Studi</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->prodi ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32. Kompetensi</td>
														<td id="kiri">: <b><?php echo $pend_sebelum->kompetensi ?></b></td>
													</tr>
												</table>
											</div>
										</div>
										<div class="card">
											<div class="p-3 mb-2 bg-warning text-white">E. Keterangan Tentang Ayah Kandung</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;33. Nama</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->nama ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;34. Tempat dan Tanggal Lahir</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->tmp_lahir . ", " . tgl_indo($ortu_ayah->tgl_lahir) ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;35. Agama</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->agama ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;36. Kewarganegaraan</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->kwarga ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;37. Pendidikan Terakhir</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->pddk ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;38. Pekerjaan</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->pkj ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;39. Penghasilan Perbulan</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->phasilan ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40. Status</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->stat ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;41. Alamat / Nomor telepon</td>
														<td id="kiri">: <b><?php echo $ortu_ayah->alamat_telp ?></b></td>
													</tr>
												</table>
											</div>
										</div>

										<div class="card">
											<div class="p-3 mb-2 bg-info text-white">F. Keterangan Tentang Ibu Kandung</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;42. Nama</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->nama ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;43. Tempat dan Tanggal Lahir</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->tmp_lahir . ", " . tgl_indo($ortu_ibu->tgl_lahir) ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;44. Agama</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->agama ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;45. Kewarganegaraan</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->kwarga ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;46. Pendidikan Terakhir</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->pddk ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;47. Pekerjaan</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->pkj ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48. Penghasilan</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->phasilan ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;49. Status</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->stat ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50. Alamat/ Nomor telepon</td>
														<td id="kiri">: <b><?php echo $ortu_ibu->alamat_telp ?></b></td>
													</tr>
												</table>
											</div>
										</div>

										<div class="card">
											<div class="p-3 mb-2 bg-success text-white">G. Keterangan Tentang Wali</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;51. Nama</td>
														<td id="kiri">: <b><?php echo $ortu_wali->nama ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;52. Tempat dan Tanggal Lahir</td>
														<td id="kiri">: <b><?php echo $ortu_wali->tmp_lahir . ", " . tgl_indo($ortu_wali->tgl_lahir) ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;53. Agama</td>
														<td id="kiri">: <b><?php echo $ortu_wali->agama ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;54. Kewarganegaraan</td>
														<td id="kiri">: <b><?php echo $ortu_wali->kwarga ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;55. Pendidikan Terakhir</td>
														<td id="kiri">: <b><?php echo $ortu_wali->pddk ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;56. Pekerjaan</td>
														<td id="kiri">: <b><?php echo $ortu_wali->pkj ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;57. Penghasilan</td>
														<td id="kiri">: <b><?php echo $ortu_wali->phasilan ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;58. Status</td>
														<td id="kiri">: <b><?php echo $ortu_wali->stat ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;59. Alamat / Nomor telepon</td>
														<td id="kiri">: <b><?php echo $ortu_wali->alamat_telp ?></b></td>
													</tr>
												</table>
											</div>
										</div>
										<div class="card">
											<div class="p-3 mb-2 bg-info text-white">H. Keterangan Tentang Kegemaran Siswa</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;60. Kegemaran Seni</td>
														<td id="kiri">: <b><?php echo $gemar->seni ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;61. Kegemaran Olahraga</td>
														<td id="kiri">: <b><?php echo $gemar->olahraga ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;62. Kegemaran Organisasi</td>
														<td id="kiri">: <b><?php echo $gemar->organisasi ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;63. Kegemaran Lainnya</td>
														<td id="kiri">: <b><?php echo $gemar->lain ?></b></td>
													</tr>
												</table>
											</div>
										</div>

										<div class="card">
											<div class="p-3 mb-2 bg-secondary text-white">I. Keterangan Tentang Beasiswa</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">

													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64. Beasiswa 1</td>
														<td id="kiri">: <b><?php echo $kembang_siswa->bs_1 ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65. Beasiswa 2</td>
														<td id="kiri">: <b><?php echo $kembang_siswa->bs_2 ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;66. Beasiswa 3</td>
														<td id="kiri">: <b><?php echo $kembang_siswa->bs_3 ?></b></td>
													</tr>
													<tr>
												</table>
											</div>
										</div>
										<div class="card">
											<div class="p-3 mb-2 bg-danger text-white">I. Keterangan Tentang Perkembangan SIswa</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;67. Tanggal Meninggalkan sekolah</td>
														<td id="kiri">: <b><?php echo tgl_indo($kembang_siswa->tgl_tggl_sek) ?> (<?php echo $kembang_siswa->alasan ?>)</b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;68. Tanggal Lulus</td>
														<td id="kiri">: <b><?php echo tgl_indo($kembang_siswa->tamat_tgl) ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;69. Nomor Ijazah / Tanggal Ijazah</td>
														<td id="kiri">: <b><?php echo $kembang_siswa->ijazah_no ?></b> / <b><?php echo tgl_indo($kembang_siswa->ijazah_tgl) ?></b></td>
													</tr>
													<tr>
														<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;70. Nomor SKHU / Tanggal SKHU</td>
														<td id="kiri">: <b><?php echo $kembang_siswa->skhu_no ?></b> / <b><?php echo tgl_indo($kembang_siswa->skhu_tgl) ?></b></td>
													</tr>
												</table>
											</div>
										</div>

										<div class="card">
											<div class="p-3 mb-2 bg-dark text-white">J. Selesai</div>
											<div class="table-responsive">
												<table id="maintable" class="table table-sm table-hover c_table theme-color mb-0">
													<tr>
														<td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;71. Melanjutkan di</td>
														<td id="kiri">: <b><?php echo $setelah->klh_tmp ?></b></td>
													</tr>
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
</body>

<!-- Jquery Core Js -->
<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
<!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>

<!-- Custom Js -->
<script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>



</html>