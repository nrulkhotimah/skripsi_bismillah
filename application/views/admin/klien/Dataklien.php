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
                            <a href="<?php echo site_url('Admin/dataKlien')?>">Data klien</a>
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
                            <span class="title font-weight-bold">DATA KLIEN</span>
                        </div>

                    </div>

                    <!-- data klien -->
                    <div class="col-md-12">
                        <!-- kolom search -->
                        <form class="form-inline " style="margin-left:20px;">
                            <input
                                class="form-control form-control-sm mr-3 w-75 col-md-11"
                                type="text"
                                placeholder="Search"
                                aria-label="Search"
                                style="border-radius:13px;">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </form>

                        <!-- data tabel -->
                        <form>
                            <table class="table table-striped" style="margin-top:20px;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th colspan="2" clas="text-center">
                                            <span>Aksi</span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">ID</th>
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">Nomor Telepon</th>
                                        <th rowspan="2">Jenis Kelamin</th>
                                        <th rowspan="2">Tempat Tanggal Lahir</th>
                                        <th rowspan="2">Approve</th>
                                        <th scope="col">Hapus</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($user as $DataKlien):
                                 ?>

                                    <tr>
                                        <td><?php echo $DataKlien->nama ?></td>
                                        <td><?php echo $DataKlien->nomor_telepon ?></td>
                                        <td><?php echo $DataKlien->jenis_kelamin ?></td>
                                        <td><?php echo $DataKlien->tanggal_lahir ?></td>
                                        <td>icon centang</td>
                                        <td>
                                            <a href="<?php echo site_url('admin/Dataklien/Editdataklien') ?>">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a
                                                onclick="deleteConfirm('<?php echo site_url('admin/Dataklien/delete/'.$DataKlien->id) ?>')"
                                                href="#1">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php  endforeach; ?>
                                </tbody>
                            </table>
                        </form>

                        <a href="<?php echo site_url('Admin/Dataklien/tambahKlien')?>">
                            <button type="button" class="btn btn-primary" style="float:right;">Tambah klien</button>
                        </a>
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

                function test() {
                    alert("Hello! I am an alert box!");
                }
            </script>
        </body>

    </html>