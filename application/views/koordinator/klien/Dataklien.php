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
<form
    class="form-inline"
    action="<?php echo site_url('K_Dataklien/search/') ?>"
    method="get">
    <div class="search container">
        <div class="row">
            <div style="width:90%">
                <input
                    class="form-control w-100"
                    type="text"
                    name="keyword"
                    placeholder="Search . . ."
                    autocomplate="off">
            </div>

            <div style="width:2%"></div>

            <div style="width:8%">
                <input type="submit" class="btn btn-primary form-control w-100" value="search">
            </div>
        </div>

    </div>
</form>

<!-- data tabel -->
<table
    class="table table-sm table-bordered"
    style="margin-top:20px;"
    id="result">
    <thead class="text-center">
        <tr>
            <th class="align-middle" rowspan="2">No</th>
            <th class="align-middle" rowspan="2">Nama Klien</th>
            <th class="align-middle" rowspan="2">JK</th>
            <th class="align-middle" rowspan="2">Hasil Diagnosis</th>
            <th colspan="2">Jadwal Konseling</th>
            <th class="align-middle" rowspan="2">Nama Psikolog</th>
            <th class="align-middle" rowspan="2">Catatan Konseling</th>
            <th class="align-middle" rowspan="2">Keterangan Konseling</th>
        </tr>

        <tr>
            <th>Waktu</th>
            <th>Tanggal</th>
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
            <td class="align-middle">
                <!-- Example single danger button -->
                <div class="btn-group">
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
            </td>

        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

</div>
</div>