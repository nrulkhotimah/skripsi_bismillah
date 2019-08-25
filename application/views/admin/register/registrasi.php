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
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-12 text-center pt-5">
                    <h2 class="login-part font-weight-bold">Pendaftaran</h2>
                </div>
            </div>

            <div class="row justify-content-md-center pt-4">
                <div class="col-md-5">
                    <form>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input
                                    name="tanggal_lahir"
                                    type="date"
                                    class="form-control"
                                    id="exampleFormControlInput1">
                            </div>
                        </div>

                        <fieldset class="form-group ">
                            <div class="row">
                                <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend><br>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="jenis_kelamin"
                                            id="gridRadios1"
                                            value="pria"
                                            checked="checked">
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

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="exampleFormControlInput1">Agama</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="agama">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-4 pt-0 ">Marital Status</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="marital_status"
                                            id="gridRadios3"
                                            value="menikah"
                                            checked="checked">
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

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputPassword3"
                                    placeholder="alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputPassword3"
                                    placeholder="pekerjaan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input
                                    type="number"
                                    class="form-control"
                                    id="inputPassword3"
                                    placeholder="nomor telepon">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input
                                    type="email"
                                    class="form-control"
                                    id="inputPassword3"
                                    placeholder="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input
                                    type="password"
                                    class="form-control"
                                    id="inputPassword3"
                                    placeholder="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <a href="<?php echo site_url('Login_controller/index')?>" class="btn btn-block btn-secondary" >Login</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>

</html>