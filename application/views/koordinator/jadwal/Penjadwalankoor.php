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
                        <button type="button" id="sidebarCollapse" class="btn">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div style="float:right">
                            <span class="title font-weight-bold">DATA KLIEN</span>
                        </div>
                    </div>

                    <div class="table" style="padding:10px;">
                        <table class="table table-striped" style="margin-top:20px;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Aksi</th>
                                    <th></th>
                                </tr>

                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Hari/Tanggal</th>
                                    <th scope="col">Waktu</th>
                                    <th scope="col">Kuota Penuh</th>
                                    <th scope="col">Sisa Kuota</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Senin, 08 Juni 2019</td>
                                    <td>13.00 s/d 14.30 WIB</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td>
                                    <a href="<?php echo site_url('Admin/editPenjadwalanPsi')?>">
                                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    </td>
                                    <td>
                                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Senin, 08 Juni 2019</td>
                                    <td>09.00 s/d 11.30 WIB</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>
                                        <a href="<?php echo site_url('Admin/editPenjadwalanPsi')?>">
                                            <button type="button" id="sidebarCollapse" class="btn btn-info">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>

                                    </td>
                                    <td>
                                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Senin, 08 Juni 2019</td>
                                    <td>15.00 s/d 16.30 WIB</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>
                                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="but" style="float:RIGHT">
                            <a href="<?php echo site_url('Admin/inputJadwal')?>">
                                <button type="button" class="btn btn-primary">Tambah</button>
                            </a>
                        </div>
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