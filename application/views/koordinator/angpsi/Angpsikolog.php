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
                            <a href="<?php echo site_url('Koordinator/index')?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Koordinator/dataKlienKoor')?>">Data Klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Koordinator/riwayat')?>">Riwayat</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Koordinator/penjadwalanPsi')?>">Penjadwalan</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Koordinator/anggotaPsikolog')?>">Anggota Psikolog</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Koordinator/kriteriaKeputusan')?>">Kriteria Keputusan</a>
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
                            <span class="title font-weight-bold">ANGGOTA PSIKOLOG</span>
                        </div>
                    </div>

                    <form class="form-inline " style="margin-left:20px;">
                        <input
                            class="form-control form-control-sm mr-3 w-75 col-md-11"
                            type="text"
                            placeholder="Search"
                            aria-label="Search"
                            style="border-radius:13px;">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </form>

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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tina</td>
                                    <td>P</td>
                                    <td>640203283232323</td>
                                    <td>0812334343</td>
                                    <td>
                                        <a href="<?php echo site_url('Admin/editAnggotaPsi')?>">
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
                                    <td>Tina</td>
                                    <td>P</td>
                                    <td>640203283232323</td>
                                    <td>0812334343</td>
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

                                <tr>
                                    <td>2</td>
                                    <td>Tina</td>
                                    <td>P</td>
                                    <td>640203283232323</td>
                                    <td>0812334343</td>
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
                            <a href="<?php echo site_url('Admin/tambahAnggotaPsi')?>">
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