<div style="float:right">
    <span class="title font-weight-bold">HOME</span>
</div>
</div>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Home/index')?>">Home</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Inbox/index') ?>">Pilih Klien</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Pesan</li>
</ol>
</nav>

<div class="col-md-12 " style="padding-top: 20px !important;">

<?php foreach ($pesan as $key => $value): ?>
<?php if($value->dari_user==$id_login): ?>
<div
    class="card text-dark bg-info mb-3 float-right"
    style="max-width: 50rem;">
    <div class="card-body">
        <p class="card-text text-dark float-left">
            <?php echo $value->tanggal_kirim_pesan?>
        </p>
        <p class="card-text text-dark float-right">
            <?php echo $value->status_pesan?></p>
        <div class="clearfix"></div>
        <h5 class="card-title">
            <?php echo $value->isi_pesan?></h5>
    </div>
</div>
<div class="clearfix"></div>
<?php else: ?>
<div class="card text-dark bg-light mb-3 " style="max-width: 40rem;">
    <div class="card-body">
        <p class="card-text text-dark float-left">
            <?php echo $value->tanggal_kirim_pesan?>
        </p>
        <div class="clearfix"></div>
        <h5 class="card-title">
            <?php echo $value->isi_pesan?></h5>
    </div>
</div>
<div class="clearfix"></div>
<?php endif ?>
<?php endforeach ?>

<form method="post" action="<?php echo base_url("koor/inbox/tambah_pesan") ?>">
    <input type="hidden" name="kepada_user" value="<?php echo $kepada_user ?>">
    <div class="form-group">
        <textarea class="form-control" name="isi_pesan" placeholder="tulis disini"></textarea>
    </div>
    <button class="btn btn-primary">Kirim</button>
</form>

</div>