<div style="float:right">
    <span class="title font-weight-bold">PENJADWALAN</span>
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

<!-- data klien -->
<div class="col-md-12">

<!-- data tabel -->
<table class="table table-bordered" style="margin-top:20px;" id="klien1">
    <thead class="text-center">
        <tr>
            <th class="align-middle col5">No</th>
            <th class="align-middle">Nama Psikolog</th>
            <th class="align-middle">Aksi</th>
        </tr>
    </thead>

    <tbody class="text-center">
        <?php
            $i=0;
            foreach($user as $jadwal):
            // print_r($DataKlien);
             // exit();
            $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $jadwal->nama ?></td>
            <td class="btn-link">
                <a
                    href="<?php echo site_url('Koor/Penjadwalan/seluruhJadwal/'.$id_user)?>">Pilih jadwal</a>
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
$('#klien1').DataTable();
});
</script>