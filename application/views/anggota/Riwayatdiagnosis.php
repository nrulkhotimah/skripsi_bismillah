

                        <div style="float:right">
                            <span class="title font-weight-bold">RIWAYAT DIAGNOSIS KLIEN</span>
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
                                    <th class="align-middle" >Nama Klien</th>
                                    <th class="align-middle" >Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <tr>
                                    <td class="align-middle"></td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle">
                                        <a href="<?php echo site_url('Ang/Dataklien/lihatRiwayat') ?>">
                                            <button class="btn btn-primary">Lihat Riwayat</button>
                                        </a>
                                    </td>
                                </tr>

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
