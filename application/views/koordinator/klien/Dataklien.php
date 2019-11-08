<div style="float:right">
    <span class="title font-weight-bold">DATA KLIEN</span>
</div>
</div>

<!-- kolom search -->
<div class="col-md-12">
<?php if($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<!-- data tabel -->
<table
    class="table table-sm table-bordered"
    style="margin-top:20px;"
    id="example">
    <thead class="text-center">
        <tr>
            <th class="align-middle col5" >No</th>
            <th class="align-middle col10" >Nama Klien</th>
            <th class="align-middle col10" >Jenis Kelamin</th>
            <th class="align-middle col10" >Hasil Diagnosis</th>
            <th class="align-middle col10" >Jadwal</th>
            <th class="align-middle col10" >Catatan Konseling</th>
            <th class="align-middle col10" >Keterangan Konseling</th>
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
                <a
                    href="<?php echo site_url('Koor/Dataklien/edit/'.$DataKlien->id_user) ?>"
                    class="btn btn-link"><?php echo $DataKlien->nama ?></a>
            </td>

            <td class="align-middle"><?php echo $DataKlien->jenis_kelamin ?></td>

            <td class="align-middle">
                <?php 
                    if($diagnosis[$DataKlien->id_user]) {
                        echo $gangguan[$DataKlien->id_user]['nama_gangguan'];
                    } else {
                        echo "Belum Melakukan diagnosis";
                    }
                ?>
            </td>

            <td class="align-middle">
                    <?php 
                        if ($jadwal[$DataKlien->id_user]) {
                            echo date("D", strtotime($penjadwalan[$DataKlien->id_user]['waktu_daftar'])).", ".date("d M Y", strtotime($penjadwalan[$DataKlien->id_user]['waktu_daftar']))." Pukul ".$penjadwalan[$DataKlien->id_user]['waktu'];
                        } else {
                            echo "Belum melakukan pendaftaran";
                        }
                    ?>
            </td>        

            <td class="align-middle">
                <?php if(!$diagnosis[$DataKlien->id_user]): ?>
                    <a disable="" class="btn btn-primary disabled">Open</a>
                <?php else: ?>
                    <a class="btn btn-primary" href="<?php echo site_url('Koor/Dataklien/catkonsel/'.$diagnosis[$DataKlien->id_user]['id']) ?>">Open</a>
                <?php endif ?>                        
            </td>
            
            <td>
            <?php if ($DataKlien->status_konsel == "selesai"): ?>
                Selesai
            <?php else: ?>
            <form action="<?php echo base_url("Koor/Dataklien/ubah_status/".$DataKlien->id_user) ?>">
                 <select name="status_konsel" id="" onchange="submit()">
                      <option value="selesai" <?php if($DataKlien->status_konsel == "selesai") {echo "selected";} ?> >selesai</option>
                    <option value="belum selesai" <?php if($DataKlien->status_konsel == "belum selesai") {echo "selected";} ?>>belum selesai</option>
                </select>
                </form>
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