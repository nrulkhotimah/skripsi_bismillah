<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>

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
        <div class="bg-img">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-12 text-center">
                                <h2 class="login-part font-weight-bold">Lupa Password</h2>
                            </div>
                        </div>

                        <div class="card-body">
                            <?php echo $this->session->flashdata('msg'); ?>

                            <form
                                method="post">

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            type="text"
                                            name="email"
                                            class="form-control"
                                            placeholder="Masukkan email saat mendaftar"
                                            required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <i>
                                            *silahkan masukkan email sesuai akun saat mendaftar. setelah ini, silahkan masuk
                                            ke email anda. password baru akan masuk ke email anda</i>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-block btn-primary">Kirim</button>
                                    </div>
                                </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>

</html>