
                        <div style="float:right">
                            <span class="title font-weight-bold">JADWAL PSIKOLOG</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <!-- kolom search -->
                        <form class="form-inline" action="" method="get">
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
                                    <th colspan="2">Jadwal</th>
                                    <th class="align-middle" rowspan="2">Kuota Penuh</th>
                                    <th class="align-middle" rowspan="2">Sisa Kuota</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <?php 
                                $i=0;
                                    foreach($user as $Dataklien):
                                    $i++;
                                ?>
                                <tr>
                                    <td class="align-middle"><?php echo $i ?></td>
                                    <td class="align-middle"><?php echo $Dataklien->tanggal ?></td>
                                    <td class="align-middle"><?php echo $Dataklien->waktu ?></td>
                                    <td class="align-middle"><?php echo $Dataklien->kuota ?></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle">
                                        <a href="<?php echo site_url('Ang/Penjadwalan/edit/'.$Dataklien->id_user) ?>">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>

                                    <td class="align-middle">
                                        <a href="<?php echo site_url('Ang/Penjadwalan/delete/'.$Dataklien->id_user) ?>">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="but" style="float:RIGHT">
                            <a href="<?php echo site_url('Ang/Penjadwalan/add')?>">
                                <button type="button" class="btn btn-primary">Tambah</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
