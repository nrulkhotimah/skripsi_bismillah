<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sign Up</title>

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
                                <h2 class="login-part font-weight-bold">Login</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <form
                                action="<?php echo site_url('Login_controller/user_login'); ?>"
                                method="post">
                                <?php echo $this->session->flashdata('msg'); ?>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            type="text"
                                            name="username"
                                            class="form-control"
                                            id="inputEmail3"
                                            placeholder="Username"
                                            required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control"
                                            id="inputPassword3"
                                            placeholder="Password"
                                            required="required">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label >
                                            <input type="checkbox" value="remember-me">
                                            Remember me
                                        </label>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" name="login" class="btn btn-block btn-primary">Login</button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 daftar">
                                        <a
                                            href="<?php echo site_url('Admin/Register/index')?>"
                                            class="btn btn-block btn-warning">
                                            Belum punya akun? Daftar disini
                                        </a>

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