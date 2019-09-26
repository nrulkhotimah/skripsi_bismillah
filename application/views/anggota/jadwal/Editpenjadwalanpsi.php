
                        <div style="float:right">
                            <span class="title font-weight-bold">EDIT JADWAL</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form
                            action="<?php echo base_url('index.php/Ang/Penjadwalan/update/'.$user->id) ?>"
                            method="post"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <input
                                    name="nama"
                                    type="text"
                                    class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->nama ?>"
                                    placeholder="Nama">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input
                                    name="nomor_telepon"
                                    type="number"
                                    class="form-control <?php echo form_error('nomor_telepon') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->nomor_telepon ?>"
                                    placeholder="Nomor Telepon">
                                <div class="invalid-feedback">
                                    <?php echo form_error('nomor_telepon') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input
                                    name="kuota"
                                    type="text"
                                    class="form-control <?php echo form_error('kuota') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->kuota ?>"
                                    placeholder="Kuota Klien">
                                <div class="invalid-feedback">
                                    <?php echo form_error('kuota') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tanggal konseling</label>
                                <input
                                    name="tanggal"
                                    type="date"
                                    class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->tanggal ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('kuota') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Waktu Konseling</label>
                                <input
                                    name="waktu"
                                    type="time"
                                    class="form-control  <?php echo form_error('waktu') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
                                    value="<?php echo $user->waktu ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('waktu') ?>
                                </div>
                            </div>

                            <a href="<?php echo site_url('K_Penjadwalan/index')?>">
                                <button type="button" class="btn btn-primary" style="float:right;">Cancel</button>
                            </a>

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
