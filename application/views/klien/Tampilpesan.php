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
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url('assets/css/agency.css');?>">
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
                                href="<?php echo site_url('Klien/Home/index')?>">Home</a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="<?php echo site_url('Klien/Home/editProfil')?>">Profil</a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="<?php echo site_url('Klien/Home/datadiagnosis')?>">Datadiagnosis</a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="<?php echo site_url('Klien/Pendaftaran/index')?>">Konseling</a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="<?php echo site_url('Klien/inbox/index')?>">Kotak Masuk</a>
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

        <div class="col-md-12" style="margin-top: 8% !important; font-size: 10px !important;">
            <div class="clearfix"></div>
            <?php foreach ($pesan as $key => $value): ?>
            <?php if($value->dari_user==$id_login): ?>
            <div class="card text-dark bg-info mb-3 float-right font-weight-light" style="max-width: 40rem;">
                <div class="card-body">
                    <p class="card-text text-dark float-left">
                        <?php echo $value->tanggal_kirim_pesan?>
                    </p>
                    <p class="card-text text-dark float-right" >
                        <?php echo $value->status_pesan?></p>
                    <div class="clearfix"></div>
                    <h5 class="card-title" style="font-size: 15px !important;">
                        <?php echo $value->isi_pesan?></h5>
                </div>
            </div>
            <div class="clearfix"></div>

            <?php else: ?>
            <div class="card text-dark bg-light mb-3 " style="max-width: 40rem;">
                <div class="card-body">
                    <p class="card-text text-dark float-left">
                        <?php echo $value->tanggal_kirim_pesan?>
                    </p>
                    <div class="clearfix"></div>
                    <h5 class="card-title" style="font-size: 15px !important;">
                        <?php echo $value->isi_pesan?></h5>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php endif ?>
            <?php endforeach ?>

            <form method="post" action="<?php echo base_url("klien/inbox/tambah_pesan") ?>">
                <input type="hidden" name="kepada_user" value="<?php echo $kepada_user ?>">
                <div class="form-group">
                    <textarea class="form-control" style="font-size: 13px !important;" name="isi_pesan" placeholder="tulis disini"></textarea>
                </div>
                <button class="btn btn-primary">Kirim</button>
            </form>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/font/js/solid.js"></script>
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>

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