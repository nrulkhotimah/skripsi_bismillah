
                        <div style="float:right">
                            <span class="title font-weight-bold">EDIT PROFIL</span>
                        </div>

                    </div>

                        <?php echo $this->session->flashdata('sukses'); ?>

                    <div class="col-md-12">
                        <form
                            action="<?php echo base_url('index.php/Ang/Home/update/'.$user->id) ?>"
                            method="post"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                    id="name"
                                    name="nama"
                                    value="<?php echo $user->nama ?>"
                                    aria-describedby="name"
                                    placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                    id="username"
                                    name="username"
                                    value="<?php echo $user->username ?>"
                                    aria-describedby="username"
                                    placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                    id="email"
                                    name="email"
                                    value="<?php echo $user->email ?>"
                                    aria-describedby="email"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input
                                    type="number"
                                    class="form-control <?php echo form_error('nomor_telepon') ? 'is-invalid':'' ?>"
                                    id="nomor_telepon"
                                    name="nomor_telepon"
                                    value="<?php echo $user->nomor_telepon ?>"
                                    aria-describedby="nomor_telepon"
                                    placeholder="Nomor Telepon">
                            </div>

                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                    id="alamat"
                                    name="alamat"
                                    value="<?php echo $user->alamat ?>"
                                    aria-describedby="alamat"
                                    placeholder="Alamat">
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                    id="password"
                                    name="password_lama"
                                    placeholder="Password Lama"
                                    maxlength="8">
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                    id="password-baru"
                                    name="password_baru"
                                    placeholder="Password Baru"
                                    maxlength="8">
                                <small id="emailHelp" class="form-text text-muted">Password baru maksimal 8 karakter</small>
                            </div>

                            <div class="form-group">
                                <input
                                    type="password"
                                    class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                    id="password-konfirmasi"
                                    onchange="checkPassword()"
                                    name="password_konfirmasi"
                                    placeholder="Confirm Password Baru"
                                    maxlength="8">
                                <small id="alert-password-konfirmasi" style="color:red"></small>

                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary"
                                data-toggle="modal"
                                data-target="#exampleModal"
                                style="margin-right:auto; float:right;"
                                onclick="myFunction()">
                                Simpan
                            </button>
                        </form>
                    </div>

                </div>
            </div>
