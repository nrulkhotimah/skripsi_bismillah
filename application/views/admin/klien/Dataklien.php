<div style="float:right">
    <span class="title font-weight-bold">DATA KLIEN</span>
</div>
</div>

<?php echo $this->session->flashdata('sukses'); ?>

<!-- data klien -->
<div class="col-md-12">

<!-- data tabel -->
<table class="table table-bordered" style="margin-top:20px;" id="example">
    <thead class="text-center">
        <tr>
            <th class="align-middle col5">No</th>
            <th class="align-middle">Nama Klien</th>
            <th class="align-middle">Jenis Kelamin</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Tanggal Lahir</th>
            <th class="align-middle">Nomor Telepon</th>
            <th class="align-middle">Jadwal Konseling</th>
            <th class="align-middle">Edit</th>
            <th class="align-middle">Hapus</th>
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
            <td class="align-middle"><?php echo $DataKlien->marital_status ?></td>
            <td class="align-middle"><?php echo $DataKlien->tanggal_lahir ?></td>
            <td class="align-middle"><?php echo $DataKlien->nomor_telepon ?></td>

            <td class="align-middle "><?php echo $jadwal_konseling[$DataKlien->id_user] ?></td>
            
            <td class="align-middle">
                <a href="<?php echo site_url('Admin/Dataklien/edit/'.$DataKlien->id_user) ?>">
                    <i class="fas fa-pen"></i>
                </a>
            </td>

            <td class="align-middle">
                <a
                    onclick="deleteConfirm('<?php echo site_url('Admin/Dataklien/delete/'.$DataKlien->id_user) ?>')"
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
                                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
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

<!-- script datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script
src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
$('#example').DataTable();
});
</script>