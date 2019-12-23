

                        <div style="float:right">
                            <span class="title font-weight-bold">DIAGNOSIS</span>
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
                                    <th class="align-middle col5">No</th>
                                    <th class="align-middle" >Nama Klien</th>
                                    <th class="align-middle" >Aksi</th>
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
                                    <?php if($Dataklien->status_konsel == "selesai"): ?>
                                        <a class="btn btn-secondary disabled " disabled href="<?php echo site_url('Ang/Diagnosis/Diag/'.$pendaftaran[$Dataklien->id_klien]->id) ?>">Diagnosis</a>
                                    <?php else: ?>
                                        <a class="btn btn-primary" href="<?php echo site_url('Ang/Diagnosis/Diag/'.$pendaftaran[$Dataklien->id_klien]->id) ?>">Diagnosis</a>
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