<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body onload="calculate()">
    <div class="container">

    <div class="spacer"></div>
    <h2>Signboard</h2>
    <div class="spacer"></div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="" method="get">
                    <div class="md-form">
                        <p>Jenis:
                            <select name="jenis" id="type">
                                <option>Biasa</option>
                                <option onclick="window.location.href='lightbox.php'">Lightbox</option>
                                <option onclick="window.location.href='no-frame.php'">No Frame</option>
                            </select>
                        </p>
                        <p>Frame Material:
                            <select name="" id="material" onchange="calculate()">
                                <option value="besi">Biasa</option>
                                <option value="alu">Aluminium</option>
                            </select>
                        </p>
                        <p>Laminated <input type="checkbox" name="laminate" id="laminate" checked="true" class="calc"></p>
                        
                        <p>Saiz: <input type="number" name="lebar" id="lebar" class="calc" step=0.1 value="1"> x <input type="number" name="tinggi" id="tinggi" class="calc" step=0.1 max="4" value="1"> kaki </p>

                        <p>Besi Tengah (support)</p>

                        <p>&emsp;Bilangan melintang: <input type="number" name="horizontal" id="horizontal" value=0 class="calc" step=1> unit </p>

                        <p>&emsp;Bilangan menegak: <input type="number" name="vertical" id="vertical" value=0 class="calc" step=1> unit </p>
                        
                        <p><a class="btn-show">Lihat</a></p>
                        
                        <div class="hide">

                        <p>Tiang bulat 2x2: </p>

                        <p>&emsp;Bilangan: <input type="number" name="tiang2x2_qty" id="tiang2x2_qty" value=0 class="calc" step=1> unit </p>

                        <p>&emsp;Tinggi: <input type="number" name="tiang2x2_height" id="tiang2x2_height" value=9 class="calc" step=0.1> kaki </p>

                        <p>Tiang petak 1x1: </p>

                        <p>&emsp;Bilangan: <input type="number" name="tiang1x1_qty" id="tiang1x1_qty" value=0 class="calc" step=1> unit </p>

                        <p>&emsp;Tinggi: <input type="number" name="tiang1x1_height" id="tiang1x1_height" value=0 class="calc" step=0.1> kaki </p>

                        <p>&emsp;Kaki/Tapak (anggaran): <input type="number" name="" id="tapak" value=0 class="calc" step=0.1> kaki</p>
                        
                        <p>Bracket: <input type="number" name="bracket" id="bracket" class="calc" value=0 min=0></p>
                        
                        <p>Spotlight: <input type="number" name="spotlight" id="spotlight" class="calc" value=0 min=0></p>
                        
                        </div>

                        <p>Kuantiti: <input type="number" name="qty" id="qty" class="calc" value=1 min=1></p>
                        
                        <p>Upah Pasang 
                            <select id="upah" class="calc">
                                <option value="0">Sendiri</option>
                                <option value="1">Tingkat bawah</option>
                                <option value="2">Tingkat atas</option>
                                <option value="3">Lain-lain</option>
                            </select>
                            <input type="number" name="" id="upah-plus" class="calc" placeholder="nyatakan">
                        </p>
                        <!-- <p>Upah Pasang RM: <input type="number" name="upah" id="upah" step=0.01 class="calc"> </p> -->
               

                       
                        <!-- <p>Lori RM: <input type="number" name="lori" id="lori" step=0.01 class="calc"> </p> -->
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
                        <th>Harga/unit</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan=3>Anggaran Kos: </th>
                        <th id="output-total"></th>
                    </tr>
                    <tr>
                        <th colspan=3>Harga Jualan: </th>
                        <th id="output-sale"></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Square Pipe (ft)</td>
                        <td id="output-sq-pipe"></td>
                        <td id="output-sq-pipe-pr"></td>
                        <td id="output-sq-pipe-ttl"></td>
                    </tr>
                    <tr>
                        <td>Colorbond (ft&#xb2;)</td>
                        <td id="output-colorbond"></td>
                        <td id="output-colorbond-pr"></td>
                        <td id="output-colorbond-ttl"></td>
                    </tr>
                    <tr>
                        <td>Aluminium Angle (ft)</td>
                        <td id="output-allu-angle"></td>
                        <td id="output-allu-angle-pr"></td>
                        <td id="output-allu-angle-ttl"></td>
                    </tr>
                    <tr>
                        <td>Tiang 2x2 (ft)</td>
                        <td id="output-tiang2x2"></td>
                        <td id="output-tiang2x2-pr"></td>
                        <td id="output-tiang2x2-ttl"></td>
                    </tr>
                    <tr>
                        <td>Sticker (ft&#xb2;)</td>
                        <td id="output-sticker"></td>
                        <td id="output-sticker-pr"></td>
                        <td id="output-sticker-ttl"></td>
                    </tr>
                    <tr>
                        <td>Cat (ft&#xb2;)</td>
                        <td id="output-cat"></td>
                        <td id="output-cat-pr"></td>
                        <td id="output-cat-ttl"></td>
                    </tr>
                    <tr>
                        <td>Bracket</td>
                        <td id="output-bracket"></td>
                        <td id="output-bracket-pr"></td>
                        <td id="output-bracket-ttl"></td>
                    </tr>
                    <tr>
                        <td>Spotlight</td>
                        <td id="output-spotlight"></td>
                        <td id="output-spotlight-pr"></td>
                        <td id="output-spotlight-ttl"></td>
                    </tr>
                    <tr>
                        <td colspan="3">Elektrik</td>
                        <td id="output-electricity"></td>
                    </tr>
                    <tr>
                        <td colspan="3">Upah Pasang</td>
                        <td id="output-upah"></td>
                    </tr>
                </tbody>
            </table>
            <div>*Sticker / Colorbond / Poly = (<span id="output-lebar"></span>x<span id="output-tinggi"></span>)</div>
            </div><!--end col-->
        </div> <!--end row-->

        <div class="spacer"></div>

<div class="row">
   
</div><!-- end row-->

        <div class="vh-100">

        </div><!--end spacer-->
    </div><!--end container-->


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="script.js"></script>
    <script>

    $(".btn-show").click(function(){
        $(".hide").toggle(500);
        $(".btn-show").hide();
    });

        //start manipulate values
        $(".calc").change(calculate)

        function calculate() {
            
            lebar = $("#lebar").val();
            tinggi = $("#tinggi").val();
            melintang = $("#horizontal").val();
            menegak = $("#vertical").val();
            wire = $("#wiring").val();
            tiang2x2 = $("#tiang2x2_height").val() * $("#tiang2x2_qty").val()
            tiang1x1 = ($("#tiang1x1_height").val() * $("#tiang1x1_qty").val()) + parseInt($("#tapak").val(), 10)
            upah = $("#upah").val() 
            bracket_qty = $("#bracket").val()
            qty = Number($("#qty").val())
            spotlight_qty = $("#spotlight").val()
            
            //calculate square pipe usage
            if ($("#material").val() == "besi") {
                frame_pr = square_pipe
            } else if ($("#material").val() == "alu") {
                frame_pr = alu_pipe
            }

            //<4 3
            //<10 4
            //else per 3 kaki
            
            if(lebar <= 5){ support = tinggi * 1 }
            else if(lebar > 5 && lebar <= 10){ support = tinggi * 2 }
            else if(lebar > 10 && lebar <= 13){ support = tinggi * 3 }
            else if(lebar > 13 && lebar <= 16){ support = tinggi * 4 }
            else if(lebar > 16 && lebar < 19){ support = tinggi * 5 }
            else if(lebar >= 19){ support = tinggi * 6 }

            $("#vertical").val(support/tinggi)
            
//18 4                      18*2 + 0 + 8 + 0 + 20 + 0
            sq_pipe = ((lebar * 2) + (lebar * melintang)) + ((tinggi * 2) + (tinggi * menegak)) + tiang1x1 
            sq_pipe_pr = (sq_pipe * frame_pr).toFixed(2)
            //console.log(tiang1x1)

            //calculate aluminium angle
            allu_angle = (lebar * 2) + (tinggi * 2)
            allu_angle_ttl = (allu_angle*aluminium_angle).toFixed(2)

            //calculate colorbond/sticker/poly
            if (lebar == 4 || tinggi == 4) {
                saiz = lebar * tinggi
                $("#output-lebar").html(lebar)
                $("#output-tinggi").html(tinggi)
            } else if (lebar < 4 && tinggi < 4) {
                saiz = Math.min(lebar, tinggi) * 4
                $("#output-lebar").html(Math.min(lebar, tinggi))
                $("#output-tinggi").html("4")    
            }else if(lebar > 4){
                saiz = lebar * 4
                $("#output-lebar").html(lebar)
                $("#output-tinggi").html("4")
            }
            if ($('#laminate').is(":checked"))
            {
                sticker_type = 0
            }else{
                sticker_type = 1
            }

            sticker_ttl = countSticker(lebar, tinggi, sticker_type)
            console.log(lebar+tinggi+sticker_type)
            colorbond_ttl = (colorbond*saiz).toFixed(2)
            //sticker_ttl = (sticker*saiz).toFixed(2)

            tiang2x2_ttl = (tiang2x2*besi_tiang).toFixed(2)

            cat_qty = (sq_pipe+(tiang2x2*besi_tiang))
            cat_ttl = (cat_qty * cat).toFixed(2) 

            bracket_ttl = bracket * bracket_qty

            spotlight_ttl = spotlight * spotlight_qty

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
                    //upah_pr = upah_3
                    $("#upah-plus").show();
                    upah_pr = $("#upah-plus").val();
                    break;
            
                default:
                    upah_pr = 0
                    break;
            }
            // wiring_meter = wire * 0.3048
            // wiring_p = (wiring_meter * wiring).toFixed(2)
            
            total = 
                (Number(sq_pipe_pr) 
                + Number(allu_angle_ttl) 
                + Number(colorbond_ttl) 
                + Number(tiang2x2_ttl) 
                + Number(sticker_ttl) 
                + Number(cat_ttl) 
                + Number(bracket_ttl)
                + Number(electric)
                + Number(spotlight_ttl)
                + Number(upah_pr)) 
                * qty 
            
            sale = total + (total*sale_margin/100)

            //output table
            $("#output-sq-pipe").html(sq_pipe*qty);
            $("#output-sq-pipe-pr").html(frame_pr);
            $("#output-sq-pipe-ttl").html(sq_pipe_pr*qty);
            
            $("#output-allu-angle").html(allu_angle*qty);
            $("#output-allu-angle-pr").html(aluminium_angle);
            $("#output-allu-angle-ttl").html(allu_angle_ttl*qty);
            
            $("#output-colorbond").html(saiz*qty);
            $("#output-colorbond-pr").html(colorbond);
            $("#output-colorbond-ttl").html(colorbond_ttl*qty);
            
            $("#output-tiang2x2").html(tiang2x2*qty);
            $("#output-tiang2x2-pr").html(besi_tiang);
            $("#output-tiang2x2-ttl").html(tiang2x2_ttl*qty);
            
            $("#output-sticker").html(saiz*qty);
            //$("#output-sticker-pr").html(sticker);
            $("#output-sticker-ttl").html(sticker_ttl*qty);
            
            $("#output-bracket").html(bracket_qty*qty);
            $("#output-bracket-pr").html(bracket);
            $("#output-bracket-ttl").html(bracket_ttl*qty);
            
            $("#output-cat").html(cat_qty*qty);
            $("#output-cat-pr").html(cat);
            $("#output-cat-ttl").html(cat_ttl*qty);
           
            $("#output-spotlight").html(spotlight_qty*qty);
            $("#output-spotlight-pr").html(spotlight);
            $("#output-spotlight-ttl").html(spotlight_ttl*qty);
            
            $("#output-electricity").html(electric*qty);
            $("#output-upah").html(upah_pr*qty);
            
            $("#output-total").html(total.toFixed(2))
            $("#output-sale").html(sale.toFixed(2))
            
            // $("#output-wiring").html(wiring_p)
           
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