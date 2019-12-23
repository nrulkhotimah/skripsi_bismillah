<div style="float:right">
    <span class="title font-weight-bold">HOME</span>
</div>
</div>

<div class="col-md-12">
<div class="card">
    <div class="card-body ">
        <h3 class="font-weight-bold" style="">
            <i class="fas fa-home"></i>
            HOMEPAGE ANGGOTA PSIKOLOG
        </h3>
    </div>
</div>
<br>
<hr>

<div class="card text-center">
    <div class="card-header bg-info">
        SELAMAT DATANG
    </div>
    <div class="card-body">
        <h5 class="card-title">SISTEM PENDUKUNG KEPUTUSAN</h5>
        <h2 class="card-title">DIAGNOSIS BANDING GANGGUAN AFEKTIF</h2>
        <p class="card-text">“There is hope, even when your brain tells you there
            isn't.”― John Green, Turtles All the Way Down</p>
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
        <?php  foreach ($baru_mendaftar as $key => $value): ?>
        <li>
            <?php echo $value->nama ?>
        </li>
        <?php endforeach ?>
    </ul>

    <p class="lead">
        Klien yang baru melakukan pendaftaran kembali
    </p>
    <ul>
        <?php  foreach ($belum_diagnosis as $key => $value): ?>
        <li>
            <?php echo $value->nama ?>
        </li>
        <?php endforeach ?>
    </ul>

</div>

<?php endif ?>

</div>
</div>