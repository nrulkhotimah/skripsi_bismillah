

                        <div style="float:right">
                            <span class="title font-weight-bold">RIWAYAT DIAGNOSIS KLIEN</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <form
                            class="form-inline"
                            action="<?php echo site_url('Ad_Dataklien_controller/search/') ?>"
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
                                    <th class="align-middle" rowspan="2">Aksi</th>
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
