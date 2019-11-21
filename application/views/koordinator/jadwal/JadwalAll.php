<div style="float:right">
    <span class="title font-weight-bold">JADWAL PSIKOLOG</span>
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
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Penjadwalan/pilihJadwalPsi') ?>">Pilih Jadwal Psikolog</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Seluruh jadwal</li>
</ol>
</nav>

<div class="col-md-12">
<!-- <span><?php echo $user->nama ?></span> <span><?php echo $nomor_telepon
?></span> -->

<!-- data tabel -->
<table
    class="table table-sm table-bordered"
    style="margin-top:20px;"
    id="example">
    <thead class="text-center">
        <tr>
            <th class="align-middle col5">No</th>
            <th class="align-middle">Hari</th>
            <th class="align-middle">Waktu</th>
            <th class="align-middle">Kuota</th>
        </tr>
    </thead>

    <tbody class="text-center">
        <?php 
        $i=0;
             foreach($user as $Jadwal):
            $i++;                   
        ?>
        <tr>
            <td class="align-middle"><?php echo $i ?></td>
            <td class="align-middle"><?php echo $Jadwal->hari ?></td>
            <td class="align-middle"><?php echo $Jadwal->waktu ?></td>
            <td class="align-middle"><?php echo $Jadwal->kuota ?></td>
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