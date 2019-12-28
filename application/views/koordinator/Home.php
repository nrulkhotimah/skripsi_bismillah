<div style="float:right">
    <span class="title font-weight-bold">HOME</span>
</div>
</div>

<div class="col-md-12">
<div class="card">
    <div class="card-body ">
        <h3 class="font-weight-bold" style="">
            <i class="fas fa-home"></i>
            HOMEPAGE KOORDINATOR PSIKOLOG
        </h3>
    </div>
</div>
<br>
<hr>

<div class="card text-center">
    <div class="card-header bg-info">
        ALUR PROSES DIAGNOSIS
    </div>
    <div class="card-body">
        <img src="../../assets/img/alur.png" alt="" style="max-width: 55%; height: auto;">
    </div>
</div>

<br>
<br>

<?php if ($baru_mendaftar OR $belum_diagnosis): ?>
<div class="alert alert-info">
    <p class="lead">
        Klien baru yang memilih psikolog
    </p>
    <ul>
        <?php if(!empty($baru_mendaftar)): ?>
        <?php  foreach ($baru_mendaftar as $key => $value): ?>
        <li>
            <a href="<?php echo site_url('Koor/Dataklien/index/') ?>" class="btn btn-link">
                <?php echo $value->nama ?>
            </a>
        </li>
        <?php endforeach ?>
    <?php else: ?>
        <li>-</li>
        <?php endif ?>

    </ul>

    <p class="lead">
        Klien yang baru melakukan pendaftaran kembali
    </p>
    <ul>
        <?php if(!empty($belum_diagnosis)): ?>
        <?php  foreach ($belum_diagnosis as $key => $value): ?>
        <li>
            <a href="<?php echo site_url('Koor/Dataklien/index/') ?>" class="btn btn-link">
                <?php echo $value->nama ?>
            </a>
        </li>
        <?php endforeach ?>
    <?php else: ?>
        <li>-</li>
        <?php endif ?>
    </ul>

</div>

<?php endif ?>

</div>
</div>