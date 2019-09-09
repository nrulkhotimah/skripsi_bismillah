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
            href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">

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
                            <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#profil">Profil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#pendaftaran">Pendaftaran</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#data">Data Diagnosis</a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="<?php echo site_url('Login_controller/logout')?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="masthead" id="home">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Selamat Datang di DiagAfektif</div>
                    <!-- <div class="intro-heading text-uppercase">It's Nice To Meet You</div> -->
                    <a
                        class="btn btn-primary btn-xl text-uppercase js-scroll-trigger"
                        href="#services">Diagnosis Ulang</a>
                    <a
                        class="btn btn-primary btn-xl text-uppercase js-scroll-trigger"
                        href="#services">Diagnosis
                    </a>
                </div>
            </div>
        </header>

        <!-- pendaftaran -->
        <section class="page-section" id="profil">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Profil</h2>
                        <h3 class="section-subheading text-muted">Edit Profi disini</h3>
                    </div>
                </div>

                <div class="row text-center">
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
        </section>

        <!-- pendaftaran -->
        <section class="page-section" id="pendaftaran">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Pendaftaran</h2>
                        <h3 class="section-subheading text-muted">Pilih jadwal konseling</h3>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-12">
                        <!-- data tabel -->
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="result">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle" rowspan="2">No</th>
                                    <th class="align-middle" rowspan="2">Nama Psikolog</th>
                                    <th colspan="2">Jadwal</th>
                                    <th class="align-middle" rowspan="2">Nomor Telepon</th>
                                    <th class="align-middle" rowspan="2">Keterangan</th>
                                </tr>

                                <tr>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">Tika</td>
                                    <td class="align-middle">23 Juni 2019</td>
                                    <td class="align-middle">14.00</td>
                                    <td class="align-middle">09832732901</td>
                                    <td class="align-middle">
                                        <button class="btn btn-primary">Pilih Psikolog</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>

        <!-- Data diagnosis -->
        <section class="bg-light page-section" id="data">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Data Diagnosis</h2>
                        <h3 class="section-subheading text-muted">Riwayat diagnosis klien.</h3>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-md-12">
                        <!-- data tabel -->
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="result">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle" rowspan="2">No</th>
                                    <th class="align-middle" rowspan="2">Hasil Diagnosis</th>
                                    <th class="align-middle" rowspan="2">Tanggal Konseling</th>
                                    <th class="align-middle" rowspan="2">Catatan Konseling</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">Bipolar</td>
                                    <td class="align-middle">23 Juni 2019</td>
                                    <td class="align-middle">
                                        <button class="btn btn-primary">Lihat
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; Your Website 2019</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

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