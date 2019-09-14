<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SPK Diagnosis Banding Gangguan Afektif</title>

        <!-- Bootstrap CSS CDN -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/bootstrap.min.css">

        <!-- Our Custom CSS -->
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo base_url();?>assets/css/custom.css">

        <!-- Font Awesome JS -->
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/font/js/solid.js"></script>
        <script
            type='text/javascript'
            src="<?php echo base_url();?>assets/font/js/fontawesome.js"></script>
        <script src="raphael-min.js"></script>
        <script src="flowchart.js"></script>

    </head>

    <body>

        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <ul class="list-unstyled components">
                        <li>
                            <a href="<?php echo site_url('K_Home/edit_Profil')?>" class="btn profile">
                                <img src="../../assets/img/user.png" alt="Avatar"><br>
                                <span>Profile</span>
                            </a>
                            <p class="text-center" style="font:10px !important;">Hello! koordinator</p>
                            <!-- <span >Hello! Admin</span> -->
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('K_Home/index')?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Dataklien/index')?>">Data klien</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Penjadwalan/index')?>">Penjadwalan
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Dataklien/riwayat')?>">Riwayat</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Kriteria/index')?>">Kriteria Keputusan</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url('K_Angpsi/index')?>">Anggota Psikolog</a>
                        </li>
                        <hr>

                        <li>
                            <a href="<?php echo site_url('Login_controller/logout')?>">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>

                    </ul>
                </nav>

                <!-- Page Content -->
                <div id="content">
                    <div class="jumbotron">
                        <button type="button" id="sidebarCollapse" class="btn">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div style="float:right">
                            <span class="title font-weight-bold">KRITERIA KEPUTUSAN</span>

                        </div>

                    </div>
                    <div id="diagram"></div>
                    <script>
                        st => start: Start :> http : //www.google.com[blank]
                        e => end :> http : //www.google.com
                        op1 => operation: My Operation
                        sub1 => subroutine: My Subroutine
                        cond => condition: Yes
                        or No ?:> http : //www.google.com
                        io => inputoutput: catch something ...para => parallel : parallel tasks st - >op1 - >cond cond(yes) -> io - >e cond(no) -> para para(path1, bottom) -> sub1(right) -> op1 para(path2, top) -> op1
                    </script>

                    
                    <script>
                        var diagram = flowchart.parse("the code definition");
                        diagram.drawSVG('diagram');

                        // you can also try to pass options:

                        diagram.drawSVG('diagram', {
                            'x': 0,
                            'y': 0,
                            'line-width': 3,
                            'line-length': 50,
                            'text-margin': 10,
                            'font-size': 14,
                            'font-color': 'black',
                            'line-color': 'black',
                            'element-color': 'black',
                            'fill': 'white',
                            'yes-text': 'yes',
                            'no-text': 'no',
                            'arrow-end': 'block',
                            'scale': 1,
                            // style symbol types
                            'symbols': {
                                'start': {
                                    'font-color': 'red',
                                    'element-color': 'green',
                                    'fill': 'yellow'
                                },
                                'end': {
                                    'class': 'end-element'
                                }
                            },
                            // even flowstate support ;-)
                            'flowstate': {
                                'past': {
                                    'fill': '#CCCCCC',
                                    'font-size': 12
                                },
                                'current': {
                                    'fill': 'yellow',
                                    'font-color': 'red',
                                    'font-weight': 'bold'
                                },
                                'future': {
                                    'fill': '#FFFF99'
                                },
                                'request': {
                                    'fill': 'blue'
                                },
                                'invalid': {
                                    'fill': '#444444'
                                },
                                'approved': {
                                    'fill': '#58C4A3',
                                    'font-size': 12,
                                    'yes-text': 'APPROVED',
                                    'no-text': 'n/a'
                                },
                                'rejected': {
                                    'fill': '#C45879',
                                    'font-size': 12,
                                    'yes-text': 'n/a',
                                    'no-text': 'REJECTED'
                                }
                            }
                        });
                    </script>

                </div>
            </div>

            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script
                src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script
                type='text/javascript'
                src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

            <!-- jQuery Custom Scroller CDN | button menu -->
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $("#sidebar").mCustomScrollbar({theme: "minimal"});

                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar, #content').toggleClass('active');
                        $('.collapse.in').toggleClass('in');
                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    });
                });

                function test() {
                    alert("Hello! I am an alert box!");
                }
            </script>
        </body>

    </html>