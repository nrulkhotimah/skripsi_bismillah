<div style="float:right">
    <span class="title font-weight-bold">LIHAT DESKRIPSI</span>
</div>
</div>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Ang/Home/index')?>">Home</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Ang/Kriteria/index') ?>">Kriteria Keputusan</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Lihat Deskripsi</li>
</ol>
</nav>

<div class="row">
<div class="col-md-12">
    <div class="col-md-12 input-group mb-3">
        <select class="custom-select" name="filter">
            <option selected="selected">Pilih deskripsi</option>

            <?php foreach($gangguan as $key => $value): ?>
            <option
                value="DESKRIPSI GANGGUAN"
                label="<?php echo $value->nama_gangguan ?>"
                nama="deskripsi[<?php echo $value->id?>]"
                deskripsi="<?php echo $value->deskripsi_gangguan?>"><?php echo $value->nama_gangguan ?></option>
            <?php endforeach ?>

            <?php foreach($fakta as $key => $value): ?>
            <option
                value="DESKRIPSI FAKTA"
                label="<?php echo $value->nama_fakta?>"
                nama="fakta[<?php echo $value->id?>]"
                deskripsi="<?php echo $value->deskripsi_fakta ?>"><?php echo $value->nama_fakta ?></option>
            <?php endforeach ?>
        </select>
        <div class="input-group-append">
            <label class="input-group-text">Search</label>
        </div>
    </div>
    <div class="col-md-12">
        <?php echo $this->session->flashdata('sukses'); ?>
    </div>
</div>
</div>

<form method="post" id="form-semua">
<div class="row">
    <div class="col-md-6">
        <div class="col-md-12">
            <span class="font-weight-bold">DESKRIPSI GANGGUAN</span>
            <hr>
            <!-- ============= Gangguan ============ -->
            <?php  foreach ($gangguan as $key => $value): ?>
            <div class="form-group">
                <label ><?php echo $value->nama_gangguan ?></label>
                <textarea
                    readonly=""
                    class="form-control disabled"
                    rows="4"
                    name="deskripsi[<?php echo $value->id ?>]"><?php echo $value->deskripsi_gangguan ?></textarea>
            </div>
            <hr>
            <?php endforeach ?>

        </div>
    </div>

    <div class="col-md-6">
        <div class="col-md-12">
            <span class="font-weight-bold">FAKTA</span>
            <hr>
            <!-- ============= Fakta ============ -->
            <?php  foreach ($fakta as $key => $value): ?>
            <div class="form-group">
                <label ><?php echo $value->nama_fakta ?></label>
                <textarea readonly="" class="form-control disabled" rows="4" name="fakta[<?php echo $value->id ?>]"><?php echo $value->deskripsi_fakta ?></textarea>
            </div>
            <hr>
            <?php endforeach ?>

        </div>
    </div>

</div>
</form>

<form method="post" id="form-filter" style="display: none;">
<div class="col-md-6">
    <span class="font-weight-bold" id="desk_fakt"></span>
    <hr>

    <div class="form-group">
        <label id="label-filter"></label>
        <textarea readonly="" id="text-filter" class="form-control disabled" rows="4" name=""></textarea>
    </div>
</div>

</form>

<script>
$(document).ready(function () {
    $("select[name=filter]").on("change", function () {
        var val = $("option:selected").val();
        var label = $("option:selected").attr("label");
        var nama = $("option:selected").attr("nama");
        var deskripsi = $("option:selected").attr("deskripsi");

        $("#form-semua").hide();
        $("#form-filter").show();

        $(".alert-info").hide();
        $("#desk_fakt").html(val);
        $("#label-filter").html(label);
        $("#text-filter").attr("name", nama);
        $("#text-filter").val(deskripsi);

    })

})
</script>