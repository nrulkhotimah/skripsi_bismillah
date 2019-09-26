
                        <div style="float:right">
                            <span class="title font-weight-bold">TAMBAH CATATAN KONSELING</span>
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
                            <li class="breadcrumb-item btn-link">
                                <a href="<?php echo site_url('Ang/Dataklien/catkonsel') ?>">Catatan konseling</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah catatan konseling</li>
                        </ol>
                    </nav>

                    <div class="col-md-12">
                        <table
                            class="table table-sm table-bordered"
                            style="margin-top:20px;"
                            id="result">

                            <tbody class="text-center">
                                <form action="">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Masukkan keluhan
                                        </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Masukkan catatan konseling
                                        </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <input
                                        type="submit"
                                        class="btn btn-primary"
                                        name="btn"
                                        value="Save"
                                        style="float:right; width:100px;"/>
                                </form>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
