
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

textarea{
    width: 100% !important;
}

.text-child{
    font-size: 14px !important;
    margin: 0;
}
 
 </style>
 
                        <div style="float:right">
                            <span class="title font-weight-bold">KRITERIA KEPUTUSAN</span>

                        </div>

                    </div>


                    <div id="diagram"></div>
                        <div class="container p-5">

                            <div class="row">
                                <div class="col-md-3">
                                    <textarea name="" id="" rows="5">Afek yang depresif, manik, ekspansif atau iritabel</textarea>
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
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <textarea name="" id="" cols="30" rows="5">Akibat fsiologik langsung dari penyakit umum?</textarea>
                                </div>

                                <div class="col-md-2">
                                    <p class="text-center text-child">Ya</p>
                                    <img class="align-middle" src="../../assets/img/kanan.png" alt="" width='100%' height='30%'>
                                </div>

                                <div class="col-md-3">
                                    <textarea class="bg-warning" name="" id="" cols="30" rows="5"> GANGGUAN AFEKTIF AKIBAT PENYAKIT UMUM</textarea>
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

                            <div class="row">
                                <div class="col-md-3">
                                    <textarea name="" id="" cols="30" rows="5">Akibat fsiologik langsung suatu zat (misal obat yg disalahgunakan,medikasi,toksin)?</textarea>
                                </div>

                                <div class="col-md-2">
                                    <p class="text-center text-child">Ya</p>
                                    <img class="align-middle" src="../../assets/img/kanan.png" alt="" width='100%' height='30%'>
                                </div>

                                <div class="col-md-3">
                                    <textarea class="bg-warning" name="" id="" cols="30" rows="5"> GANGGUAN AFEKTIF AKIBAT ZAT</textarea>
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

                            <div class="row">
                                <div class="col-md-3">
                                    <textarea name="" id="" cols="30" rows="5"> Tentukan tipe dari episode afektif yang kini dan yang lalu</textarea>
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

                            <div class="row">
                                <div class="col-md-3">
                                    <textarea name="" id="" cols="30" rows="5">Afek yang depresif, manik, ekspansif atau iritabel sedikitnya 1 minggu gangguannya hebat atau hospitalisasi?</textarea>
                                </div>

                                <div class="col-md-2">
                                    <p class="text-center text-child">Ya</p>
                                    <img class="align-middle" src="../../assets/img/kanan.png" alt="" width='100%' height='30%'>
                                </div>

                                <div class="col-md-3">
                                    <textarea class="bg-warning" name="" id="" cols="30" rows="5">EPISODE MANIK</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row justify-content-md-center">
                                        <p class="text-center text-child">No</p>
                                        <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
                                    </div>
                                </div>
                                <div class="col-md-3 offset-md-2">
                                    <div class="row justify-content-md-center">
                                        <!-- <p class="text-center text-child">No</p> -->
                                        <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <textarea class="bg-warning" name="" id="" cols="30" rows="5">EPISODE HIPOMANIK</textarea>
                                </div>

                                <div class="col-md-2">
                                    <p class="text-center text-child">No</p>
                                    <img class="align-middle" src="../../assets/img/kanan.png" alt="" width='100%' height='30%'>
                                </div>

                                <div class="col-md-3">
                                    <textarea name="" id="" cols="30" rows="5">Afek yang depresif, manik, ekspansif atau iritabel sedikitnya 4 hari, perubahan tampak oleh orang lain namun lebih ringan daripada episode manik?</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row justify-content-md-center">
                                        <p class="text-center text-child"></p>
                                        <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
                                    </div>
                                </div>
                                <div class="col-md-3 offset-md-2">
                                    <div class="row justify-content-md-center">
                                        <p class="text-center text-child">No</p>
                                        <img src="../../assets/img/bawah.png" alt="" width='10%' height='50px'>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <textarea name="" id="" cols="30" rows="5">EPISODE DEPRESI BERAT</textarea>
                                </div>

                                <div class="col-md-2">
                                    <p class="text-center text-child">Ya</p>
                                    <img class="align-middle" src="../../assets/img/kanan.png" alt="" width='100%' height='30%'>
                                </div>

                                <div class="col-md-3">
                                    <textarea name="" id="" cols="30" rows="5">Sedikitnya 2 minggu afek depresif atau hilangnya minat ditambah gejala terkait dan tidak disebabkan oleh berkabung?</textarea>
                                </div>
                            </div>

                            <!-- <form method="post">
                            <div style="width: 18rem;">
                                <textarea class="form-control" name="" id="" rows="5"> loregdgdfgdfgdfgdfgdfgdf</textarea>
                            </div>

                            <div style="width: 18rem; padding: 0rem 8.6rem 0rem 9rem;">
                                <div style="border-right: 1px solid black; height: 50px;"></div>
                                <i class="down"></i>
                            </div>

                            <div style="width: 18rem;">
                                <textarea class="form-control" name="" id="" rows="5"> loregdgdfgdfgdfgdfgdfgdf</textarea>
                            </div>
                            
                            
                            </form> -->

                            <!-- <div class="tree">
                                <ul>
                                    <li>
                                        <a href="#"><textarea class="text-center align-middle" name="" id="" rows="3">Afek yang depresif, manik, ekspansif atau iritabel</textarea></a>
                                        <ul>
                                            <li>
                                                <a href="#"><textarea class="text-center align-middle" name="" id="" rows="3">Akibat fsiologik langsung dari penyakit umum?</textarea></a>
                                                <ul>
                                                    <li><a href="#">Pertanyaan 3</a></li>
                                                    <li><a href="#">Hasil 1</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>         -->
                        </div>

                </div>
            </div>

