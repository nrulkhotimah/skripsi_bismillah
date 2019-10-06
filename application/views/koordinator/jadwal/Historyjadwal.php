
                        <div style="float:right">
                            <span class="title font-weight-bold">HISTORY JADWAL PSIKOLOG</span>
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
                            <li class="breadcrumb-item active" aria-current="page">History jadwal</li>
                        </ol>
                    </nav>

                    <div class="col-md-12">
                  
                        <!-- data tabel -->
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="example">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle col5">No</th>
                                    <th class="align-middle" >Tanggal</th>
                                    <th class="align-middle" >Waktu</th>
                                    <th class="align-middle" >Kuota Penuh</th>
                                    <th class="align-middle" >Sisa Kuota</th>
                                    <th class="align-middle" >Edit</th>
                                    <th class="align-middle" >Hapus</th>
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
                                    <td class="align-middle"><?php echo $sisa[$Penjadwalan->id] ?></td>
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
                        <br>

                    </div>
                </div>
            </div>

<!-- script datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script
src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
$('#example').DataTable();
});
</script>