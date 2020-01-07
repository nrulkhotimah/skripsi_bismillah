<div style="float:right">
    <span class="title font-weight-bold">EDIT JADWAL</span>
</div>
</div>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Ang/Home/index')?>">Home</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Ang/Penjadwalan/index') ?>">Penjadwalan</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Edit penjadwalan psikolog</li>
</ol>
</nav>

<div class="col-md-12">
<form
    action="<?php echo base_url('index.php/Ang/Penjadwalan/update/'.$user->id) ?>"
    method="post"
    enctype="multipart/form-data">

    <div class="form-group">
        <label for="kuota">Kuota</label>
        <input
            name="kuota"
            type="number"
            class="form-control <?php echo form_error('kuota') ? 'is-invalid':'' ?>"
            id="kuota"
            value="<?php echo $user->kuota ?>">
        <div class="invalid-feedback">
            <?php echo form_error('kuota') ?>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <label for="exampleFormControlInput1">Hari</label>
            <select
                class="form-control   <?php echo form_error('hari') ? 'is-invalid':'' ?>"
                name="hari"s>
                <option <?php if($user->hari == 'Sun') { echo 'selected';}?>>Sun</option>
                <option <?php if($user->hari == 'Mon') { echo 'selected';}?>>Mon</option>
                <option <?php if($user->hari == 'Tue') { echo 'selected';}?>>Tue</option>
                <option <?php if($user->hari == 'Wed') { echo 'selected';}?>>Wed</option>
                <option <?php if($user->hari == 'Thu') { echo 'selected';}?>>Thu</option>
                <option <?php if($user->hari == 'Fri') { echo 'selected';}?>>Fri</option>
                <option <?php if($user->hari == 'Sat') { echo 'selected';}?>>Sat</option>
            </select>
            <div class="invalid-feedback">
                <?php echo form_error('hari') ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Waktu Konseling</label>
        <input
            name="waktu"
            type="text"
            class="form-control  <?php echo form_error('waktu') ? 'is-invalid':'' ?>"
            id="waktu"
            value="<?php echo $user->waktu ?>">
        <div class="invalid-feedback">
            <?php echo form_error('waktu') ?>
        </div>
    </div>

    <input
        type="submit"
        class="btn btn-primary"
        name="btn"
        value="Save"
        style="float:right;"/>
</form>
</div>

</div>
</div>