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
                                            <h2><strong>Data</strong> Siswa Per Kelas</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row justify-content-md-center">
                                                <span class="justify-content-center" id="tambah_data"
                                                    style="border:none; background: none">
                                                    Pilih Kelas :
                                                    <select name="pil_kelas"
                                                        onchange="window.location.href=this.options[this.selectedIndex].value">
                                                        <option
                                                            value="<?php echo base_URL() ?>index.php/adm/siswa_kelas">
                                                            -
                                                            SEMUA -</option>
                                                        <?php
                                                        foreach ($pil_kelas as $kls) {
                                                            if ($kls->id == $this->uri->segment('3')) {
                                                                echo "<option value='" . base_URL() . "index.php/adm/siswa_kelas/" . $kls->id . "/" . $kls->nama . "' selected>" . $kls->nama . "</option>";
                                                            } else {
                                                                echo "<option value='" . base_URL() . "index.php/adm/siswa_kelas/" . $kls->id . "/" . $kls->nama . "'>" . $kls->nama . "</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select> Jumlah Siswa : <b><?php echo $jml_siswa ?></b>
                                                </span>
                                            </div>

                                            <div class="table-responsive">
                                                <table
                                                    class="table thead-light table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead class="bg-danger text-white">
                                                        <tr>
                                                            <th>Tahun Ajaran</th>
                                                            <th>Nama</th>
                                                            <th>Agama</th>
                                                            <th>JK</th>
                                                            <th>Tingkat</th>
                                                            <th>Kelas</th>
                                                        </tr>

                                                        <?php
                                                        $i = 0;
                                                        if (empty($siswa_kelas)) {
                                                            echo "<tr><td colspan='8' align='center'>-- Tidak ada siswa dalam kelas tersebut --</td></tr>";
                                                        } else {

                                                            foreach ($siswa_kelas as $sk) {
                                                                $i++;
                                                        ?>
                                                    </thead>
                                                    <tr>
                                                        <td class='tengah'><?php echo $sk->ta ?></td>
                                                        <td class='tengah'><?php echo $sk->nama_ssw ?></td>
                                                        <td class='tengah'><?php echo $sk->agama ?></td>
                                                        <td><?php echo $sk->jk ?></td>
                                                        <td><?php echo $sk->tkt ?></td>
                                                        <td><?php echo $sk->nama ?></td>
                                                    </tr>


                                                    <?php
                                                            }
                                                        }
                                            ?>
                                                </table>
                                            </div>