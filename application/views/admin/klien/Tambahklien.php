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
                            <span class="title font-weight-bold">TAMBAH KLIEN</span>
                        </div>
                    </div>

                    <?php if($this->session->flashdata('success')): ?> 
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="col-md-12">

                        <form action="<?php base_url('Dataklien_controller/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    placeholder="Ika Natasya">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="input-group date form-group" data-provide="datepicker">
                                <input type="text" class="form-control">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th">Tanggal Lahir</span>
                                </div>
                            </div>

                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                    <div class="col-sm-10">
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
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    placeholder="Jl. Kaliurang km 14,5">
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Agama</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Kong hu cu</option>
                                </select>
                            </div>

                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Marital Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="gridRadios"
                                                id="gridRadios3"
                                                value="option3"
                                                checked="checked">
                                            <label class="form-check-label" for="gridRadios3">
                                                Menikah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="gridRadios"
                                                id="gridRadios4"
                                                value="option4">
                                            <label class="form-check-label" for="gridRadios4">
                                                Lajang
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    placeholder="Mahasiswa">
                                <div class="invalid-feedback">
                                    <?php echo form_error('pekerjaan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor Telepon</label>
                                <input
                                    type="number"
                                    class="form-control <?php echo form_error('nomor_telepon') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    placeholder="0853121323">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nomor-telepon') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input
                                    type="email"
                                    class="form-control  <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    placeholder="nkhotimah159@gmail.com">
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input
                                    type="text"
                                    class="form-control  <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    placeholder="Ikanataysa">
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <input
                            type="submit"
                            class="btn btn-primary btn-success"
                            name="btn"
                            value="Save"
                            onclick="myFunction()"
                            style="float:right;" Simpan />

                            <script>
                            function myFunction() {
                                alert("Perubahan telah tersimpan");
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

                function test() {
                    alert("Hello! I am an alert box!");
                }
            </script>
        </body>

    </html>