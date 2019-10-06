
                        <div style="float:right">
                            <span class="title font-weight-bold">CATATAN KONSELING -- SESSION NAMA KLIEN --</span>
                        </div>
                    </div>

                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Ang/Home/index')?>">Home</a>
                            </li>
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Ang/Dataklien/index') ?>">Dataklien</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Catatan konseling</li>
                        </ol>
                    </nav>

                    <div class="col-md-12">
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="result">
                            <thead class="text-center">
                                <tr>
                                    <th class="align-middle" rowspan="2">KELUHAN</th>
                                    <th class="align-middle" rowspan="2">CATATAN</th>
                                    <th class="align-middle col8" rowspan="2">EDIT</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <?php 
                                    $i=0;
                                    foreach($diagnosis as $DataKlien):
                                    $i++;
                                ?>
                                <tr>
                                    <td class="align-middle"><?php echo $DataKlien->keluhan ?></td>
                                    <td class="align-middle"><?php echo $DataKlien->catatan ?></td>

                                    <td class="align-middle">
                                        <a href="">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <div class="but" style="float:RIGHT">
                            <a href="<?php echo site_url('Ang/Dataklien/tambahcatatan') ?>">
                                <button type="button" class="btn btn-primary">
                                    Tambah
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
