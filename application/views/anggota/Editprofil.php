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
                            <a href="<?php echo site_url('Ad_Home/edit_profil')?>" class="btn profile">
                                <img src="../../assets/img/user.png" alt="Avatar"><br>
                                <span>Profile</span>
                            </a>
                            <p class="text-center" style="font:12px !important;">Hello! Psikolog</p>
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('Ang_Home/index')?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang_Dataklien/index')?>">Data klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang_Penjadwalan/index')?>">Penjadwalan
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang_Home/riwayat')?>">Riwayat</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang_Home/kriteria')?>">Kriteria Keputusan</a>
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

                    <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="col-md-12">
                        <form
                            action="<?php echo base_url('index.php/Ad_Home/update/'.$user->id) ?>"
                            method="post"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                    id="name"
                                    name="nama"
                                    value=" <?php echo $user->nama ?>"
                                    aria-describedby="name"
                                    placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    id="username"
                                    name="username"
                                    value="<?php echo $user->username ?>"
                                    aria-describedby="username"
                                    placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    id="email"
                                    name="email"
                                    value="<?php echo $user->email ?>"
                                    aria-describedby="email"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input
                                    type="number"
                                    class="form-control <?php echo form_error('nomor_telepon') ? 'is-invalid':'' ?>"
                                    id="nomor_telepon"
                                    name="nomor_telepon"
                                    value="<?php echo $user->nomor_telepon ?>"
                                    aria-describedby="nomor_telepon"
                                    placeholder="Nomor Telepon">
                            </div>

                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                    id="alamat"
                                    name="alamat"
                                    value="<?php echo $user->alamat ?>"
                                    aria-describedby="alamat"
                                    placeholder="Alamat">
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                    id="password"
                                    name="password_lama"
                                    placeholder="Password Lama">
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                    id="password-baru"
                                    name="password_baru"
                                    placeholder="Password Baru">
                                <small id="emailHelp" class="form-text text-muted">Password minimal 6-8 karakter</small>
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                    id="password-konfirmasi"
                                    onchange="checkPassword()"
                                    name="password_konfirmasi"
                                    placeholder="Confirm Password Baru">
                                <small id="alert-password-konfirmasi" style="color:red"></small>

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

                function test() {
                    alert("Hello! I am an alert box!");
                }

                function checkPassword() {}

                $("#password-konfirmasi").keyup(function () {
                    var passwordBaru = $('#password-baru').val();
                    var passwordKonfirmasi = $('#password-konfirmasi').val();
                    if (passwordBaru !== passwordKonfirmasi) 
                        $('#alert-password-konfirmasi').html('Password tidak cocok');
                    else 
                        $('#alert-password-konfirmasi').html('');
                    }
                );
            </script>
        </body>

    </html>