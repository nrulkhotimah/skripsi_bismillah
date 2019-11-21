<div style="float:right">
    <span class="title font-weight-bold">CATATAN KONSELING</span>
</div>
</div>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Home/index')?>">Home</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Dataklien/index') ?>">Dataklien</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Edit catatan konseling</li>
</ol>
</nav>

<?php echo $this->session->flashdata('sukses'); ?>

<div class="col-md-12">
<table
    class="table table-sm table-bordered"
    style="margin-top:20px;"
    id="result">

    <tbody class="text-center">

        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Masukkan keluhan
                </label>
                <textarea class="form-control  <?php echo form_error('keluhan') ? 'is-invalid':'' ?>" id="keluhan" rows="3" name="keluhan" ><?php echo $diagnosis->keluhan ?> </textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Masukkan intervensi konseling
                </label>
                <textarea class="form-control  <?php echo form_error('catatan') ? 'is-invalid':'' ?>" id="catatan" rows="3" name="catatan" ><?php echo $diagnosis->catatan ?> </textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Masukkan tugas rumah
                </label>
                <textarea class="form-control  <?php echo form_error('tugas_rumah') ? 'is-invalid':'' ?>" id="tugas_rumah" rows="3" name="tugas_rumah" ><?php echo $diagnosis->tugas_rumah ?> </textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Masukkan saran
                </label>
                <textarea class="form-control  <?php echo form_error('saran') ? 'is-invalid':'' ?>" id="saran" rows="3" name="saran" ><?php echo $diagnosis->saran ?> </textarea>
            </div>

            <button class="btn btn-primary" type="submit" style="float:right; width:100px;">Simpan</button>
        </form>
    </tbody>
</table>

</div>
</div>
</div>