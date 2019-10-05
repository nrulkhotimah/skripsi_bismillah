<div style="float:right">
    <span class="title font-weight-bold">PILIH JADWAL</span>
</div>

</div>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Admin/Home/index')?>">Home</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Admin/Pendaftaran/index') ?>">Penjadwalan</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Pilih Jadwal</li>
</ol>
</nav>

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
            <th class="align-middle col5">No</th>
            <th class="align-middle col20">Nama Psikolog</th>
            <th class="align-middle col30">Tanggal</th>
            <th class="align-middle col30">Waktu</th>
            <th class="align-middle col20">Aksi</th>

        </tr>
    </thead>

    <tbody class="text-center">
    <?php
            $i=0;
            foreach($penjadwalan as $DataKlien):
            // print_r($DataKlien);
             // exit();
            $i++;
                                    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $DataKlien->nama ?></td>
            <td><?php echo $DataKlien->tanggal ?></td>
            <td><?php echo $DataKlien->waktu ?></td>
            <td class="btn btn-primary">Pilih jadwal</td>
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
$('#klien1').DataTable();
});
</script>