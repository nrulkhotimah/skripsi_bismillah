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
                            <a
                                class="nav-link js-scroll-trigger"
                                id="#home"
                                href="<?php echo site_url('Kli_Home/index')?>">Home</a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="<?php echo site_url('Kli_Home/editProfil')?>">Profil</a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="<?php echo site_url('Kli_pendaftaran/index')?>">Pendaftaran</a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="<?php echo site_url('Kli_diagnosis/index')?>">Data Diagnosis</a>
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

        <!-- edit -->
        <section class="page-section" id="profil">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">CatKel</h2>
                        <h3 class="section-subheading text-muted">Catatan dan keluhan</h3>
                    </div>
                </div>

                <div class="row text-left">
                    <div class="col-md-12">

                        <span>Nama Klien : Tika
                        </span>
                        <br>
                        <!-- data tabel -->
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="result">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle" rowspan="2">Keluhan
                                    </th>
                                    <th class="align-middle" rowspan="2">Catatan
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <tr>
                                    <td class="align-middle">merasa pusing</td>
                                    <td class="align-middle">Bipolar</td>
                                </tr>
                            </tbody>
                        </table>
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