<div style="float:right">
    <span class="title font-weight-bold">RIWAYAT DIAGNOSIS KLIEN</span>
</div>
</div>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Dataklien/index')?>">Home</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Dataklien/riwayat') ?>">Riwayat</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Dataklien/seluruhriwayat') ?>">Lihat Riwayat Seluruh Klien</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Lihat riwayat</li>
</ol>
</nav>

<div class="col-md-12">
<tr>
    <th>
        <span class="font-weight-bold">Nama klien :
            <?php echo $user->nama ?>
        </span>
        <br>
    </th>
</tr>
<tr>
    <td>
        <span class="font-weight-bold">Nama Psikolog :
            <?php echo $this->session->userdata("nama") ?>
        </span>
    </td>
</tr>
<!-- data tabel -->
<table
    class="table table-sm table-bordered"
    style="margin-top:20px;"
    id="result">
    <thead class="text-center">
        <tr>
            <th class="align-middle col5">No</th>
            <th class="align-middle col15">Tanggal</th>
            <th class="align-middle col20">Hasil Diagnosis</th>
            <th class="align-middle col30">Keluhan</th>
            <th class="align-middle col30">Catatan Konseling</th>
        </tr>
    </thead>

    <tbody class="text-center">
        <?php foreach ($riwayat as $key => $value): ?>
        <tr>
            <td class="align-middle"><?php echo $key+1 ?></td>
            <td class="align-middle"><?php echo date("d F Y", strtotime($value->waktu_daftar)) ?></td>

            <td class="align-middle">
                <?php if (!isset($diagnosis[$key]->nama_gangguan)): ?>
                Belum melakukan Diagnosis
            <?php else: ?>
                <?php echo $diagnosis[$key]->nama_gangguan ?>
                <?php endif ?></td>
            <td class="align-middle">
                <?php if (!isset($diagnosis[$key]->keluhan)): ?>
                Belum melakukan Diagnosis
            <?php else: ?>
                <?php echo $diagnosis[$key]->keluhan ?>
                <?php endif ?></td>

            <td class="align-middle">
                <?php if (!isset($diagnosis[$key]->catatan)): ?>
                Belum melakukan Diagnosis
            <?php else: ?>
                <?php echo $diagnosis[$key]->catatan ?>
                <?php endif ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>

</div>
</div>