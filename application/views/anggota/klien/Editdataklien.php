
                        <div style="float:right">
                            <span class="title font-weight-bold">EDIT KLIEN</span>
                        </div>
                    </div>

                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Ang/Home/index')?>">Home</a>
                            </li>
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Ang/Dataklien/index') ?>">Dataklien</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Dataklien</li>
                        </ol>
                    </nav>

                    <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="col-md-12">
                        
                        <form
                            action="<?php echo base_url('index.php/Ang/Dataklien/update/'.$user->id) ?>"
                            method="post"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input
                                    name="nama"
                                    type="text"
                                    class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->nama ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tanggal-lahir</label>
                                <input
                                    name="tanggal_lahir"
                                    type="date"
                                    class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->tanggal_lahir ?>"
                                    >
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal_lahir') ?>
                                </div>
                            </div>

                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="jenis_kelamin"
                                                id="gridRadios1"
                                                value="pria" <?php echo ($user->jenis_kelamin=='pria' ? 'checked':'');?>
                                                >
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
                                                value="wanita" <?php echo  ($user->jenis_kelamin=='wanita' ? 'checked':''); ?>
                                                >
                                            <label class="form-check-label" for="gridRadios2">
                                                Wanita
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Alamat</label>
                                <input
                                    name="alamat"
                                    type="text"
                                    class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->alamat ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <?php $agama = $user->agama; ?>
                                <select
                                    type="select"
                                    class="form-control"
                                    id="exampleFormControlSelect1"
                                    name="agama"
                                    >
                                    <option <?php echo ($agama == 'islam') ? "selected": "" ?>>Islam</option>
                                    <option <?php echo ($agama == 'kristen') ? "selected": "" ?>>Kristen</option>
                                    <option <?php echo ($agama == 'hindu') ? "selected": "" ?>>Hindu</option>
                                    <option <?php echo ($agama == 'budha') ? "selected": "" ?>>Budha</option>
                                    <option <?php echo ($agama == 'konghucu') ? "selected": "" ?>>Konghucu</option>
                                </select>
                            </div>

                             <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Marital Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="marital_status"
                                                id="gridRadios3"
                                                value="menikah" <?php echo ($user->marital_status=='menikah' ? 'checked':'');?>>
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
                                                value="lajang" <?php echo ($user->marital_status=='lajang' ? 'checked':'');?>>
                                            <label class="form-check-label" for="gridRadios4">
                                                Lajang
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Pekerjaan</label>
                                <input
                                    name="pekerjaan"
                                    type="text"
                                    class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->pekerjaan ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('pekerjaan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor Telepon</label>
                                <input
                                    name="nomor_telepon"
                                    type="number"
                                    class="form-control <?php echo form_error('nomor_telepon') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo  $user->nomor_telepon?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nomor-telepon') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email</label>
                                <input
                                    name="email"
                                    type="email"
                                    class="form-control  <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->email ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input
                                    name="username"
                                    type="text"
                                    class="form-control  <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo  $user->username ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <input
                                type="submit"
                                class="btn btn-primary"
                                name="btn"
                                value="Save"
                                style="float:right;"
                                />

                        </form>
                        

                    </div>
                </div>
            </div>
