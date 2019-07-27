<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SPK Diagnosis Banding Gangguan Afektif</title>

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
                            <a href="<?php echo site_url('Admin/editProfil')?>" class="btn profile">
                                <img src="../../assets/img/user.png" alt="Avatar"><br>
                                <span>Profile</span>
                            </a>
                            <p class="text-center" style="font:12px !important;">Hello! Admin</p>
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('Admin/index')?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Admin/dataPakar')?>">Data pakar</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Dataklien_controller/index')?>">Data klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Admin/penjadwalan')?>">Pendaftaran klien</a>
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
                            <span class="title font-weight-bold">PENDAFTARAN JADWAL KLIEN</span>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <table class="table table-striped" style="margin-top:20px;">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Psikolog</th>
                                    <th scope="col">Jadwal</th>
                                    <th scope="col">Sisa Kuota</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Mark</td>
                                    <td>sdasdsa</td>
                                    <td>sdsds</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                            data-toggle="modal"
                                            data-target="#exampleModal">
                                            Pilih Jadwal
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span class="text-center">JADWAL KONSELING BERHASIL DI SIMPAN</span><br>
                                                        <span>Rabu, 02 Juni 2019</span><br>
                                                        <span>08.00 PM</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Jacob</td>
                                    <td>sdasdsa</td>
                                    <td>sdsds</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                            data-toggle="modal"
                                            data-target="#exampleModal">
                                            Pilih Jadwal
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span class="text-center">JADWAL KONSELING BERHASIL DI SIMPAN</span><br>
                                                        <span>Rabu, 02 Juni 2019</span><br>
                                                        <span>08.00 PM</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Larry</td>
                                    <td>sdasdsa</td>
                                    <td>sdsds</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button
                                            type="button"
                                            class="btn btn-primary"
                                            data-toggle="modal"
                                            data-target="#exampleModal">
                                            Pilih Jadwal
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span class="text-center">JADWAL KONSELING BERHASIL DI SIMPAN</span><br>
                                                        <span>Rabu, 02 Juni 2019</span><br>
                                                        <span>08.00 PM</span>
                                                    </div>

                                                </div>
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