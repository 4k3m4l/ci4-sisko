<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

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
                            <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                    class="zmdi zmdi-sort-amount-desc"></i></button>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                    class="zmdi zmdi-arrow-right"></i></button>
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
                                            <h2><strong>Data</strong> Siswa</h2>
                                        </div>
                                        <div id="isi">
                                            <div id="info" <?php if (empty($info)) {
																echo "style='display: none'";
															} ?>><?php echo $info ?>
                                            </div>
                                            <div class="body" id="isi">
                                                <a class="btn btn-primary"
                                                    href="<?php echo base_URL() ?>index.php/adm/guru_data/add"
                                                    role="button">Tambah Data</a>

                                                <div class="table-responsive">
                                                    <table
                                                        class="table thead-light table-bordered table-striped table-hover dataTable js-exportable">
                                                        <thead class="bg-info text-white">
                                                            <tr>
                                                                <th>NIP</th>
                                                                <th>NUPTK</th>
                                                                <th>Nama</th>
                                                                <th>JK</th>
                                                                <th>Pendidikan / Riwayat Pekerjaan
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <?php $i = 0 ?>
                                                        <?php foreach ($datgur as $dg) {
															$i++;
														?>

                                                        <tr>
                                                            <td class='tengah'><?php echo $dg->nip ?></td>
                                                            <td class='tengah'><?php echo $dg->nuptk ?></td>
                                                            <td class='tengah'><?php echo $dg->nama ?></td>
                                                            <td class='tengah'><?php echo $dg->jk ?></td>
                                                            <td class='tengah'>
                                                                <a
                                                                    href="<?php echo base_URL() ?>index.php/adm/guru_pend/add/<?php echo $dg->id ?>">Pendidikan</a>

                                                                <a
                                                                    href="<?php echo base_URL() ?>index.php/adm/guru_kepeg/add/<?php echo $dg->id ?>">Kepegawaian</a>
                                                            </td>
                                                            <td class='tengah'>
                                                                <a
                                                                    href="<?php echo base_URL() ?>index.php/adm/guru_data/edt/<?php echo $dg->id ?>">Edit</a>

                                                                <a
                                                                    href="<?php echo base_URL() ?>index.php/adm/guru_data/hps/<?php echo $dg->id ?>">Hapus</a>
                                                            </td>
                                                        </tr>

                                                        <?php
														}
														?>
                                                    </table>

                                                </div>
                                            </div>