<div style="float:right">
    <span class="title font-weight-bold">DIAGNOSIS</span>
</div>
</div>

<!-- ========== pertanyaan 1 =========== -->
<div class="col-md-12 satu">
    <div class="card">
        <div class="card-header">
            Pertanyaan
        </div>
        <div class="card-body">
            <?php echo $pertanyaan->pertanyaan ?>
        </div>
        <div class="card-footer">
            <div class="float-right">
            <form method="post">
                <?php if ($pertanyaan->pernyataan == 1): ?>
                    <button class="btn btn-primary" value="Ya" name="<?php echo $pertanyaan->id?>">Ya</button>
                <?php else: ?>
                    <button class="btn btn-primary" value="Ya" name="<?php echo $pertanyaan->id?>">Ya</button>
                    <button class="btn btn-secondary" value="Tidak" name="<?php echo $pertanyaan->id?>">Tidak</button>
                <?php endif ?>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- ==================================== -->


