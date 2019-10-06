<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Diagnosis gangguan afektif</title>

        <!-- Bootstrap core CSS -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url('assets/css/bootstrap.css');?>">

        <!-- Custom fonts for this template -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css">
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
            rel="stylesheet"
            type="text/css">
        <link
            href='https://fonts.googleapis.com/css?family=Kaushan+Script'
            rel='stylesheet'
            type='text/css'>
        <link
            href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'
            rel='stylesheet'
            type='text/css'>
        <link
            href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700'
            rel='stylesheet'
            type='text/css'>

        <!-- Custom styles for this template -->
        <!-- <link href="css/agency.min.css" rel="stylesheet"> -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/agency.css">
    </head>

    <body id="page-top">

        <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">DiagAfektif</a>
        <button
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">

                <li class="nav-item">
                    <a  class="nav-link js-scroll-trigger"
                        id="#home"
                        href="<?php echo site_url('Klien/Home/index')?>">Home</a>
                </li>

                <li class="nav-item">
                    <a  class="nav-link js-scroll-trigger"
                        href="<?php echo site_url('Klien/Home/editProfil')?>">Profil</a>
                </li>

                <li class="nav-item">
                    <a  class="nav-link js-scroll-trigger"
                        href="<?php echo site_url('Klien/Pendaftaran/index')?>">Pendaftaran</a>
                </li>

                <li class="nav-item">
                    <a  class="nav-link js-scroll-trigger"
                        href="<?php echo site_url('Login_controller/logout')?>">Logout</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

        <!-- edit -->
        <section class="page-section" id="profil">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Profil</h2>
                        <h3 class="section-subheading text-muted">Edit Profi disini</h3>
                    </div>
                </div>

                <div class="row text-left">
                    <div class="col-md-12">
                    <form
                            action="<?php echo base_url('index.php/Klien/Home/update/'.$user->id) ?>"
                            method="post"
                            enctype="multipart/form-data">
                          
                            <div class="form-group">
                                <label for="exampleFormControlInput1" >Nama</label>
                                <input
                                    name="nama"
                                    type="text"
                                    class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->nama ?>">
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
                                                value="pria" <?php echo ($user->jenis_kelamin=='pria' ? 'checked':'');?>>
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
                                                value="wanita" <?php echo  ($user->jenis_kelamin=='wanita' ? 'checked':''); ?>>
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
                            </div>

                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <?php $agama = $user->agama; ?>
                                <select
                                    type="select"
                                    class="form-control"
                                    id="exampleFormControlSelect1"
                                    name="agama">
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
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor Telepon</label>
                                <input
                                    name="nomor_telepon"
                                    type="number"
                                    class="form-control <?php echo form_error('nomor_telepon') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo  $user->nomor_telepon?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input
                                    name="email"
                                    type="email"
                                    class="form-control  <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->email ?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input
                                    name="username"
                                    type="text"
                                    class="form-control  <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo  $user->username ?>">
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
                                style="margin-right:auto; float:right;">
                                Simpan
                            </button>
                        </form>
                    </div>

                </div>
            
        </section>

        <!-- Bootstrap core JavaScript -->
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/font/js/solid.js"></script>
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Contact form JavaScript -->
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/js/agency.min.js"></script>

    </body>

</html>