<style>
 i {
  border: solid black;
  border-width: 0 1px 1px 0;
  display: inline-block;
  padding: 3px;
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}

.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}
/* ------------------- */
* {margin: 0; padding: 0;}

.tree ul {
	padding-top: 20px; position: relative;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li {
	float: left; text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 1px solid #ccc;
	width: 50%; height: 20px;
}
.tree li::after{
	right: auto; left: 50%;
	border-left: 1px solid #ccc;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
	border-right: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 1px solid #ccc;
	width: 0; height: 20px;
}

.tree li a{
	border: 1px solid #ccc;
	padding: 5px 10px;
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 11px;
	display: inline-block;
	
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
	background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
	border-color:  #94a0b4;
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 10px !important;
    background: #3195c4;
}

.arrow-bottom{
    height: 50px;
    background-color: black;
    width: 10px;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 0px !important;
    padding-left: 0px !important;
}
.row{
    padding: 0 !important
}

textarea{
    width: 100% !important;
}

.text-child{
    font-size: 14px !important;
    margin: 0;
}
.text-white{
    color: white
}
 
</style>

<div style="float:right">
    <span class="title font-weight-bold">KRITERIA KEPUTUSAN</span>
</div>

</div>


<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Home/index')?>">Home</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo site_url('Koor/Kriteria/index') ?>">Kriteria Keputusan</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Edit Kriteria</li>
</ol>
</nav>

<div class="col-md-12">
<?php echo $this->session->flashdata('sukses'); ?>
</div>

<div class="container p-5">
<form method="post">

    <!-- ====== pernyataaan 1 ======= -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="1" id="" rows="3"><?php echo $pengetahuan[1]->pertanyaan?>
            </textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child text-white">Ya</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
            </div>
        </div>
    </div>
    <!-- ======================================== -->

    <!-- ====== pertanyaan 2 ===== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="2" id="" cols="30" rows="3"><?php echo $pengetahuan[2]->pertanyaan?></textarea>
        </div>

        <div class="col-md-2">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ===== hasil 1 ===== -->
        <div class="col-md-3">
            <textarea class="bg-warning" cols="30" rows="3" readonly="readonly"><?php echo $gangguan[1]->nama_gangguan?>
            </textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
            </div>
        </div>
    </div>
    <!-- ============================ -->

    <!-- ====== pertanyaan 3 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="3" id="" cols="30" rows="4"><?php echo $pengetahuan[3]->pertanyaan?>
            </textarea>
        </div>

        <div class="col-md-2">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ====== hasil 2 ====== -->
        <div class="col-md-3">
            <textarea class="bg-warning" cols="30" rows="3" readonly="readonly"><?php echo $gangguan[2]->nama_gangguan?>
            </textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
            </div>
        </div>
    </div>
    <!-- ================================ -->

    <!-- ====== pernyataan 4 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="4" id="" cols="30" rows="3"><?php echo $pengetahuan[4]->pertanyaan?>
            </textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child"></p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
            </div>
        </div>
    </div>
    <!-- ===================================== -->

    <!-- ====== pertanyaan 5 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="5" id="" cols="30" rows="5"><?php echo $pengetahuan[5]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ==== fakta A ==== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $fakta[1]->nama_fakta?></textarea>
        </div>

        <div class="col-md-1">
            <p></p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>
        <!-- ====================== -->

        <!-- ====== pertanyaan 6 || readonly ====== -->
        <div class="col-md-3">
            <textarea
                name="6"
                id=""
                cols="30"
                rows="5"
                readonly="readonly"
                class=" bg-secondary"><?php echo $pengetahuan[6]->pertanyaan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
            </div>
        </div>
    </div>
    <!-- ============================= -->

    <!-- ====== pertanyaan 6 ======  ini yang di ubah -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="6"  cols="30" rows="5" class=" bg-secondary"><?php echo $pengetahuan[6]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ==== fakta B ==== -->
        <div class="col-md-2">
            <textarea class="align-middle bg-warning" rows="5" readonly><?php echo $fakta[2]->nama_fakta?></textarea>
        </div>

        <div class="col-md-1">
            <p></p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>
        <!-- ======================== -->

        <!-- ====== pertanyaan 6 || readonly ====== -->
        <div class="col-md-3">
            <textarea
                name="6"
                id=""
                cols="30"
                rows="5"
                readonly="readonly"
                class=" bg-secondary"><?php echo $pengetahuan[6]->pertanyaan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row justify-content-md-center">
                <p></p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='60px'>
            </div>
        </div>
    </div>
    <!-- =================================== -->

    <div class="row"></div>

    <!-- ====== pertanyaan 7 || ini yg di ubah ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="7" id="" cols="30" rows="4"><?php echo $pengetahuan[7]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ==== fakta C ==== -->
        <div class="col-md-2">
            <textarea class="bg-warning" rows="3" readonly="readonly"><?php echo $fakta[3]->nama_fakta?></textarea>
        </div>

        <div class="col-md-1">
            <p></p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>
        <!-- ========================== -->

        <!-- ====== pertanyaan 9 || readonly ====== -->
        <div class="col-md-3">
            <textarea name="9" id="" cols="30" rows="3" readonly="readonly" class="bg-info"><?php echo $pengetahuan[9]->pertanyaan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
            </div>
        </div>
    </div>
    <!-- ======================================= -->

    <!-- ====== pertanyaan 9 || ini yg di ubah ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="9" id="" cols="30" rows="3" class="bg-info"><?php echo $pengetahuan[9]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ==== fakta D ==== -->
        <div class="col-md-2">
            <textarea class="bg-warning" rows="3" readonly="readonly"><?php echo $fakta[4]->nama_fakta?></textarea>
        </div>

        <div class="col-md-1">
            <p></p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>
        <!-- ====================== -->

        <!-- ====== pertanyaan 10 || readonly ====== -->
        <div class="col-md-3">
            <textarea
                name="10"
                id=""
                cols="30"
                rows="3"
                readonly="readonly"
                class="bg-primary"><?php echo $pengetahuan[10]->pertanyaan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='60px'>
            </div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ====== pertanyaan 10 || ini yg di ubah ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="10" id="" cols="30" rows="3" class="bg-primary"><?php echo $pengetahuan[10]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p ></p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ====== pertanyaan 11 ====== -->
        <div class="col-md-3">
            <textarea name="11" id="" cols="30" rows="3"><?php echo $pengetahuan[11]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">No</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>
        <!-- ================================ -->

        <!-- ====== hasil 3 ====== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[3]->nama_gangguan?></textarea>
        </div>
    </div>
    <!-- ================================ -->

    <!-- pertanyaan collapse -->
    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p>No</p>
                <img src="../../assets/img/bawah3.png" alt="" width='10%' height='300px'>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <div class="row justify-content-md-center">
                        <p class="text-center text-child">No</p>
                        <img src="../../assets/img/bawah.png" alt="" width='10%' height='60px'>
                    </div>
                </div>
            </div>

            <!-- ====== pertanyaan 12 ====== -->
            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <textarea name="12" id="" cols="30" rows="3"><?php echo $pengetahuan[12]->pertanyaan?></textarea>
                </div>

                <div class="col-md-1">
                    <p class="text-center text-child">Ya</p>
                    <img
                        class="align-middle"
                        src="../../assets/img/kanan.png"
                        alt=""
                        width='100%'
                        height='30%'>
                </div>

                <!-- ====== hasil 4 ====== -->
                <div class="col-md-3">
                    <textarea
                        class="bg-warning"
                        cols="30"
                        name=""
                        id=""
                        rows="3"
                        readonly="readonly"><?php echo $gangguan[4]->nama_gangguan?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <div class="row justify-content-md-center">
                        <p class="text-center text-child">No</p>
                        <img src="../../assets/img/bawah.png" alt="" width='10%' height='60px'>
                    </div>
                </div>
            </div>

            <!-- ====== hasil 5 ====== -->
            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[5]->nama_gangguan?></textarea>
                </div>
            </div>

        </div>
    </div>

    <!-- ====== pertanyaan 13 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="13" id="" cols="30" rows="3"><?php echo $pengetahuan[13]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ====== hasil 6 ====== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[6]->nama_gangguan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='100px'>
            </div>
        </div>
    </div>
    <!-- ============================= -->

    <!-- ====== pertanyaan 14 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="14" id="" cols="30" rows="3"><?php echo $pengetahuan[14]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ===== hasil 7 ===== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[7]->nama_gangguan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='100px'>
            </div>
        </div>
    </div>
    <!-- ============================== -->

    <!-- ====== pertanyaan 15 ======= -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="15" id="" cols="30" rows="3"><?php echo $pengetahuan[15]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ===== hasil 8 ===== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[8]->nama_gangguan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='100px'>
            </div>
        </div>
    </div>
    <!-- ================================ -->

    <!-- ====== pertanyaan 16 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="16" id="" cols="30" rows="3"><?php echo $pengetahuan[16]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>
        <!-- ============================= -->

        <!-- ========= pertanyaan 17 =========== -->
        <div class="col-md-3">
            <textarea name="17" id="" cols="30" rows="3"><?php echo $pengetahuan[17]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>
        <!-- ======================================== -->

        <!-- ====== hasil 9 ====== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[9]->nama_gangguan?></textarea>
        </div>
    </div>

    <!-- row collapse -->
    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p>No</p>
                <img src="../../assets/img/bawah3.png" alt="" width='10%' height='300px'>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <div class="row justify-content-md-center">
                        <p class="text-center text-child">No</p>
                        <img src="../../assets/img/bawah.png" alt="" width='10%' height='60px'>
                    </div>
                </div>
            </div>

            <!-- ====== pertanyaan 18 ====== -->
            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <textarea name="18" id="" cols="30" rows="3"><?php echo $pengetahuan[18]->pertanyaan?></textarea>
                </div>

                <div class="col-md-1">
                    <p class="text-center text-child">Ya</p>
                    <img
                        class="align-middle"
                        src="../../assets/img/kanan.png"
                        alt=""
                        width='100%'
                        height='30%'>
                </div>

                <!-- ========= hasil 10 =========== -->
                <div class="col-md-3">
                    <textarea
                        class="bg-warning"
                        cols="30"
                        name=""
                        id=""
                        rows="3"
                        readonly="readonly"><?php echo $gangguan[10]->nama_gangguan?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <div class="row justify-content-md-center">
                        <p class="text-center text-child">No</p>
                        <img src="../../assets/img/bawah.png" alt="" width='10%' height='60px'>
                    </div>
                </div>
            </div>

            <!-- ========= hasil 11 =========== -->
            <div class="row">
                <div class="col-md-3 offset-md-2">
                    <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[11]->nama_gangguan?></textarea>
                </div>
            </div>

        </div>
    </div>

    <!-- ====== pertanyaan 19 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="19" id="" cols="30" rows="3"><?php echo $pengetahuan[19]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ====== hasil 12 ====== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[12]->nama_gangguan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='100px'>
            </div>
        </div>
    </div>

    <!-- ====== pertanyaan 20 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="20" id="" cols="30" rows="4"><?php echo $pengetahuan[20]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ====== hasil 13 ====== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[13]->nama_gangguan?></textarea>
        </div>
    </div>
    <!-- ============================= -->

    <!-- ============== Garis =============== -->
    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='100px'>
            </div>
        </div>
    </div>
    <!-- ============== Garis =============== -->

    <!-- ====== pertanyaan 21 ====== -->
    <div class="row">
        <div class="col-md-3">
            <textarea name="21" id="" cols="30" rows="3"><?php echo $pengetahuan[21]->pertanyaan?></textarea>
        </div>

        <div class="col-md-1">
            <p class="text-center text-child">Ya</p>
            <img
                class="align-middle"
                src="../../assets/img/kanan.png"
                alt=""
                width='100%'
                height='30%'>
        </div>

        <!-- ====== hasil 14 ====== -->
        <div class="col-md-2">
            <textarea class="bg-warning" name="" id="" rows="3" readonly="readonly"><?php echo $gangguan[14]->nama_gangguan?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="row justify-content-md-center">
                <p class="text-center text-child">No</p>
                <img src="../../assets/img/bawah.png" alt="" width='10%' height='100px'>
            </div>
        </div>
    </div>

    <!-- ====== hasil 15 ====== -->
    <div class="row">
        <div class="col-md-2">
            <textarea class="bg-warning" rows="3" readonly="readonly"><?php echo $gangguan[15]->nama_gangguan?></textarea>
        </div>
    </div>

    <button class="btn btn-primary">Simpan</button>

</form>

</div>
</div>
</div>