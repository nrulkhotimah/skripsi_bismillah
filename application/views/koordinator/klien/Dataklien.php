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
            <th class="align-middle col10" >Waktu</th>
            <th class="align-middle col15" >Tanggal</th>
            <th class="align-middle col15" >Nama Psikolog</th>
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
                <a href="" class="btn btn-link" data-toggle="modal" data-target="#hasil">Bipolar 1</a>

                <!-- Modal -->
                <div
                    class="modal fade"
                    id="hasil"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Hasil Diagnosis</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="diagnosis"
                                        placeholder="name@example.com">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="align-middle">13.00 WIB</td>
            <td class="align-middle">23 Januari 2019</td>
            <td class="align-middle">Ika</td>
            <td class="align-middle">
                <a href="<?php echo site_url('Koor/Dataklien/catkonsel/'.$DataKlien->id_user) ?>">
                    <button type="button" class="btn btn-primary">Open</button>
                </a>

            </td>
            
                <td>
                <form action="<?php echo base_url("Koor/Dataklien/ubah_status/".$DataKlien->id_user) ?>">
                    <select name="status_konsel" id="" onchange="submit()">
                        <option value="selesai" <?php if($DataKlien->status_konsel == "selesai") {echo "selected";} ?> >selesai</option>
                        <option value="belum selesai" <?php if($DataKlien->status_konsel == "belum selesai") {echo "selected";} ?>>belum selesai</option>
                    </select>
                    </form>
                </td>

            <!-- <td class="align-middle"> -->
                <!-- Example single danger button -->
                <!-- <div class="btn-group">
                    <button
                        type="button"
                        class="btn btn-primary dropdown-toggle"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Selesai</a>
                        <a class="dropdown-item" href="#">Jadwal Berikutnya</a>
                    </div>
                </div>
            </td> -->

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