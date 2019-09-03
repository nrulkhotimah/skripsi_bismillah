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
                            <p class="text-center" style="font:10px !important;">Hello! Anggota</p>
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('K_Home/index')?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Datapakar_controller/index')?>">Data klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Dataklien_controller/index')?>">Penjadwalan
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Home/penjadwalan')?>">Riwayat</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ad_Home/penjadwalan')?>">Kriteria Keputusan</a>
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
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn">
                            <i class="fas fa-bars"></i>
                        </button>

                        <!-- <div style="float:right"> <span class="title font-weight-bold">EDIT
                        KLIEN</span> </div> -->
                    </div>

                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input
                                    name="nama"
                                    type="text"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    value="">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tanggal-lahir</label>
                                <input
                                    name="tanggal_lahir"
                                    type="date"
                                    class="form-control "
                                    id="exampleFormControlInput1"
                                    value="">
                                <div class="invalid-feedback"></div>
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
                                                value="pria">
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
                                                value="wanita">
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
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    value="">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="agama">Agama</label>

                                <select
                                    type="select"
                                    class="form-control"
                                    id="exampleFormControlSelect1"
                                    name="agama">
                                    <option></option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
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
                                                value="menikah">
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
                                                value="lajang">
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
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    value="">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor Telepon</label>
                                <input
                                    name="nomor_telepon"
                                    type="number"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    value="">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input
                                    name="email"
                                    type="email"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    value="">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input
                                    name="username"
                                    type="text"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    value="">
                                <div class="invalid-feedback"></div>
                            </div>

                            <input
                                type="submit"
                                class="btn btn-primary"
                                name="btn"
                                value="Save"
                                style="float:right;"/>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button onclick="myFunction()">Save</button>
            <script>
                function myFunction() {
                    alert("Perubahan berhasil ditambahkan");
                }
            </script>

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