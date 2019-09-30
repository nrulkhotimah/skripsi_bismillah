<div style="float:right">
    <span class="title font-weight-bold">PILIH JADWAL</span>
</div>

</div>

<!-- data klien -->
<div class="col-md-12">
<?php if($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<!-- data tabel -->
<table class="table table-bordered" style="margin-top:20px;" id="klien1">
    <thead class="text-center">
        <tr>
            <th class="align-middle">No</th>
            <th class="align-middle">Nama Psikolog</th>
            <th class="align-middle">Tanggal</th>
            <th class="align-middle">Waktu</th>
            <th class="align-middle">Aksi</th>

        </tr>
    </thead>

    <tbody class="text-center">
        <tr>
            <td>1</td>
            <td>Tika</td>
            <td>23 Juni 2019</td>
            <td>13.00</td>
            <td class="btn btn-primary">Pilih jadwal</td>
        </tr>
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
$('#klien1').DataTable();
});
</script>