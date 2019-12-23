<div style="float:right">
    <span class="title font-weight-bold">DATA KLIEN</span>
</div>
</div>

<?php echo $this->session->flashdata('sukses'); ?>

<div class="col-md-12">
<!-- data tabel -->
<table
    class="table table-sm table-bordered"
    style="margin-top:20px;"
    id="example">
    <thead class="text-center">
        <tr>
            <th class="align-middle col5">No</th>
            <th class="align-middle col20">Nama Klien</th>
            <th class="align-middle col20">Chat</th>

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
            <td class="align-middle">
                <?php echo $DataKlien->nama ?>
            </td>

            <td>
                <a
                    href="<?php echo site_url('Ang/inbox/pesan/'.$DataKlien->id_user) ?>"
                    class="btn btn-primary">
                    Pesan</a>
            </td>

        </tr>
        <?php endforeach; ?>
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