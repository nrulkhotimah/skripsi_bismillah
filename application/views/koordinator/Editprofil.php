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
                            <p class="text-center" style="font:10px !important;">Hello! koordinator</p>
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('K_Home/index')?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Dataklien/index')?>">Data klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Penjadwalan/index')?>">Penjadwalan
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Home/riwayat')?>">Riwayat</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Kriteria/index')?>">Kriteria Keputusan</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Angpsi/index')?>">Anggota Psikolog</a>
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
                            <span class="title font-weight-bold">EDIT PROFIL</span>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    aria-describedby="name"
                                    placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="username"
                                    aria-describedby="username"
                                    placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    aria-describedby="email"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input
                                    type="number"
                                    class="form-control"
                                    id="nomor_telepon"
                                    aria-describedby="nomor_telepon"
                                    placeholder="Nomor Telepon">
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Password Lama">
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Password Baru">
                                <small id="emailHelp" class="form-text text-muted">Password minimal 6-8 karakter</small>
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Password">
                                <small id="emailHelp" class="form-text text-muted">Password minimal 6-8 karakter</small>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModal"
                                style="margin-right:auto; float:right;"
                                onclick="myFunction()">
                                Simpan
                            </button>
                            <script>
                                function myFunction() {
                                    alert("Perubahan berhasil di simpan");
                                }
                            </script>
                        </form>

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