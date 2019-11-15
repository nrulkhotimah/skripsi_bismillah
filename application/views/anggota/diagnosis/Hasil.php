<div style="float:right">
    <span class="title font-weight-bold">DIAGNOSIS</span>
</div>
</div>

<!-- ========== pertanyaan 1 =========== -->
<div class="col-md-12 satu">
    <div class="card">
        <div class="card-header">
            Hasil Diagnosis
        </div>
        <div class="card-body">
            Berdasarkan diagnosa, maka pasien menderita <b> <?php echo $diagnosis->nama_gangguan ?> </b>
            <br>
            Deskripsi : <?php echo $diagnosis->deskripsi_gangguan ?>
            <br>
            <hr>
            Fakta yang diderita : 
            <ul>
                <?php foreach ($fakta_diagnosis as $key => $value): ?>
                <li> <?php echo $value->nama_fakta ?></li>
                <li style="list-style-type: none;"> Deskripsi : <?php echo $value->deskripsi_fakta ?></li>
                <?php endforeach ?>
            
            </ul>
        </div>
        <div class="card-footer">
            <div class="float-right">

            </div>
        </div>
    </div>
</div>
<!-- ==================================== -->


