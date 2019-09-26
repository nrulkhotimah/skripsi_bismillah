

                        <div style="float:right">
                            <span class="title font-weight-bold">TAMBAH JADWAL</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <form action="save" method="post" enctype="multipart/form-data">

                            <?php echo form_open('koordinator/jadwal/Penjadwalankoor'); ?>

                            <div class="form-group">
                                <input
                                    name="nama"
                                    type="text"
                                    class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1"
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
                                    id="exampleFormControlInput1">
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Waktu Konseling</label>
                                <input
                                    name="waktu"
                                    type="time"
                                    class="form-control <?php echo form_error('waktu') ? 'is-invalid':'' ?>"
                                    id="exampleFormControlInput1">
                                <div class="invalid-feedback">
                                    <?php echo form_error('waktu') ?>
                                </div>
                            </div>

                            <a href="<?php echo site_url('Ang/Penjadwalan/index')?>">
                                <button type="button" class="btn btn-primary" style="float:right;">Cancel</button>
                            </a>

                            <input
                                type="submit"
                                class="btn btn-primary"
                                name="btn"
                                value="Save"
                                style="float:right; width:100px;"/>
                        </form>
                        <?php echo form_close(); ?>
                    </div>

                </div>

            </div>
        </div>
