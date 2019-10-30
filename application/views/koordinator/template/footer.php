
            <!-- jQuery CDN - Slim version (=without AJAX) -->
            <script
                src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <!-- Popper.JS -->
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script
                type='text/javascript'
                src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

            <script
                type='text/javascript'
                src="<?php echo base_url();?>assets/font/js/solid.js"></script>
            
            <script
                type='text/javascript'
                src="<?php echo base_url();?>assets/font/js/fontawesome.js"></script>

            <script
                type='text/javascript'
                src="<?php echo base_url();?>assets/js/diagnosis.js"></script>

            
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

            <script>
                $(document).ready(function(){
                    // untuk class satu
                    $("#show1").click(function(){
                        $(".satu").hide();  //.satu ini tu class
                        $(".tiga").show();
                    });
                    $("#save1").click(function(){
                        $(".satu").hide();
                        $(".dua").show();
                    });
                    // ===============

                    // untuk class dua
                    $("#save2").click(function(){
                        $(".dua").hide();
                        $(".tiga").show();
                    });
                    $("#show2").click(function(){
                        $(".dua").hide();
                        $(".tiga").show();
                    });
                    // ===============

                    // untuk class tiga
                    $("#save3").click(function(){
                        $(".tiga").hide();
                        $(".dua").show();
                    });
                    $("#show3").click(function(){
                        $(".tiga").hide();
                        $(".empat").show();
                    });
                    // ===============

                    // untuk class empat
                    $("#save4").click(function(){
                        $(".empat").hide();
                        $(".lima").show();
                    });
                    $("#show4").click(function(){
                        $(".empat").hide();
                        $(".dua").show();
                    });
                    // ===============

                    // untuk class lima
                    $("#save5").click(function(){
                        $(".lima").hide();
                        $(".tujuh").show();
                    });
                    $("#show5").click(function(){
                        $(".lima").hide();
                        $(".enam").show();
                    });
                    // ===============

                    // untuk class enam
                    $("#save6").click(function(){
                        $(".enam").hide();
                        $(".delapan").show();
                    });
                    $("#show6").click(function(){
                        $(".enam").hide();
                        $(".tujuh").show();
                    });
                    // ===============

                    // untuk class tujuh
                    $("#save7").click(function(){
                        $(".tujuh").hide();
                        $(".delapan").show();
                    });
                    $("#show7").click(function(){
                        $(".tujuh").hide();
                        $(".delapan").show();
                    });
                    // ===============

                    // untuk class delapan
                    $("#save8").click(function(){
                        $(".delapan").hide();
                        $(".sembilan").show();
                    });
                    $("#show8").click(function(){
                        $(".delapan").hide();
                        $(".sembilan").show();
                    });
                    // ===============

                    // untuk class sembilan
                    $("#save9").click(function(){
                        $(".sembilan").hide();
                        $(".sepuluh").show();
                    });
                    $("#show9").click(function(){
                        $(".sembilan").hide();
                        $(".duabelas").show();
                    });
                    // ===============

                    // untuk class sepuluh
                    $("#save10").click(function(){
                        $(".sepuluh").hide();
                        $(".sebelas").show();
                    });
                    $("#show10").click(function(){
                        $(".sepuluh").hide();
                        $(".dua").show();
                    });
                    // ===============

                    // untuk class sebelas
                    $("#show11").click(function(){
                        $(".sebelas").hide();  //.satu ini tu class
                        $(".tiga").show();
                    });
                    $("#save11").click(function(){
                        $(".sebelas").hide();
                        $(".dua").show();
                    });
                    // ===============

                    // untuk class duabelas
                    $("#save12").click(function(){
                        $(".duabelas").hide();
                        $(".tiga").show();
                    });
                    $("#show12").click(function(){
                        $(".duabelas").hide();
                        $(".tigabelas").show();
                    });
                    // ===============

                    // untuk class tigabelas
                    $("#save13").click(function(){
                        $(".tigabelas").hide();
                        $(".tiga").show();
                    });
                    $("#show13").click(function(){
                        $(".tigabelas").hide();
                        $(".empatbelas").show();
                    });
                    // ===============

                    // untuk class empatbelas
                    $("#save14").click(function(){
                        $(".empatbelas").hide();
                        $(".tiga").show();
                    });
                    $("#show14").click(function(){
                        $(".empatbelas").hide();
                        $(".limabelas").show();
                    });
                    // ===============

                    // untuk class limabelas
                    $("#save15").click(function(){
                        $(".limabelas").hide();
                        $(".enambelas").show();
                    });
                    $("#show15").click(function(){
                        $(".limabelas").hide();
                        $(".delapanbelas").show();
                    });
                    // ===============

                    // untuk class enambelas == TIDAK - HASIL
                    $("#save16").click(function(){
                        $(".enambelas").hide();
                        $(".tujuhbelas").show();
                    });
                    $("#show16").click(function(){
                        $(".enambelas").hide();
                        $(".dua").show();
                    });
                    // ===============

                    // untuk class tujuhbelas == YA/TIDAK - HASIL
                    $("#save17").click(function(){
                        $(".tujuhbelas").hide();
                        $(".tiga").show();
                    });
                    $("#show17").click(function(){
                        $(".tujuhbelas ").hide();
                        $(".dua").show();
                    });
                    // ===============

                    // untuk class delapanbelas == YA - HASIL
                    $("#save18").click(function(){
                        $(".delapanbelas").hide();
                        $(".tiga").show();
                    });
                    $("#show18").click(function(){
                        $(".delapanbelas").hide();
                        $(".sembilanbelas").show();
                    });
                    // ===============

                    // untuk class sembilanbelas == YA - HASIL
                    $("#save19").click(function(){
                        $(".sembilanbelas").hide();
                        $(".tiga").show();
                    });
                    $("#show19").click(function(){
                        $(".sembilanbelas").hide();
                        $(".duapuluh").show();
                    });
                    // ===============

                    // untuk class duapuluh == YA/TDK - HASIL 
                    $("#save20").click(function(){
                        $(".duapuluh").hide();
                        $(".tiga").show();
                    });
                    $("#show20").click(function(){
                        $(".duapuluh").hide();
                        $(".dua").show();
                    });
                    // ===============

                    // untuk class duasatu
                    $("#save21").click(function(){
                        $(".dua").hide();
                        $(".tiga").show();
                    });
                    $("#show21").click(function(){
                        $(".satu").hide();
                        $(".dua").show();
                    });
                    // ===============

                    // default hide
                    $(".dua").hide();
                    $(".tiga").hide();
                    $(".empat").hide();
                    $(".lima").hide();
                    $(".enam").hide();
                    $(".tujuh").hide();
                    $(".delapan").hide();
                    $(".sembilan").hide();
                    $(".sepuluh").hide();
                    $(".sebelas").hide();
                    $(".duabelas").hide();
                    $(".tigabelas").hide();
                    $(".empatbelas").hide();
                    $(".limabelas").hide();
                    $(".enambelas").hide();
                    $(".tujuhbelas").hide();
                    $(".delapanbelas").hide();
                    $(".sembilanbelas").hide();
                    $(".duapuluh").hide();
                    $(".duasatu").hide();

                });

            </script>

        </body>

    </html>