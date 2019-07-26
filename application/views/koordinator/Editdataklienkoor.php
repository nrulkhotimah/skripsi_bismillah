<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sistem Pendukung Keputusan Diagnosis Banding Gangguan Afektif</title>

        <!-- Bootstrap CSS CDN -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/custom.css">

        <!-- Font Awesome JS -->
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/font/js/solid.js"></script>
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/font/js/fontawesome.js"></script>

    </head>

    <body>

        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <ul class="list-unstyled components">
                        <li>
                            <a href="<?php echo site_url('Admin/editProfilkoor')?>" class="btn profile">
                                <img src="../../assets/img/user.png" alt="Avatar"><br>
                                <span>Profile</span>
                            </a>
                            <p class="text-center" style="font:10px !important;">Hello! Koordinator</p>
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('Admin/index')?>">Home</a>
                        </li>

                        <li class="active">
                            <a
                                href="#homeSubmenu"
                                data-toggle="collapse"
                                aria-expanded="false"
                                class="dropdown-toggle">Klien</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="<?php echo site_url('Admin/dataKlienKoor')?>">Data Klien</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/riwayat')?>">Riwayat</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a
                                href="#pageSubmenu"
                                data-toggle="collapse"
                                aria-expanded="false"
                                class="dropdown-toggle">Psikolog</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="<?php echo site_url('Admin/penjadwalanPsi')?>">Input Penjadwalan</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/daftarJadwalKonseling')?>">Penjadwalan Konseling</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Admin/anggotaPsikolog')?>">Anggota</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Admin/kriteriaKeputusan')?>">Kriteria Keputusan</a>
                        </li>

                    </ul>
                </nav>

                <!-- Page Content -->
                <div id="content">
                    <div class="jumbotron">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Menu</span>
                        </button>
                        <span class="text-center font-weight-bold" style="font-size: 150% !important;">DATA KLIEN</span>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-11">
                            <form>
                                <!-- <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">ID Klien</label>
                                    <div class="col-md-10">
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="inputEmail3"
                                            placeholder="ID Klien">
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">Nama Klien</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-md-2 col-form-label">No. Telepon</label>
                                    <div class="col-md-10">
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="inputEmail3"
                                            placeholder="No. Telepon">
                                    </div>
                                </div>

                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-md-2 pt-0">Jenis Kelamin</legend>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="gridRadios"
                                                    id="gridRadios1"
                                                    value="option1"
                                                    checked="checked">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Pria
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="gridRadios"
                                                    id="gridRadios2"
                                                    value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Wanita
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- datepicker untuk tanggal lahir -->
                                    <div class="form-group row" style="margin-top:15px; margin-bottom:2px;">
                                        <label for="formGroupExampleInput2" class="col-md-2 col-form-label">Tempat Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <div class='input-group date' id='datetimepicker9'>
                                                <input type='text' class="form-control"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $(function () {
                                                $('#datetimepicker9').datetimepicker({viewMode: 'years'});
                                            });
                                        </script>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Usia</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Usia">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Alamat">
                                        </div>
                                    </div>

                                    <div class="form-grup row">
                                        <label
                                            for="formGroupExampleInput2"
                                            class="col-md-2 col-form-label"
                                            " >Agama</label>
                                        <div class="
                                            col-sm-10"="
                                            col-sm-10""="col-sm-10"
                                            "">
                                            <select class="custom-select">
                                                <option selected="selected">Agama</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen</option>
                                                <option value="3">Hindu</option>
                                                <option value="3">Budha</option>
                                                <option value="3">Kong Hu Cu</option>
                                            </select>
                                        </div>
                                    </div>

                                    <fieldset class="form-group" id="marital_status">
                                        <div class="row" style="margin-top:15px; margin-bottom:2px;">
                                            <legend class="col-form-label col-md-2 pt-0">Marital Status</legend>
                                            <div class="col-md-10">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="gridRadios1"
                                                        id="gridRadios3"
                                                        value="option1"
                                                        checked="checked">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Menikah
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input"
                                                        type="radio"
                                                        name="gridRadios1"
                                                        id="gridRadios4"
                                                        value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Lajang
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-10">
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="inputEmail3"
                                                placeholder="Username">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button onclick="myFunction()">Save</button>
                            <script>
                                function myFunction() {
                                    alert("Perubahan berhasil ditambahkan");
                                }
                            </script>

                        </div>

                    </div>
                </div>

                <!-- jQuery CDN - Slim version (=without AJAX) -->
                <script
                    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous"></script>
                <!-- Popper.JS -->
                <script
                    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                    crossorigin="anonymous"></script>
                <!-- Bootstrap JS -->
                <script
                    type='text/javascript'
                    src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

                <!-- jQuery Custom Scroller CDN | button menu -->
                <script
                    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#sidebar").mCustomScrollbar({theme: "minimal"});

                        $('#sidebarCollapse').on('click', function () {
                            $('#sidebar, #content').toggleClass('active');
                            $('.collapse.in').toggleClass('in');
                            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                        });
                    });
                </script>
            </body>

        </html>