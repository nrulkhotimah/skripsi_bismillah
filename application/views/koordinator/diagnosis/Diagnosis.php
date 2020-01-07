<div style="float:right">
    <span class="title font-weight-bold">DIAGNOSIS</span>
</div>
</div>

<!-- ========== pertanyaan  =========== -->
<div class="col-md-12 satu">
<div class="card">
    <div class="card-header">
        Pertanyaan
    </div>
    <div class="card-body">
        <?php echo $pertanyaan->pertanyaan ?>
    </div>
    <div class="card-footer ">
        <div class="float-left">
            <form method="post">
                <?php if ($pertanyaan->pernyataan == 1): ?>
                    <button class="btn btn-primary " value="Ya" name="<?php echo $pertanyaan->id?>">Ya</button>
                <?php else: ?>
                    <?php if($this->session->userdata("jawaban")): ?>
                        <a href="<?php echo base_url("koor/diagnosis/tombol_back/".$id_pendaftaran)?> " class="btn btn-warning">Kembali</a>
                    <?php endif ?>
                        <button class="btn btn-danger" value="Tidak" name="<?php echo $pertanyaan->id?>">Tidak</button>
                        <button class="btn btn-primary" value="Ya" name="<?php echo $pertanyaan->id?>">Ya</button>
                <?php endif ?>
            </form>
        </div>
    </div>
</div>
</div>
<!-- ==================================== -->