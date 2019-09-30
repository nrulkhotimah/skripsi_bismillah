<div style="float:right">
    <span class="title font-weight-bold">PENDAFTARAN</span>
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
            <th class="align-middle">Nama Klien</th>
            <th class="align-middle">Aksi</th>
        </tr>
    </thead>

    <tbody class="text-center">
        <tr>
            <td>1</td>
            <td>Anton</td>
            <td class="btn-link">
            <a href="<?php echo site_url('Admin/Pendaftaran/pilih_jadwal')?>">Pilih jadwal</a>
            </td>
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