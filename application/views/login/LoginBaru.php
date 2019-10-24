<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SPK Diagnosis Gangguan Afektif</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="assets/img/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="../assets/font/js/fontawesome.min.js">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="../assets/font/js/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../assets/css/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../assets/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../assets/css/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../assets/css/util-login.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/main-login.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div
                class="container-login100"
                style="background-image: url('../assets/img/imagess.jpg');">
                <div class="wrap-login100 p-t-30 p-b-50">
                    <span class="login100-form-title p-b-41">
                        Account Login
                    </span>

                    <form
                        class="login100-form validate-form p-b-33 p-t-5"
                        action="<?php echo site_url('Login_controller/user_login'); ?>"
                        method="post">
                        <?php echo $this->session->flashdata('msg'); ?>

                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input
                                class="input100"
                                type="text"
                                name="username"
                                placeholder="Username"
                                required="required">
                            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input
                                class="input100"
                                type="password"
                                name="password"
                                placeholder="Password"
                                required="required">
                            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        </div>
                        
                        <!-- <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <label >
                                <input type="checkbox" value="remember-me">
                                Remember me
                            </label>
                        </div> -->

                        <div class="container-login100-form-btn m-t-32">
                            <button class="login100-form-btn" type="submit" name="login">
                                Login
                            </button>
                        </div>

                        <div class="container-login100-form-btn m-t-32">
                            <a
                                class="login100-form-btn"
                                href="<?php echo site_url('Admin/Register/index')?>"
                                type="submit">
                                Daftar disini
                            </a>
                        </div>

                        <!-- <div class="form-group row"> <div class="col-sm-12 daftar"> <a
                        role="button" href="<?php echo site_url('Admin/Register/index')?>" type="submit"
                        class="btn btn-block btn-link">Belum punya akun? Daftar disini</a> </div> </div>
                        -->

                    </form>

                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="../assets/jquery/jquery.min.js"></script>
        <!--===============================================================================================-->
        <script src="../assets/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="../assets/js/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="../assets/js/moment.min.js"></script>
        <script src="../assets/js/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="../assets/js/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="../assets/js/main-login.js"></script>

    </body>
</html>