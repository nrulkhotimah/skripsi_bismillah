<div style="float:right">
    <span class="title font-weight-bold">TAMBAH JADWAL</span>
</div>
</div>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Home/index')?>">Home</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Penjadwalan/index') ?>">Penjadwalan</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Tambah jadwal</li>
</ol>
</nav>

<div class="col-md-12">
<form action="save" method="post" enctype="multipart/form-data">

    <?php echo form_open('koordinator/jadwal/Penjadwalankoor'); ?>

    <div class="form-group">
        <input
            type="nama"
            class="form-control"
            id="nama"
            name="nama"
            aria-describedby="emailHelp"
            value="<?php echo $nama = $this->session->userdata('nama'); ?>"
            placeholder="Nama"
            disabled="disabled">
    </div>

    <div class="form-group">
        <input
            name="nomor_telepon"
            id="nomor_telepon"
            class="form-control"
            value="<?php echo $nomor_telepon = $this->session->userdata('nomor_telepon'); ?>"
            placeholder="Nomor Telepon"
            disabled="disabled">
    </div>

    <div class="form-group">
        <input
            name="kuota"
            id="exampleFormControlInput1"
            type="text"
            class="form-control <?php echo form_error('kuota') ? 'is-invalid':'' ?>"
            placeholder="Kuota Klien">
        <div class="invalid-feedback">
            <?php echo form_error('kuota') ?>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Tanggal konseling</label>
        <input
            name="tanggal"
            id="exampleFormControlInput1"
            type="date"
            class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>">
        <div class="invalid-feedback">
            <?php echo form_error('tanggal') ?>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Waktu Konseling</label>
        <input
            name="waktu"
            id="exampleFormControlInput1"
            type="time"
            class="form-control <?php echo form_error('waktu') ? 'is-invalid':'' ?>">
        <div class="invalid-feedback">
            <?php echo form_error('waktu') ?>
        </div>
    </div>

    <input
        type="submit"
        class="btn btn-primary"
        name="btn"
        value="Save"
        style="float:right; width:100px;"/>
</form>
<?php echo form_close(); ?>
</div>

</div>

</div>
</div>