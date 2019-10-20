<div style="float:right">
    <span class="title font-weight-bold">RIWAYAT DIAGNOSIS KLIEN</span>
</div>
</div>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
     <ol class="breadcrumb">
         <li class="breadcrumb-item btn-link">
             <a href="<?php echo site_url('Koor/Home/index')?>">Home</a>
        </li>
        <li class="breadcrumb-item btn-link">
             <a href="<?php echo site_url('Koor/Dataklien/riwayat') ?>">Riwayat</a>
        </li>
         <li class="breadcrumb-item active" aria-current="page">Pilih klien</li>
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
            <th class="align-middle ">Nama Klien</th>
            <th class="align-middle ">Aksi</th>
            <th>sdsd</th>
        </tr>
    </thead>

    <tbody class="text-center">
        <?php 
        $i=0;
            foreach($user as $Dataklien):
            $i++;
        ?>
        <tr>
            <td class="align-middle"><?php echo $i ?></td>
            <td class="align-middle"><?php echo $Dataklien->nama ?></td>
            <td class="align-middle">
                <a
                    href="<?php echo site_url('Koor/Dataklien/lihatRiwayat/'.$Dataklien->id_user) ?>">
                    <button class="btn btn-primary">Lihat Riwayat</button>
                </a>
            </td>
            <td>dsdsds</td>
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