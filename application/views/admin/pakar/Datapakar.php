
                        <div style="float:right">
                            <span class="title font-weight-bold">DATA PAKAR</span>
                        </div>

                    </div>

                    <!-- data klien -->
                    <div class="col-md-12">
                        <?php if($this->session->flashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php endif; ?>

                        <!-- kolom search -->
                        <form
                            class="form-inline"
                            action="<?php echo site_url('Ad_Datapakar_controller/search/') ?>"
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

                        <table class="table table-sm table-bordered" style="margin-top:20px;">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle" rowspan="2">No</th>
                                    <th class="align-middle" rowspan="2">Nama Lengkap</th>
                                    <th class="align-middle" rowspan="2">JK</th>
                                    <th class="align-middle" rowspan="2">Nomor Telepon</th>
                                    <th class="align-middle" rowspan="2">Hak Akses</th>
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
                                    foreach($user as $DataPakar):
                                        // print_r($DataPakar);
                                        // exit();
                                        $i++;
                                    ?>
                                <tr>
                                    <td class="align-middle"><?php echo $i ?></td>
                                    <td class="align-middle"><?php echo $DataPakar->nama ?></td>
                                    <td class="align-middle"><?php echo $DataPakar->jenis_kelamin ?></td>
                                    <td class="align-middle"><?php echo $DataPakar->nomor_telepon ?></td>
                                    <td class="align-middle"><?php echo $DataPakar->role ?></td>
                                    <td class="align-middle">
                                        <a href="<?php echo site_url('Admin/Datapakar/edit/'.$DataPakar->id) ?>">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>

                                    <td class="align-middle">

                                        <a
                                            onclick="deleteConfirm('<?php echo site_url('Ad_Datapakar_controller/delete/'.$DataPakar->id) ?>')"
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

                                <?php  endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
