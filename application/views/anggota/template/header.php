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
        <link
            href='https://fonts.googleapis.com/css?family=Kaushan+Script'
            rel='stylesheet'
            type='text/css'>

        <!-- script bootstrap datatables -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/dataTable.css">

    </head>

    <body>

        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <ul class="list-unstyled components">
                        <h2 class="font-h2 ">Diagnosis</h2>
                        <h2 class="font-h2 ">AFEKTIF</h2>

                        <p class="text-center font-weight-bold" style="font:10 px!important;">Hello! <?php echo nama_session() ?></p>
                        <hr>

                        <li>
                        <a href="<?php echo site_url('Ang/Home/editProfil')?>"> <i class="fas fa-user-edit"></i> Profil</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Home/index')?>">  <i class="fas fa-home"></i> Home</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Dataklien/index')?>"> <i class="fas fa-users"></i> Data klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Diagnosis/pilihKlien')?>"> <i class="fas fa-diagnoses"></i> Diagnosis</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Penjadwalan/index')?>"> <i class="fas fa-calendar-alt"></i> Penjadwalan
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Dataklien/riwayat')?>"> <i class="fas fa-file-medical-alt"></i> Riwayat</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Kriteria/index')?>"> <i class="fas fa-book-medical"></i> Kriteria Keputusan</a>
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