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
        <div class="bg-img bg-regis">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-12 text-center">
                                <h2 class="login-part font-weight-bold">Pendaftaran</h2>
                            </div>
                        </div>

                        <div class="card-body">
                        <?php echo $this->session->flashdata('msg'); ?>

                            <form action="post_register" method="post" enctype="multipart/form-data">

                                <?php echo form_open('Register/post_register'); ?>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            name="nama"
                                            type="text"
                                            class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                            id="inputnama"
                                            placeholder="Nama"></div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlInput1">Tanggal Lahir</label>
                                        <input
                                            name="tanggal_lahir"
                                            type="date"
                                            class="form-control  <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>"
                                            id="exampleFormControlInput1">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tanggal_lahir') ?>
                                        </div>
                                    </div>
                                </div>

                                <fieldset class="form-group ">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend><br>
                                        <div
                                            class="col-sm-8"
                                            <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>>
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
                                        <div class="invalid-feedback">
                                            <?php echo form_error('jenis_kelamin') ?>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlInput1">Agama</label>
                                        <select
                                            class="form-control   <?php echo form_error('agama') ? 'is-invalid':'' ?>"
                                            id="inputagama"
                                            name="agama">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Konghucu</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('agama') ?>
                                        </div>
                                    </div>
                                </div>

                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-4 pt-0 ">Marital Status</legend>
                                        <div
                                            class="col-sm-8   <?php echo form_error('marital_status') ? 'is-invalid':'' ?>">
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
                                        <div class="invalid-feedback">
                                            <?php echo form_error('marital_status') ?>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            name="alamat"
                                            type="text"
                                            class="form-control  <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                            id="inputPassword3"
                                            placeholder="Alamat">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('alamat') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            name="pekerjaan"
                                            type="text"
                                            class="form-control  <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
                                            id="inputPassword3"
                                            placeholder="Pekerjaan">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('pekerjaan') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            name="nomor telepon"
                                            type="number"
                                            class="form-control  <?php echo form_error('nomor telepon') ? 'is-invalid':'' ?>"
                                            id="inputPassword3"
                                            placeholder="Nomor Telepon">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nomor telepon') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            name="email"
                                            type="email"
                                            class="form-control  <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                            id="inputPassword3"
                                            placeholder="Email">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('email') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            name="username"
                                            type="type"
                                            class="form-control  <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                            id="inputPassword3"
                                            placeholder="Username">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('username') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input
                                            name="password"
                                            type="password"
                                            class="form-control  <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                            id="inputPassword"
                                            placeholder="Password">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('password') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <a
                                            href="<?php echo site_url('Login_controller/index')?>"
                                            class="btn btn-block btn-secondary">Login</a>
                                    </div>
                                </div>

                            </form>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>