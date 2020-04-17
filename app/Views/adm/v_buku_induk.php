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
                                            <h2><strong>Data</strong> Siswa</h2>
                                        </div>
                                        <div id="isi">
                                            <div id="info" <?php if (empty($info)) {
                                                                echo "style='display: none'";
                                                            } ?>><?php echo $info ?>
                                            </div>
                                            <div class="body" id="isi">
                                                <a type="button" class="btn btn-default waves-effect m-r-20" id="tambah_data" href="<?php echo base_URL() ?>index.php/adm/buku_induk/add">Tambah
                                                    Data</a>
                                                <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata">Tambah Data</button>-->
                                                <div class="table-responsive">
                                                    <table class="table thead-light table-bordered table-striped table-hover dataTable js-exportable">
                                                        <thead class="bg-danger text-white">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>NIS</th>
                                                                <th>NISN</th>
                                                                <th>Nama</th>
                                                                <th>JK</th>
                                                                <th>Tempat dan Tanggal Lahir</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                        <?php
                                                        $i = 0;
                                                        if (empty($buku_induk)) {
                                                            echo "<tr><td colspan='8' align='center'>-- Data tidak ditemukan --</td></tr>";
                                                        } else {

                                                            foreach ($buku_induk as $bi) {
                                                                $i++;
                                                        ?>

                                                                <tr>
                                                                    <td class='tengah'><?php echo $bi->id ?></td>
                                                                    <td class='tengah'><?php echo $bi->nis ?></td>
                                                                    <td class='tengah'><?php echo $bi->nisn ?></td>
                                                                    <td><?php echo $bi->nama ?></td>
                                                                    <td class='tengah'><?php echo $bi->jk ?></td>
                                                                    <td><?php echo $bi->tmp_lahir . ", " . tgl_indo($bi->tgl_lahir) ?>
                                                                    </td>
                                                                    <td class='tengah'><?php echo $bi->stat_aktif ?></td>
                                                                    <td class='tengah' class="icon-section">
                                                                        <div class="icon-container">
                                                                            <a href="<?php echo base_URL() ?>index.php/adm/buku_induk/edt/<?php echo $bi->id ?>"><span class="ti-pencil"></span></a>
                                                                            <a href="<?php echo base_URL() ?>index.php/depan/detil_siswa/<?php echo $bi->id ?>" target="_blank"><span class="ti-eye"></span></a>
                                                                            <a href="<?php echo base_URL() ?>index.php/adm/buku_induk/hps/<?php echo $bi->id ?>"><span class="ti-trash"></span></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                        <?php
                                                            }
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
</div>
<!--<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Form Tambah Siswa</h4>
            </div>
            <div class="modal-body">
                <div id="isi">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#datasiswa">Data Siswa</a></li>
                        <li><a href="#datasiswa" rel="country2">Alamat</a></li>
                        <li><a href="#alamat" rel="country3">Kesehatan</a></li>
                        <li><a href="#" rel="country4">Pendidikan</a></li>
                        <li><a href="#" rel="country5">Ayah</a></li>
                        <li><a href="#" rel="country6">Ibu</a></li>
                        <li><a href="#" rel="country7">Wali</a></li>
                        <li><a href="#" rel="country8">Hobi</a></li>
                        <li><a href="#" rel="country9">Perkembangan</a></li>
                        <li><a href="#" rel="country10">Selesai</a></li>
                    </ul>
                    <form action="http://localhost/sisko/index.php/adm/buku_induk/" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="f_buku_induk" name="f_buku_induk" onsubmit="return buku_induk_valid()" novalidate="novalidate">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="datasiswa">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td><input class="form-control col-7" type="text" name="id" value="9" readonly=""></td>
                                        </tr>
                                        <tr>
                                            <td>NIS/NISN</td>
                                            <td>
                                                <div class="form-inline">
                                                    <input type="text" class="form-control col-3 " name="no_induk" value="" onkeypress="return onlyNumbers();" class="required">
                                                    <input type="text" class="form-control col-4 " name="nisn" value="" onkeypress="return onlyNumbers();" class="required">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td><input class="form-control col-7" type="text" name="nm_lkp" size="30" value="" class="required"></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Panggilan</td>
                                            <td><input class="form-control col-7" type="text" name="nm_pggl" size="10" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>
                                                <input type="chekbox" class="custom-control-input" name="jk" value="L" id="l"><label for="l"> &nbsp;Laki
                                                    Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" class="custom-control-input" name="jk" value="P" id="p"><label for="p"> &nbsp;Perempuan</label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td><input class="form-control col-7" type="text" name="tmp_lahir" size="20" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control col-6" id="tgl_lahir" placeholder="Contoh: 30/07/2016">
                                                    <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>
                                                <select class="form-control" name="agama">
                                                    <option value="">Pilih Agama</option>
                                                    <?php
                                                    $val_s    = array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
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
                                                <input type="radio" name="wn" value="WNI" id="wni"><label for="wni">&nbsp;WNI</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="wn" value="WNA" id="wna"><label for="wna">&nbsp;WNA</label>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Anak Ke</td>
                                            <td><input type="text" class="form-control" name=" anak_ke" size="3" value="" onkeypress="return onlyNumbers();"></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Saudara</td>
                                            <td>
                                                <div class="form-row">
                                                    Kandung &nbsp;&nbsp;<input type="text" class="form-control col-1" name="sdr_kandung" value="" onkeypress="return onlyNumbers();">&nbsp;&nbsp;
                                                    Tiri&nbsp;&nbsp; <input type="text" class="form-control col-1" name="sdr_tiri" value="" onkeypress="return onlyNumbers();">&nbsp;&nbsp;
                                                    Angkat&nbsp;&nbsp; <input type="text" class="form-control col-1" name="sdr_angkat" value="" onkeypress="return onlyNumbers();">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Anak</td>
                                            <td>


                                                <input type="radio" name="stat_anak" value="AK" id="ak"><label for="ak">Anak
                                                    Kandung</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="stat_anak" value="AT" id="at"><label for="at">Anak Tiri</label>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bahasa Sehari-hari</td>
                                            <td><input type="text" name="bahasa" size="30" value=""></td>
                                        </tr>

                                        <tr>
                                            <td>Foto </td>
                                            <td>
                                                <input type="hidden" name="file_foto" value="">
                                                <input type="file" name="foto" id="foto"></td>
                                        </tr>


                                        <tr>
                                            <td>Status Aktif</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle bs-placeholder btn-simple" data-toggle="dropdown" role="button" title="Pilih Status"><span class="filter-option pull-left">Pilih
                                                            Status</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Pilih Status</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Aktif</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Keluar</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Pindah</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lulus</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="stat_aktif" class="" tabindex="-98">
                                                        <option value="">Pilih Status</option>
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Keluar">Keluar</option>
                                                        <option value="Pindah">Pindah</option>
                                                        <option value="Lulus">Lulus</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane in active" id="alamat">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td width="30%">Alamat</td>
                                            <td><input type="text" name="alamat" size="50" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp</td>
                                            <td><input type="text" name="no_telp" size="8" value="" onkeypress="return onlyNumbers();"></td>
                                        </tr>
                                        <tr>
                                            <td>Tinggal Dengan</td>
                                            <td><input type="text" name="tggl_dgn" size="60" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Jika Kos, alamt di</td>
                                            <td><input type="text" name="alamat_kos" size="60" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Jarak ke Sekolah</td>
                                            <td><input type="text" name="jarak" size="5" value="" onkeypress="return onlyNumbers();"> km</td>
                                        </tr>
                                        <tr>
                                            <td>Sarana Transportasi</td>
                                            <td><input type="text" name="sarana" size="30" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane in active" id="kesehatan">
                                <table class="form">
                                    <tbody>
                                    <tbody>
                                        <tr>
                                            <td width="30%">Golongan Darah</td>
                                            <td><input type="text" name="gol_darah" size="5" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Penyakit pernah diderita</td>
                                            <td><input type="text" name="penyakit" size="70" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Kelainan</td>
                                            <td><input type="text" name="kelainan" size="70" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tinggi Badan</td>
                                            <td><input type="text" name="tgg_bdn" size="10" value="" onkeypress="return onlyNumbers();"> cm</td>
                                        </tr>
                                        <tr>
                                            <td>Berat Badan</td>
                                            <td><input type="text" name="brt_bdn" size="10" value="" onkeypress="return onlyNumbers();"> kg</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane in active" id="pendidikan">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td width="30%">Sekolah asal</td>
                                            <td><input type="text" name="asal_sklh" size="80" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl. Ijazah</td>
                                            <td><input type="text" name="tgl_ijazah" size="10" id="tgl_ijazah" value="" readonly="">&nbsp;&nbsp; Nomor Ijazah <input type="text" name="no_ijazah" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl. SKHU/STL</td>
                                            <td><input type="text" name="tgl_stl" size="10" id="tgl_stl" value="" readonly="">&nbsp;&nbsp; Nomor SKHU/STL <input type="text" name="no_stl" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>No. Ujian Sebelumnya</td>
                                            <td><input type="text" name="no_ujian" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Lama belajar</td>
                                            <td><input type="text" name="lama_bljr" size="10" value="" onkeypress="return onlyNumbers();"> tahun</td>
                                        </tr>
                                        <tr>
                                            <td>Status Sekolah Asal</td>
                                            <td>



                                                <input type="radio" name="stat_sasal" value="N" id="sn"><label for="sn">Negeri</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="stat_sasal" value="S" id="ss"><label for="ss">Swasta</label>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pindahan dari</td>
                                            <td><input type="text" name="pindah_dari" size="80" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Alasan pindah</td>
                                            <td><input type="text" name="alasan_pindah" size="80" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Masuk di Kelas</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle bs-placeholder btn-simple" data-toggle="dropdown" role="button" title="-Pilih Kelas-"><span class="filter-option pull-left">-Pilih
                                                            Kelas-</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">-Pilih Kelas-</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kelas 1A</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="msk_kelas" class="" tabindex="-98">
                                                        <option value="">-Pilih Kelas-</option>
                                                        <option value="Kelas 1A">Kelas 1A</option>
                                                    </select>
                                                </div>&nbsp;&nbsp; Pada tanggal <input type="text" name="msk_tgl" id="msk_tgl" size="10" value="" readonly="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bidang Studi</td>
                                            <td><input type="text" name="bid_studi" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Program Studi</td>
                                            <td><input type="text" name="prodi" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Kompetensi</td>
                                            <td><input type="text" name="kompetensi" size="30" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane in active" id="orangtua">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td width="30%">Nama Ayah</td>
                                            <td><input type="text" name="ay_nama" size="30" value="" <="" td=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat, Tanggal Lahir</td>
                                            <td><input type="text" name="ay_tmp_lahir" size="30" value="">, <input type="text" name="ay_tgl_lahir" size="10" id="ay_tgl_lahir" value="" readonly=""></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="Islam"><span class="filter-option pull-left">Islam</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Islam</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kristen Protestan</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kristen Katolik</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Hindu</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Budha</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Konghucu</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lainnya</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="ay_agama" class="" tabindex="-98">
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kewarganegaraan</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="WNI"><span class="filter-option pull-left">WNI</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">WNI</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">WNA</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="ay_wn" class="" tabindex="-98">
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Terakhir</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="Tidak Sekolah"><span class="filter-option pull-left">Tidak
                                                            Sekolah</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Tidak Sekolah</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SD</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SMP</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SMA</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Diploma</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sarjana</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">S-2</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="ay_pend" class="" tabindex="-98">
                                                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Sarjana">Sarjana</option>
                                                        <option value="S-2">S-2</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pekerjaan</td>
                                            <td><input type="text" name="ay_pkj" size="50" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Penghasilan</td>
                                            <td><input type="text" name="ay_phasilan" size="20" value="" onkeypress="return onlyNumbers();"></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>


                                                <input type="radio" name="ay_stat" value="Masih Hidup" id="mh"><label for="mh">Masih
                                                    Hidup</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="ay_stat" value="Sudah Meninggal" id="sm"><label for="sm">Sudah Meninggal</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat, Nomor telepon</td>
                                            <td><input type="text" name="ay_alamat" size="80" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Nama Ibu</td>
                                            <td><input type="text" name="ib_nama" size="30" value="" <="" td=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat, Tanggal Lahir</td>
                                            <td><input type="text" name="ib_tmp_lahir" size="30" value="">, <input type="text" name="ib_tgl_lahir" size="10" id="ib_tgl_lahir" value="" readonly=""></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="Islam"><span class="filter-option pull-left">Islam</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Islam</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kristen Protestan</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kristen Katolik</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Hindu</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Budha</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Konghucu</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lainnya</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="ib_agama" class="" tabindex="-98">
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kewarganegaraan</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="WNI"><span class="filter-option pull-left">WNI</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">WNI</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">WNA</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="ib_wn" class="" tabindex="-98">
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Terakhir</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="Tidak Sekolah"><span class="filter-option pull-left">Tidak
                                                            Sekolah</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Tidak Sekolah</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SD</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SMP</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SMA</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Diploma</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sarjana</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">S-2</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="ib_pend" class="" tabindex="-98">
                                                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Sarjana">Sarjana</option>
                                                        <option value="S-2">S-2</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pekerjaan</td>
                                            <td><input type="text" name="ib_pkj" size="50" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Penghasilan</td>
                                            <td><input type="text" name="ib_phasilan" size="20" value="" onkeypress="return onlyNumbers();"></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>


                                                <input type="radio" name="ib_stat" value="Masih Hidup" id="mhi"><label for="mhi">Masih
                                                    Hidup</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="ib_stat" value="Sudah Meninggal" id="smi"><label for="smi">Sudah Meninggal</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat, Nomor telepon</td>
                                            <td><input type="text" name="ib_alamat" size="80" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div role="tabpanel" class="tab-pane in active" id="wali">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td width="30%">Nama Wali</td>
                                            <td><input type="text" name="wa_nama" size="30" value="" <="" td=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat, Tanggal Lahir</td>
                                            <td><input type="text" name="wa_tmp_lahir" size="30" value="">, <input type="text" name="wa_tgl_lahir" size="10" id="wa_tgl_lahir" value="" readonly=""></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="Islam"><span class="filter-option pull-left">Islam</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Islam</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kristen Protestan</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Kristen Katolik</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Hindu</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Budha</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Konghucu</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Lainnya</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="wa_agama" class="" tabindex="-98">
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kewarganegaraan</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="WNI"><span class="filter-option pull-left">WNI</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">WNI</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">WNA</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="wa_wn" class="" tabindex="-98">
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Terakhir</td>
                                            <td>
                                                <div class="btn-group bootstrap-select"><button type="button" class="btn dropdown-toggle btn-simple" data-toggle="dropdown" role="button" title="Tidak Sekolah"><span class="filter-option pull-left">Tidak
                                                            Sekolah</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                                                    <div class="dropdown-menu" role="combobox">
                                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                            <li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Tidak Sekolah</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SD</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SMP</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">SMA</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Diploma</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sarjana</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                            <li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">S-2</span><span class="glyphicon glyphicon-ok check-mark"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div><select name="wa_pend" class="" tabindex="-98">
                                                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SMP">SMP</option>
                                                        <option value="SMA">SMA</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Sarjana">Sarjana</option>
                                                        <option value="S-2">S-2</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pekerjaan</td>
                                            <td><input type="text" name="wa_pkj" size="50" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Penghasilan</td>
                                            <td><input type="text" name="wa_phasilan" size="20" value="" onkeypress="return onlyNumbers();"></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>


                                                <input type="radio" name="wa_stat" value="Masih Hidup" id="mhw"><label for="mhw">Masih
                                                    Hidup</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="wa_stat" value="Sudah Meninggal" id="smw"><label for="smw">Sudah Meninggal</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat, Nomor telepon</td>
                                            <td><input type="text" name="wa_alamat" size="80" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane in active" id="hobi">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td width="30%">Kegemaran Seni</td>
                                            <td><input type="text" name="seni" size="80" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kegemaran Olahraga</td>
                                            <td><input type="text" name="olahraga" size="80" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kegemaran Organisasi</td>
                                            <td><input type="text" name="organisasi" size="80" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kegemaran Lainnya</td>
                                            <td><input type="text" name="lain" size="80" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane in active" id="perkembangan">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td width="30%">Beasiswa 1</td>
                                            <td>Tahun <input type="text" name="bs_1_th" size="10" value="" onkeypress="return onlyNumbers();"> Nama <input type="text" name="bs_1_nama" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Beasiswa 2</td>
                                            <td>Tahun <input type="text" name="bs_2_th" size="10" value="" onkeypress="return onlyNumbers();"> Nama <input type="text" name="bs_2_nama" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Beasiswa 3</td>
                                            <td>Tahun <input type="text" name="bs_3_th" size="10" value="" onkeypress="return onlyNumbers();"> Nama <input type="text" name="bs_3_nama" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl. Meninggalkan sekolah</td>
                                            <td><input type="text" name="tgl_pindah" id="tgl_pindah" size="5" value="" readonly="">&nbsp;&nbsp; Alasan <input type="text" name="alasan_pindah_keluar" size="40" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl. Lulus</td>
                                            <td><input type="text" name="tgl_lulus" size="10" id="tgl_lulus" value="" readonly=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl. Ijazah</td>
                                            <td><input type="text" name="lls_tgl_ijazah" size="10" id="lls_tgl_ijazah" value="" readonly="">&nbsp;&nbsp; Nomor Ijazah <input type="text" name="lls_no_ijazah" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Tgl. SKHU/STL</td>
                                            <td><input type="text" name="lls_tgl_stl" size="10" id="lls_tgl_stl" value="" readonly="">&nbsp;&nbsp; Nomor SKHU/STL <input type="text" name="lls_no_stl" size="30" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div role="tabpanel" class="tab-pane in active" id="selesai">
                                <table class="form">
                                    <tbody>
                                        <tr>
                                            <td width="30%">Kuliah di</td>
                                            <td><input type="text" name="klh_tmp" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kuliah jurusan</td>
                                            <td><input type="text" name="klh_jrs" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kuliah di kota</td>
                                            <td><input type="text" name="klh_kota" size="30" value=""></td>
                                        </tr>

                                        <tr>
                                            <td width="30%">Kerja Mulai Tgl.</td>
                                            <td><input type="text" name="krj_tgl_mulai" size="15" id="krj_tgl_mulai" value="" readonly=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kerja di</td>
                                            <td><input type="text" name="krj_namapt" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kerja di Lembaga</td>
                                            <td><input type="text" name="krj_lembaga" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kerja mandiri di</td>
                                            <td><input type="text" name="krj_mandiri" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Kerja Lainnya di</td>
                                            <td><input type="text" name="krj_lainnya" size="30" value=""></td>
                                        </tr>
                                        <tr>
                                            <td width="30%">Penghasilan</td>
                                            <td><input type="text" name="krj_hasil" size="20" value="" onkeypress="return onlyNumbers();"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="tombol_submit">
                                <button type="submit" class="btn btn-primary mb-2" name="kirim" value="Simpan">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js -->
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#f_buku_induk").validate();

        $("#klik").click(function() {
            $("#fotonya").toggle();
            return false;
        });

    });


    <
    /div>