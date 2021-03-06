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
            <th class="align-middle col10">Jadwal Konseling</th>
            <th class="align-middle col10">Nama Klien</th>
            <th class="align-middle col10">Jenis Kelamin</th>
            <th class="align-middle col10">Hasil Diagnosis</th>
            <th class="align-middle col10">Catatan Konsel</th>
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
            <?php 
                if ($jadwal[$DataKlien->id_user]) {
                    echo hari_indonesia(date("D", strtotime($penjadwalan[$DataKlien->id_user]['waktu_daftar']))).", ".date("d M Y", strtotime($penjadwalan[$DataKlien->id_user]['waktu_daftar']))." Pukul ".$penjadwalan[$DataKlien->id_user]['waktu'];
                } else {
                    echo "Belum melakukan pendaftaran";
                }
            ?>
            </td>

            <td class="align-middle">
                <a href="<?php echo site_url('Ang/Dataklien/edit/'.$DataKlien->id_user) ?>" class="btn btn-link"><?php echo $DataKlien->nama ?></a>
            </td>

            <td class="align-middle"><?php echo $DataKlien->jenis_kelamin ?></td>

            <td class="align-middle <?php if(!$diagnosis[$DataKlien->id_user]) {echo "bg-warning";} ?>"="bg-warning">
                <?php if (!$diagnosis[$DataKlien->id_user] ):?>
                    Belum Ada Diagnosis
                <?php else: 
                    echo $gangguan[$DataKlien->id_user]['nama_gangguan'];
                ?>
                <?php endif ?>
            </td>

            <td class="align-middle">
                <?php if(!$diagnosis[$DataKlien->id_user]): ?>
                    <a disable="" class="btn btn-secondary disabled">Open</a>
                <?php else: ?>
                    <?php if ($DataKlien->status_konsel == "selesai"): ?>
                        <a class="btn btn-info" href="<?php echo site_url('Ang/Dataklien/detailcatkonsel/'.$diagnosis[$DataKlien->id_user]['id']) ?>">Open</a>
                    <?php else: ?>
                        <a class="btn btn-primary" href="<?php echo site_url('Ang/Dataklien/catkonsel/'.$diagnosis[$DataKlien->id_user]['id']) ?>">Open</a>
                    <?php endif ?>
                <?php endif ?>
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