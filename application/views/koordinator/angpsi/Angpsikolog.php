
                <div style="float:right">
                    <span class="title font-weight-bold">ANGGOTA PSIKOLOG</span>
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
                            <th class="align-middle col8" >Nama Psikolog</th>
                            <th class="align-middle" >Jenis Kelamin</th>
                            <th class="align-middle" >Nomor Telepon</th>
                            <th class="align-middle" >Edit</th>
                            <th class="align-middle" >Hapus</th>
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
                            <td class="align-middle"><?php echo $DataKlien->nama ?></td>
                            <td class="align-middle"><?php echo $DataKlien->jenis_kelamin ?></td>
                            <td class="align-middle"><?php echo $DataKlien->nomor_telepon ?></td>

                            <td class="align-middle">
                                <form action="">
                                    <a href="<?php echo site_url('Koor/Anggota/edit/'.$DataKlien->id) ?>">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </form>

                            </td>

                            <td class="align-middle">
                                <form action="">
                                    <a href="<?php echo site_url('Koor/Anggota/delete/'.$DataKlien->id) ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

                <div class="but" style="float:RIGHT">
                    <a href="<?php echo site_url('Koor/Anggota/tambah')?>">
                        <button type="button" class="btn btn-primary">Tambah</button>
                    </a>

                </div>
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

