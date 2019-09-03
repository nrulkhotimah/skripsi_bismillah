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
                            <p class="text-center" style="font:10px !important;">Hello! Anggota</p>
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('K_Home/index')?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Datapakar_controller/index')?>">Data klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Dataklien_controller/index')?>">Penjadwalan
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Home/penjadwalan')?>">Riwayat</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Home/penjadwalan')?>">Kriteria Keputusan</a>
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('Login_controller/logout')?>">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
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

                    <!-- kolom search -->
                    <div class="col-md-12">
                        <form
                            class="form-inline"
                            action="<?php echo site_url('Ad_Dataklien_controller/search/') ?>"
                            method="get">
                            <div class="search container">
                                <div class="row">
                                    <div style="width:90%">
                                        <input
                                            class="form-control w-100"
                                            type="text"
                                            name="keyword"
                                            placeholder="Search . . ."
                                            autocomplate="off">
                                    </div>

                                    <div style="width:2%"></div>

                                    <div style="width:8%">
                                        <input type="submit" class="btn btn-primary form-control w-100" value="search">
                                    </div>
                                </div>

                            </div>
                        </form>

                        <!-- data tabel -->
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="result">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle" rowspan="2">No</th>
                                    <th class="align-middle" rowspan="2">Nama Klien</th>
                                    <th class="align-middle" rowspan="2">JK</th>
                                    <th class="align-middle" rowspan="2">Hasil Diagnosis</th>
                                    <th colspan="2">Jadwal Konseling</th>
                                    <th class="align-middle" rowspan="2">Catatan Konseling</th>
                                    <th class="align-middle" rowspan="2">Keterangan Konseling</th>
                                </tr>

                                <tr>
                                    <th>Waktu</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">
                                        <a href="" class="btn btn-link">Toni</a>
                                    </td>
                                    <td class="align-middle">P</td>
                                    <td class="align-middle">
                                        <a href="" class="btn btn-link">Bipolar 1</a>
                                    </td>
                                    <td class="align-middle">13.00 WIB</td>
                                    <td class="align-middle">23 Januari 2019</td>
                                    <td class="align-middle">
                                        <button type="button" class="btn btn-primary">Open</button>
                                    </td>
                                    <td class="align-middle">
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button
                                                type="button"
                                                class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Selesai</a>
                                                <a class="dropdown-item" href="#">Jadwal Berikutnya</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
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