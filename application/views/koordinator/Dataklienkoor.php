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

                    <!-- Search form -->
                    <form class="form-inline " style="margin-left:20px;">
                        <input
                            class="form-control form-control-sm mr-3 w-75 col-md-11"
                            type="text"
                            placeholder="Search"
                            aria-label="Search"
                            style="border-radius:13px;">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </form>

                    <div class="col-md-12">
                        <table class="table table-striped" style="margin-top:20px;">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Hasil Diagnosis</th>
                                    <th scope="col">Jadwal Konseling</th>
                                    <th scope="col">Catatan Konseling</th>
                                    <th scope="col">Keterangan Konseling</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                            data-toggle="modal"
                                            data-target="#exampleModal">
                                            Tambah
                                        </button>

                                        <!-- Modal -->
                                        <div
                                            class="modal fade"
                                            id="exampleModal"
                                            tabindex="-1"
                                            role="dialog"
                                            aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Masukkan Hasil Diagnosis</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span>Masukkan Hasil Diagnosis Klien</span>
                                                        <div>
                                                            <input
                                                                class="form-control form-control-lg"
                                                                type="text"
                                                                placeholder="Masukkan Hasil Diagnosis">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" onclick="myFunction()">Save changes</button>
                                                        <script>
                                                            function myFunction() {
                                                                alert("I am an alert box!");
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>end</td>

                                    <td>
                                        <a href="<?php echo site_url('Admin/catatanKonseling')?>">
                                            <button type="button" class="btn btn-primary">Open</button>
                                        </a>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-secondary dropdown-toggle"
                                                type="button"
                                                id="dropdownMenu2"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item" type="button">Action</button>
                                                <button class="dropdown-item" type="button">Another action</button>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button
                                            type="button"
                                            class="btn"
                                            data-toggle="modal"
                                            data-target="#exampleModal"
                                            style="color:blue;">
                                            Bipolar 1
                                        </button>

                                        <!-- Modal -->
                                        <div
                                            class="modal fade"
                                            id="exampleModal"
                                            tabindex="-1"
                                            role="dialog"
                                            aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Hasil Diagnosis</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span>Hasil Diagnosis : Bipolar 1</span><br>
                                                        <hr>
                                                        <span>Masukkan Hasil Diagnosis Terbaru</span>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td>end</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Open</button>
                                    </td>
                                    <td>
                                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Tambah</button>
                                    </td>
                                    <td>end</td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Open</button>
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