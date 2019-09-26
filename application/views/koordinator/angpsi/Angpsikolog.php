
                <div style="float:right">
                    <span class="title font-weight-bold">ANGGOTA PSIKOLOG</span>
                </div>
            </div>

            <!-- kolom search -->
            <div class="col-md-12">
                <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <form
                    class="form-inline"
                    action="<?php echo site_url('K_Angpsi/search/') ?>"
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
                            <th class="align-middle" rowspan="2">Nama Psikolog</th>
                            <th class="align-middle" rowspan="2">JK</th>
                            <th class="align-middle" rowspan="2">Nomor Telepon</th>
                            <th colspan="2">Aksi</th>
                        </tr>

                        <tr>
                            <th>Edit</th>
                            <th>Hapus</th>
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
                            <td class="align-middle"><?php echo $DataKlien->nama ?></td>
                            <td class="align-middle"><?php echo $DataKlien->jenis_kelamin ?></td>
                            <td class="align-middle"><?php echo $DataKlien->nomor_telepon ?></td>

                            <td class="align-middle">
                                <form action="">
                                    <a href="<?php echo site_url('Koor/Anggota/edit/'.$DataKlien->id) ?>">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </form>

                            </td>

                            <td class="align-middle">
                                <form action="">
                                    <a href="<?php echo site_url('Koor/Anggota/delete/'.$DataKlien->id) ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

                <div class="but" style="float:RIGHT">
                    <a href="<?php echo site_url('Koor/Anggota/tambah')?>">
                        <button type="button" class="btn btn-primary">Tambah</button>
                    </a>

                </div>
            </div>
        </div>
    </div>

