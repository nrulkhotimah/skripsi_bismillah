
                        <div style="float:right">
                            <span class="title font-weight-bold">JADWAL PSIKOLOG</span>
                        </div>
                    </div>

                    <div class="col-md-12">

                        <!-- data tabel -->
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="example">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle col5" >No</th>
                                    <th class="align-middle col20" >Tanggal</th>
                                    <th class="align-middle col20" >Waktu</th>
                                    <th class="align-middle col15" >Kuota Penuh</th>
                                    <th class="align-middle col15" >Sisa Kuota</th>
                                    <th class="align-middle col10" >Edit</th>
                                    <th class="align-middle col10" >Hapus</th>
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
                                    <td class="align-middle"><?php echo $Dataklien->tanggal ?></td>
                                    <td class="align-middle"><?php echo $Dataklien->waktu ?></td>
                                    <td class="align-middle"><?php echo $Dataklien->kuota ?></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle">
                                        <a href="<?php echo site_url('Ang/Penjadwalan/edit/'.$Dataklien->id_user) ?>">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>

                                    <td class="align-middle">
                                        <a href="<?php echo site_url('Ang/Penjadwalan/delete/'.$Dataklien->id_user) ?>">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="but" style="float:RIGHT">
                            <a href="<?php echo site_url('Ang/Penjadwalan/add')?>">
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
