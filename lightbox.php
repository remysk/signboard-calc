<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lightbox</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body onload="calculate()">
    <div class="container">
        <div class="spacer"></div>
        <h2>Lightbox</h2>
        <div class="spacer"></div>

        <div class="row">
            <div class="col-12 col-md-6">
                <form action="" method="get">

        
                    <div class="md-form">
                        <p>Jenis:
                            <select name="jenis" id="type">
                                <option>Lightbox</option>
                                <option onclick="window.location.href='index.html'">Biasa</option>
                                <option onclick="window.location.href='no-frame.html'">No Frame</option>
                            </select>
                        </p>
                        <p>Frame Material:
                            <select name="" id="material" onchange="calculate()">
                                <option value="besi">Biasa</option>
                                <option value="alu">Aluminium</option>
                            </select>
                        </p>
                        <p>Sisi:
                            <select name="" id="sisi" onchange="calculate()">
                                <option value="1">Depan</option>
                                <option value="2">Depan & Belakang</option>
                            </select>
                        </p>
                        <p>Saiz: <input type="number" name="lebar" id="lebar" class="calc" step=0.1 value=4> x <input type="number" name="tinggi" id="tinggi" class="calc" step=0.1 value=4> kaki </p>
                        
                        <p>Laminated <input type="checkbox" name="laminate" id="laminate" checked="true" class="calc"></p>
                        
                        <div class="hide">
                        <p>Tengah (support)</p>

                        <p>&emsp;Bilangan melintang: <input type="number" name="horizontal" id="horizontal" value=0 class="calc" step=1> unit </p>

                        <p>&emsp;Bilangan menegak: <input type="number" name="vertical" id="vertical" value=0 class="calc" step=1> unit </p>
                        
                        </div>
                        <!-- <p>Tiang bulat 2x2: </p>

                        <p>&emsp;Bilangan: <input type="number" name="tiang2x2_qty" id="tiang2x2_qty" value=0 class="calc" step=1> unit </p>

                        <p>&emsp;Tinggi: <input type="number" name="tiang2x2_height" id="tiang2x2_height" value=0 class="calc" step=0.1> kaki </p> -->

                        <!-- <p>Tiang petak 1x1: </p>

                        <p>&emsp;Bilangan: <input type="number" name="tiang1x1_qty" id="tiang1x1_qty" value=0 class="calc" step=1> unit </p>

                        <p>&emsp;Tinggi: <input type="number" name="tiang1x1_height" id="tiang1x1_height" value=0 class="calc" step=0.1> kaki </p> -->

                        <!-- <p>&emsp;Kaki/Tapak (anggaran): <input type="number" name="" id="tapak" value=0 class="calc" step=0.1> kaki</p> -->
                        <!-- <p>Wiring: <input type="number" name="wiring" id="wiring" class="calc" value=0> kaki</p> -->

                        <!-- <p>Lampu LED: <input type="number" name="led" id="led" step=1></p> -->
                         
                        <p>Upah Pasang 
                            <select id="upah" class="calc">
                                <option value="0">Sendiri</option>
                                <option value="1">Tingkat bawah</option>
                                <option value="2">Tingkat atas</option>
                                <option value="3">Lain-lain</option>
                            </select>
                            <input type="number" name="" id="upah-plus" class="calc" placeholder="nyatakan">
                        </p>
                     
                        <p>Kuantiti: <input type="number" name="qty" id="qty" class="calc" value=1 min=1></p>
                     
                    </div>
                </form>

            </div>
            <!--end col 6 -->

            <div class="col-12 col-md-6">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Material</th>
                        <th>Unit</th>
                        <th>Harga seunit</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="3">Anggaran Kos</th>
                        <th id="output-cost"></th>
                    </tr>
                    <tr>
                        <th colspan="3">Kos Jualan</th>
                        <th id="output-price"></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Square Pipe</td>
                        <td id="output-sq-pipe"></td>
                        <td id="output-sq-pipe-pr"></td>
                        <td id="output-sq-pipe-ttl"></td>
                    </tr>
                    <tr>
                        <td>Colorbond</td>
                        <td id="output-colorbond"></td>
                        <td id="output-colorbond-pr"></td>
                        <td id="output-colorbond-ttl"></td>
                    </tr>
                    <tr>
                        <td>Poly</td>
                        <td id="output-poly"></td>
                        <td id="output-poly-pr"></td>
                        <td id="output-poly-ttl"></td>
                    </tr>
                    <tr>
                        <td>Aluminium Angle</td>
                        <td id="output-allu-angle"></td>
                        <td id="output-allu-angle-pr"></td>
                        <td id="output-allu-angle-ttl"></td>
                    </tr>
                    <tr>
                        <td>Sticker</td>
                        <td id="output-sticker"></td>
                        <td id="output-sticker-pr"></td>
                        <td id="output-sticker-ttl"></td>
                    </tr>
                    <tr>
                        <td>Wire(Dalam)</td>
                        <td id="output-wiring"></td>
                        <td id="output-wiring-pr"></td>
                        <td id="output-wiring-ttl"></td>
                    </tr>
                    <tr>
                        <td>Wire(luar) +plug</td>
                        <td id="output-wiring-out"></td>
                        <td id="output-wiring-out-pr"></td>
                        <td id="output-wiring-out-ttl"></td>
                    </tr>
                    <tr>
                        <td>Lampu LED</td>
                        <td id="output-led"></td>
                        <td id="output-led-pr"></td>
                        <td id="output-led-ttl"></td>
                    </tr>
                    <tr>
                        <td colspan=3>Elektrik / Welding</td>
                        <td id="output-electricity-ttl"></td>
                    </tr>
                    <tr>
                        <td>Bracket</td>
                        <td id="output-bracket"></td>
                        <td id="output-bracket-pr"></td>
                        <td id="output-bracket-ttl"></td>
                    </tr>
                    <tr>
                        <td colspan=3>Upah Pasang</td>
                        <td id="output-upah"></td>
                    </tr>
                </tbody>
            </table>
        
            </div>
        </div>
        <!--end row-->


        <div class="vh-100">

        </div>
    </div><!--end container-->


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script>


        //start manipulate values
        $(".calc").change(calculate)

        function calculate() {
            
            sisi = $("#sisi").val();
            lebar = Number($("#lebar").val());
            tinggi = Number($("#tinggi").val());
            melintang = Number($("#horizontal").val());
            menegak = Number($("#vertical").val());
            qty = Number($("#qty").val());
            upah = $("#upah").val();
            //tiang2x2 = Number($("#tiang2x2_height").val() * $("#tiang2x2_qty").val())
            //tiang1x1 = Number(($("#tiang1x1_height").val() * $("#tiang1x1_qty").val()) + parseInt($("#tapak").val(), 10))
         
            //calculate square pipe usage
            if ($("#material").val() == "besi") {
                frame_pr = square_pipe
            } else if ($("#material").val() == "alu") {
                frame_pr = alu_pipe
            }
           // sum = sum(lebar, tinggi)
            //console.log(sum)

            //calculate colorbond/sticker/poly
            if ($('#laminate').is(":checked"))
            {
                sticker_type = 0
            }else{
                sticker_type = 1
            }

            sticker_ttl = countSticker(lebar, tinggi, sticker_type)

            if (sisi == 1) {
                
                if(lebar <= 5){ 
                    frame = sum(lebar*4,tinggi*5,4,2) //1 tiang tengah
                    $("#horizontal").val(1)
                }
                else if(lebar > 5 && lebar <= 10){ 
                    frame = sum(lebar*5,tinggi*6,4,4) //2 tiang tengah
                    $("#horizontal").val(2)
                }
                else if(lebar > 10 && lebar <= 13){ 
                    frame = sum(lebar*5,tinggi*7,4,6) //3 tiang tengah
                    $("#horizontal").val(3)
                }
                else if(lebar > 13 && lebar <= 16){ 
                    frame = sum(lebar*5,tinggi*8,4,6) //4 tiang tengah
                    $("#horizontal").val(4)
                }
                else if(lebar > 16 && lebar < 19){ 
                    frame = sum(lebar*5,tinggi*9,4,8) //5 tiang tengah
                    $("#horizontal").val(5)
                }
                else if(lebar >= 19){ 
                    frame = sum(lebar*5,tinggi*10,4,10) //6 tiang tengah
                    $("#horizontal").val(6)
                }
                colorbond_ttl = (colorbond*saiz).toFixed(2) //colorbond 1 side
                poly_ttl = (poly*saiz).toFixed(2) //poly for 1 side
                //sticker_ttl = (sticker*saiz).toFixed(2) //sticker for 1 side
                $("#output-sticker").html(saiz*qty);
                $("#output-poly").html(saiz*qty);
                $("#output-colorbond").html(saiz*qty);
            }
            else if(sisi == 2){
                //unfinished
                if(lebar <= 5){ 
                    frame = sum(lebar*4,tinggi*4,4,4
                    ) 
                }
                else if(lebar > 5 && lebar <= 10){ 
                    frame = sum(lebar*4,tinggi*4,4,6) 
                }
                else if(lebar > 10 && lebar <= 13){ 
                    frame = sum(lebar*4,tinggi*4,4,8) 
                }
                else if(lebar > 13 && lebar <= 16){ 
                    frame = sum(lebar*4,tinggi*4,4,10) 
                }
                else if(lebar > 16 && lebar < 19){ 
                    frame = sum(lebar*4,tinggi*4,4,12) 
                }
                else if(lebar >= 19){ 
                    frame = sum(lebar*4,tinggi*4,4,14) 
                }
                colorbond_ttl = (colorbond*0).toFixed(2) //no colorbond needed for 2 sides
                poly_ttl = (poly*saiz*2).toFixed(2) //poly for 2 sides
                sticker_ttl = (sticker_ttl*2).toFixed(2) //sticker for 2 sides
                $("#output-sticker").html(saiz*2*qty);
                $("#output-poly").html(saiz*2*qty);
                $("#output-colorbond").html(0);
            }  
 
            //sq_pipe = lebar * 4 + tinggi * 4 + (lebar * melintang) + melintang + (tinggi * menegak) + menegak + 4 
            
            sq_pipe_pr = (frame * frame_pr).toFixed(2)

            //calculate aluminium angle
            if(lebar<5 && tinggi<5){
                allu_angle = (lebar * 4) + (tinggi * 4) + 4
            }
            else{
                allu_angle = (lebar * 6) + (tinggi * 4) + 4
            }
            allu_angle_ttl = (allu_angle*aluminium_angle).toFixed(2)

          //  tiang2x2_ttl = (tiang2x2*besi_tiang).toFixed(2)
            
            
            if(lebar<5 && tinggi<5){
                wire_dalam = lebar*2 +3
                lampu_qty = 2
                wire = 12
                bracket_qty = 2
            }
            else{ 
                wire_dalam = lebar*3+3
                lampu_qty = Math.max(Math.floor(lebar/4),2)*3
                wire = lebar*3+3
                bracket_qty = 4
            }
            wire_luar = 5 //kaki
            wire_luar_ttl = 5*wiring+box_wire+plug
            lampu_ttl = lampu_qty*lampuled
            bracket_ttl = bracket_qty*bracket
            
            wiring_meter = (wire * 0.3048).toFixed(2)
            wiring_p = (wiring_meter * wiring).toFixed(2)
            
            switch (upah) {
                case "0":
                    upah_pr = 0
                    break;
                case "1":
                    upah_pr = upah_1
                    break;
                case "2":
                    upah_pr = upah_2
                    break;
                case "3":
                    // upah_pr = upah_3
                    $("#upah-plus").show();
                    upah_pr = $("#upah-plus").val();
                    break;
            
                default:
                    upah_pr = 0
                    break;
            }

            cost_ttl = 
                  (Number(sq_pipe_pr)
                + Number(allu_angle_ttl)
                + Number(colorbond_ttl)
                + Number(sticker_ttl)
                + Number(wiring_p)
                + Number(lampu_ttl)
                + Number(bracket_ttl)
                + Number(electric)
                + Number(upah_pr)
                + Number(wire_luar_ttl))
                * qty
            
            price = cost_ttl + (cost_ttl*sale_margin/100)

            // //output table
            $("#output-sq-pipe").html(frame*qty);
            $("#output-sq-pipe-pr").html(frame_pr);
            $("#output-sq-pipe-ttl").html(sq_pipe_pr*qty);
            
            $("#output-allu-angle").html(allu_angle*qty);
            $("#output-allu-angle-pr").html(aluminium_angle);
            $("#output-allu-angle-ttl").html(allu_angle_ttl*qty);
            
            
            $("#output-colorbond-pr").html(colorbond);
            $("#output-colorbond-ttl").html(colorbond_ttl*qty);

            $("#output-poly-pr").html(poly);
            $("#output-poly-ttl").html(poly_ttl*qty);
            
            $("#output-upah").html(upah_pr*qty);

            //$("#output-sticker-pr").html(sticker_pr);
            $("#output-sticker-ttl").html(sticker_ttl*qty);
            
            $("#output-wiring").html(wiring_meter*qty)
            $("#output-wiring-pr").html(wiring)
            $("#output-wiring-ttl").html(wiring_p*qty)
            
            $("#output-led").html(lampu_qty*qty)
            $("#output-led-pr").html(lampuled)
            $("#output-led-ttl").html(lampu_ttl*qty)
            
            $("#output-bracket").html(bracket_qty*qty)
            $("#output-bracket-pr").html(bracket)
            $("#output-bracket-ttl").html((bracket_ttl*qty).toFixed(2))

            $("#output-electricity-ttl").html(electric*qty)
            
            $("#output-wiring-out").html(5*qty)
            $("#output-wiring-out-pr").html(wiring)
            $("#output-wiring-out-ttl").html((wire_luar_ttl*qty).toFixed(2))
            
            $("#output-cost").html(cost_ttl.toFixed(2))
            $("#output-price").html(price.toFixed(2))
        } //end function calc
    </script>
    <!-- <iframe src='https://www.embed.com/app/calculator/gray-calculator.html' style='width: 500px; height: 500px;' scrolling='no' frameBorder='0'></iframe> -->

</body>

</html>

<!-- 
        Price List (RM):
        1x1 Square Pipe: 0.70/kaki
        1x1 aluminium pipe: 1.20/kaki
        2x2 Tiang: 24
        aluminium angle: 0.73/?
        Colorbond 4x50m: 1.65/kaki^2
        Poly: 2.8/kaki^2
        White Sticker/Transparent: 2.50/kaki^2
        Bracket: ?
        Lampu LED: 15/unit
        Wiring: 3/meter

 -->

<!-- Nota beza
 1 tulang melintang
 tulang tegak refer Signboard
 2 side xdak tulang Tengah
 material ikut side, colorbond @ poly
 kira lampu led 4 kaki
 wiring 2x lebar (?)
 bracket
 aluminium angle diameter luar + 4 kaki (penjuru)
 sticker ikut side, sama Signboard
  -->