
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
                                    <th class="align-middle col5" rowspan="2">No</th>
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
                                    foreach($user as $Penjadwalan):
                                    $i++;
                                ?>
                                <tr>
                                    <td class="align-middle"><?php echo $i ?></td>
                                    <td class="align-middle"><?php echo $Penjadwalan->tanggal ?></td>
                                    <td class="align-middle"><?php echo $Penjadwalan->waktu ?></td>
                                    <td class="align-middle"><?php echo $Penjadwalan->kuota ?></td>
                                    <td class="align-middle"><?= hitungKuota($Penjadwalan->kuota) ?></td>
                                    <td class="align-middle">
                                        <a href="<?php echo site_url('Koor/Penjadwalan/edit/'.$Penjadwalan->id) ?>">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>

                                    <td class="align-middle">
                                        <a
                                            onclick="deleteConfirm('<?php echo site_url('Koor/Penjadwalan/delete/'.$Penjadwalan->id) ?>')"
                                            href="#!"
                                            class="btn tbn-small text-secondary"
                                            method="delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>

                                        <script>
                                            function deleteConfirm(url) {
                                                $('#btn-delete').attr('href', url);
                                                $('#deleteModal').modal();
                                            }
                                        </script>

                                        <!-- modal Delete Confirmation-->
                                        <div
                                            class="modal fade"
                                            id="deleteModal"
                                            tabindex="-1"
                                            role="dialog"
                                            aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="but" style="float:RIGHT">
                            <a href="<?php echo site_url('Koor/Penjadwalan/seluruhJadwal')?>">
                                <button type="button" class="btn btn-link">Lihat seluruh jadwal disini</button>
                            </a>

                            <a href="<?php echo site_url('Koor/Penjadwalan/add')?>">
                                <button type="button" class="btn btn-primary">Tambah</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
