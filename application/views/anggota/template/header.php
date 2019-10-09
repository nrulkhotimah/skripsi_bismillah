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
                        <li>
                            <a href="<?php echo site_url('Ang/Home/editProfil')?>" class="btn profile">
                                <img src="../../assets/img/user.png" alt="Avatar"><br>
                                <span>Profile</span>
                            </a>
                            <p class="text-center" style="font:10px !important;">Hello! psikolog</p>
                            <!-- <span >Hello! Admin</span> -->
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('Ang/Dataklien/index')?>">Data klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Diagnosis/index')?>">Diagnosis</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Penjadwalan/index')?>">Penjadwalan
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Dataklien/riwayat')?>">Riwayat</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('Ang/Home/kriteria')?>">Kriteria Keputusan</a>
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