
                        <div style="float:right">
                            <span class="title font-weight-bold">EDIT JADWAL</span>
                        </div>
                    </div>

                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Koor/Home/index')?>">Home</a>
                            </li>
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Koor/Penjadwalan/index') ?>">Penjadwalan</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit penjadwalan psikolog</li>
                        </ol>
                    </nav>

                    <div class="col-md-12">
                        <form
                            action="<?php echo base_url('index.php/Koor/Penjadwalan/update/'.$user->id) ?>"
                            method="post"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="kuota">Kuota</label>
                                <input
                                    name="kuota"
                                    type="number"
                                    class="form-control <?php echo form_error('kuota') ? 'is-invalid':'' ?>"
                                    id="kuota"
                                    value="<?php echo $user->kuota ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('kuota') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Hari</label>
                                <input
                                    name="hari"
                                    type="varchar"
                                    class="form-control <?php echo form_error('hari') ? 'is-invalid':'' ?>"
                                    id="tanggal"
                                    value="<?php echo $user->hari ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('hari') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Waktu Konseling</label>
                                <input
                                    name="waktu"
                                    type="time"
                                    class="form-control  <?php echo form_error('waktu') ? 'is-invalid':'' ?>"
                                    id="waktu"
                                    value="<?php echo $user->waktu ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('waktu') ?>
                                </div>
                            </div>

                            <input
                                type="submit"
                                class="btn btn-primary"
                                name="btn"
                                value="Save"
                                style="float:right;"/>
                        </form>
                    </div>

                </div>
            </div>
