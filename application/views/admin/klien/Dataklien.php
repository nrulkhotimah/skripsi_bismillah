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
                            <span class="title font-weight-bold">DATA KLIEN</span>
                        </div>

                    </div>

                    <!-- data klien -->
                    <div class="col-md-12">
                    <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>
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
                                    <th rowspan="2">Marital status</th>
                                    <th rowspan="2">Nomor Telepon</th>
                                    <th rowspan="2">Jenis Kelamin</th>
                                    <th rowspan="2">Tempat Tanggal Lahir</th>
                                    <th rowspan="2">Approve</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                                <?php
                                       
                                    foreach($user as $DataKlien):
                                        // print_r($DataKlien);
                                        // exit();
                                    ?>
                                <tr>
                                    <td><?php echo $DataKlien->id ?></td>
                                    <td><?php echo $DataKlien->nama ?></td>
                                    <td><?php echo $DataKlien->marital_status ?></td> 
                                    <td><?php echo $DataKlien->nomor_telepon ?></td>
                                    <td><?php echo $DataKlien->jenis_kelamin ?></td>
                                    <td><?php echo $DataKlien->tanggal_lahir ?></td>
                                    <td>icon centang</td>
                                    <td>
                                        <a href="<?php echo site_url('Dataklien/edit/'.$DataKlien->id) ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    
                                    <td>
                                    
                                        <a
                                            onclick="deleteConfirm('<?php echo site_url('Dataklien_controller/delete/'.$DataKlien->id) ?>')"
                                            href="#!"
                                            class="btn tbn-small text-danger"
                                            method="delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>

                                        <script>
                                            function deleteConfirm(url) {
                                                $('#btn-delete').attr('href', url);
                                                $('#deleteModal').modal();
                                            }
                                        </script>

                                        <!-- modal Delete Confirmation-->
                                        <div
                                            class="modal fade"
                                            id="deleteModal"
                                            tabindex="-1"
                                            role="dialog"
                                            aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                                <?php  endforeach; ?>
                            </tbody>
                        </table>

                        <a href="<?php echo site_url('Dataklien_controller/add')?>">
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