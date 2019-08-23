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
                            <a href="<?php echo site_url('Ad_Datapakar_controller/index')?>">Data pakar</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Dataklien_controller/index')?>">Data klien</a>
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
                            <span class="title font-weight-bold">EDIT KLIEN</span>
                        </div>
                    </div>

                    <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="col-md-12">
                        
                        <form
                            action="<?php echo base_url( 'index.php/Ad_Dataklien_controller/update/'.$user->id) ?>"
                           
                            method="post"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input
                                    name="nama"
                                    type="text"
                                    class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->nama ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tanggal-lahir</label>
                                <input
                                    name="tanggal_lahir"
                                    type="date"
                                    class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->tanggal_lahir ?>"
                                    >
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal_lahir') ?>
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
                                                name="jenis_kelamin"
                                                id="gridRadios1"
                                                value="pria" <?php echo ($user->jenis_kelamin=='pria' ? 'checked':'');?>
                                                >
                                            <label class="form-check-label" for="gridRadios1">
                                                Pria
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="jenis_kelamin"
                                                id="gridRadios2"
                                                value="wanita" <?php echo  ($user->jenis_kelamin=='wanita' ? 'checked':''); ?>
                                                >
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
                                    name="alamat"
                                    type="text"
                                    class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->alamat ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <?php $agama = $user->agama; ?>
                                <select
                                    type="select"
                                    class="form-control"
                                    id="exampleFormControlSelect1"
                                    name="agama"
                                    >
                                    <option <?php echo ($agama == 'islam') ? "selected": "" ?>>Islam</option>
                                    <option <?php echo ($agama == 'kristen') ? "selected": "" ?>>Kristen</option>
                                    <option <?php echo ($agama == 'hindu') ? "selected": "" ?>>Hindu</option>
                                    <option <?php echo ($agama == 'budha') ? "selected": "" ?>>Budha</option>
                                    <option <?php echo ($agama == 'konghucu') ? "selected": "" ?>>Konghucu</option>
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
                                                name="marital_status"
                                                id="gridRadios3"
                                                value="menikah" <?php echo ($user->marital_status=='menikah' ? 'checked':'');?>>
                                            <label class="form-check-label" for="gridRadios3">
                                                Menikah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="marital_status"
                                                id="gridRadios4"
                                                value="lajang" <?php echo ($user->marital_status=='lajang' ? 'checked':'');?>>
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
                                    name="pekerjaan"
                                    type="text"
                                    class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->pekerjaan ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('pekerjaan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor Telepon</label>
                                <input
                                    name="nomor_telepon"
                                    type="number"
                                    class="form-control <?php echo form_error('nomor_telepon') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo  $user->nomor_telepon?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nomor-telepon') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input
                                    name="email"
                                    type="email"
                                    class="form-control  <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->email ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input
                                    name="username"
                                    type="text"
                                    class="form-control  <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo  $user->username ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <input
                                type="submit"
                                class="btn btn-primary"
                                name="btn"
                                value="Save"
                                style="float:right;"
                                />

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