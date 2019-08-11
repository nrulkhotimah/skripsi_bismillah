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
                            <span class="title font-weight-bold">PROFIL</span>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="picture col-md-12">
                                    <a href="#" class="btn profile">
                                        <img
                                            src="../../assets/img/user.png"
                                            alt="Avatar"
                                            style="height:250px;width:250px;"><br>
                                    </a>
                                </div>
                    
                                <div class="col-md-12">
                                <i class="fas fa-camera"></i>   
                                </div>
                            </div>

                            <div class="col-md-8 offset-md-1">
                                <form>
                                    <table class="col-md-12">
                                        <tr>
                                            <td>
                                                <label for="name">Nama</label>
                                            </td>
                                            <td><input id="name" class="form-control" type="text" placeholder="Nama"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <label for="name">Username</label>
                                            </td>
                                            <td><input id="name" class="form-control" type="text" placeholder="Username"></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <fieldset class="form-group">
                                                    <div class="row">
                                                        <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                                                    </td>
                                                    <td>
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
                                                    </td>
                                                </div>
                                            </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for="name">Email</label>
                                        </td>
                                        <td><input id="name" class="form-control" type="text" placeholder="Email"></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for="name">Nomor Telepon</label>
                                        </td>
                                        <td><input id="name" class="form-control" type="number" placeholder="Nomor Telepon"></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for="name">Alamat</label>
                                        </td>
                                        <td><input id="name" class="form-control" type="text" placeholder="Alamat"></td>
                                    </tr>

                                    <tr>
                                        <form class="form-inline ">
                                            <div class="form-group row ">
                                                <td>
                                                    <label for="inputPassword6" class="col-form-label">Password</label>
                                                </td>
                                                <td>
                                                    <input
                                                        type="password"
                                                        id="inputPassword6"
                                                        class="form-control"
                                                        aria-describedby="passwordHelpInline">
                                                    <small id="passwordHelpInline" class="text-muted">
                                                        Must be 8-20 characters long.
                                                    </small>
                                                </td>
                                            </div>
                                        </form>
                                    </tr>

                                    <tr>
                                        <form class="form-inline ">
                                            <div class="form-group row ">
                                                <td>
                                                    <label for="inputPassword6" class="col-form-label">Ubah Password</label>
                                                </td>
                                                <td>
                                                    <input
                                                        type="password"
                                                        id="inputPassword6"
                                                        class="form-control"
                                                        aria-describedby="passwordHelpInline">
                                                    <small id="passwordHelpInline" class="text-muted">
                                                        Must be 8-20 characters long.
                                                    </small>
                                                </td>
                                            </div>
                                        </form>
                                    </tr>

                                    <tr>
                                        <form class="form-inline ">
                                            <div class="form-group row ">
                                                <td>
                                                    <label for="inputPassword6" class="col-form-label">Ulangi Password</label>
                                                </td>
                                                <td>
                                                    <input
                                                        type="password"
                                                        id="inputPassword6"
                                                        class="form-control"
                                                        aria-describedby="passwordHelpInline">
                                                    <small id="passwordHelpInline" class="text-muted">
                                                        Must be 8-20 characters long.
                                                    </small>
                                                </td>
                                            </div>
                                        </form>
                                    </tr>

                                </table>

                                <button
                                    type="button"
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
                            </div>

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

                function test() {
                    alert("Hello! I am an alert box!");
                }
            </script>
        </body>

    </html>