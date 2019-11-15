<div style="float:right">
    <span class="title font-weight-bold">CATATAN KONSELING</span>
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
    <li class="breadcrumb-item active" aria-current="page">catatan konseling</li>
</ol>
</nav>

<div class="col-md-12">
<table
    class="table table-sm table-bordered"
    style="margin-top:20px;"
    id="result">

    <tbody class="text-center">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Masukkan keluhan
                </label>
                <textarea readonly="" class="form-control  <?php echo form_error('keluhan') ? 'is-invalid':'' ?>" id="keluhan" rows="3" name="keluhan" ><?php echo $diagnosis->keluhan ?> </textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Masukkan catatan konseling
                </label>
                <textarea readonly="" class="form-control  <?php echo form_error('catatan') ? 'is-invalid':'' ?>" id="catatan" rows="3" name="catatan" ><?php echo $diagnosis->catatan ?> </textarea>
            </div>



    </tbody>
</table>

</div>
</div>
</div>