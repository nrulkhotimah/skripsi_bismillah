
                        <div style="float:right">
                            <span class="title font-weight-bold">JADWAL PSIKOLOG</span>
                        </div>
                    </div>

                     <!-- breadcrumb -->
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Koor/Home/index')?>">Home</a>
                            </li>
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Koor/Penjadwalan/index') ?>">Penjadwalan</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Seluruh jadwal</li>
                        </ol>
                    </nav>

                    <div class="col-md-12">
                        <!-- kolom search -->
                        <form class="form-inline" action="" method="get">
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
                                    <th class="align-middle" rowspan="2">Nama Psikolog</th>
                                    <th class="align-middle" rowspan="2">Nomor Telepon</th>
                                    <th colspan="2">Jadwal</th>
                                    <th class="align-middle" rowspan="2">Kuota Penuh</th>
                                    <th class="align-middle" rowspan="2">Sisa Kuota</th>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <?php 
                                $i=0;
                                    foreach($user as $Jadwal):
                                    $i++;
                                ?>
                                <tr>
                                    <td class="align-middle"><?php echo $i ?></td>
                                    <td class="align-middle"><?php echo $Jadwal->nama ?></td>
                                    <td class="align-middle"><?php echo $Jadwal->nomor_telepon ?></td>
                                    <td class="align-middle"><?php echo $Jadwal->tanggal ?></td>
                                    <td class="align-middle"><?php echo $Jadwal->waktu ?></td>
                                    <td class="align-middle"><?php echo $Jadwal->kuota ?></td>
                                    <td class="align-middle"></td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
         
                    </div>
                </div>
            </div>
