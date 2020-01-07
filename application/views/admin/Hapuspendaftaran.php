<div style="float:right">
    <span class="title font-weight-bold">HAPUS PENDAFTARAN</span>
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
            <th class="align-middle col15">Nama Klien</th>
            <th class="align-middle col15">Jadwal Konseling</th>
            <th class="align-middle col10">Hapus</th>
        </tr>
    </thead>

    <tbody class="text-center">
        <?php
            $i=1;
            foreach($user as $DataKlien):
            
            if(isset($jadwal_konseling[$DataKlien->id_user])):
                                    ?>
        <tr>
            <td class="align-middle"><?php echo $i ?></td>
            <td class="align-middle"><?php echo $DataKlien->nama ?></td>
            <td class="align-middle"><?php echo $jadwal_konseling[$DataKlien->id_user] ?></td>

            <td class="align-middle">
                <a
                    onclick="deleteConfirm('<?php echo site_url('Admin/Pendaftaran/hapus_daftar/'.$id_pendaftaran[$DataKlien->id_user]) ?>')"
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
        <?php $i++; endif;  endforeach; ?>
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