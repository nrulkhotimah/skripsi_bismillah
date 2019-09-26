
                        <div style="float:right">
                            <span class="title font-weight-bold">DAFTAR JADWAL KONSELING KLIEN</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <?php if($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php endif; ?>

                        <!-- kolom search -->
                        <form
                            class="form-inline"
                            action="<?php echo site_url('Ad_Dataklien_controller/search/') ?>"
                            method="get">
                            <div class="search container">
                                <div class="row">
                                    <div style="width:90%">
                                        <input
                                            class="form-control w-100"
                                            type="text"
                                            name="keyword"
                                            placeholder="Search . . ."
                                            autocomplate="off">
                                    </div>

                                    <div style="width:2%"></div>

                                    <div style="width:8%">
                                        <input type="submit" class="btn btn-primary form-control w-100" value="search">
                                    </div>
                                </div>

                            </div>
                        </form>

                        <!-- data tabel -->
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="result">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle" rowspan="2">No</th>
                                    <th class="align-middle" rowspan="2">Nama Klien</th>
                                    <th colspan="2">Jadwal</th>
                                    <th class="align-middle" rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                            <?php 
                            $i=0;
                                foreach($user as $DataKlien):
                                $i++;
                            ?>
                                <tr>
                                    <td class="align-middle"><?php echo $i ?></td>
                                    <td class="align-middle">sa</td>
                                    <td class="align-middle">e</td>
                                    <td class="align-middle">sa</td>
                                    <td class="align-middle">ada</td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
