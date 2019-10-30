<div style="float:right">
    <span class="title font-weight-bold">TAMBAH JADWAL</span>
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
    <li class="breadcrumb-item active" aria-current="page">Tambah jadwal</li>
</ol>
</nav>

<div class="col-md-12">
<form action="save" method="post" enctype="multipart/form-data">

    <?php echo form_open('anggota/jadwal/Penjadwalanang'); ?>

    <div class="form-group">
        <input
            type="nama"
            class="form-control"
            id="nama"
            aria-describedby="emailHelp"
            value="<?php echo $nama = $this->session->userdata('nama'); ?>"
            placeholder="Nama"
            readonly="">
            <input type="hidden" name="id_user" value="<?php echo $nama = $this->session->userdata('id'); ?>">
    </div>

    <div class="form-group">
        <input
            id="nomor_telepon"
            class="form-control"
            value="<?php echo $nomor_telepon = $this->session->userdata('nomor_telepon'); ?>"
            placeholder="Nomor Telepon"
            readonly="">
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
        <!-- <label for="exampleFormControlInput1">Hari </label> -->
        <input
            name="hari"
            id="exampleFormControlInput1"
            type="text"
            class="form-control <?php echo form_error('hari') ? 'is-invalid':'' ?>"
            placeholder="Hari">
        <div class="invalid-feedback">
            <?php echo form_error('hari') ?>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Waktu Konseling</label>
        <input
            name="waktu"
            id="exampleFormControlInput1"
            type="text"
            class="form-control <?php echo form_error('waktu') ? 'is-invalid':'' ?>">
        <div class="invalid-feedback">
            <?php echo form_error('waktu') ?>
        </div>
    </div>

<button class="btn btn-primary">Simpan</button>
</form>
<?php echo form_close(); ?>
</div>

</div>

</div>
</div>