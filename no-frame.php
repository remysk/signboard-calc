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
    <h2>Signboard: Frame sedia ada</h2>
    <div class="spacer"></div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="" method="get">

                    <div class="md-form">
                        <p>Jenis:
                            <select name="jenis" id="type">
                                <option>No Frame</option>
                                <option onclick="window.location.href='index.html'">Biasa</option>
                                <option onclick="window.location.href='lightbox.html'">Lightbox</option>
                            </select>
                        </p>
                        <p>Material:
                            <select name="" id="material" class="calc">
                                <option value="none">None</option>
                                <option value="colorbond">Colorbond</option>
                                <option value="poly">Poly</option>
                            </select>
                        </p>
                        <p>Laminated <input type="checkbox" name="laminate" id="laminate" checked="true" class="calc"></p>
                        <p>Saiz: <input type="number" name="lebar" id="lebar" class="calc" step=0.1 value="1"> x <input type="number" name="tinggi" id="tinggi" class="calc" step=0.1 max="4" value="1"> kaki </p>

                        <p>Kuantiti: <input type="number" name="qty" id="qty" class="calc" value=1 min=1></p>

                        <p>Upah Pasang RM: <input type="number" name="upah" id="upah" step=0.01 class="calc" value=50> </p>
                        <p>Lain-lain RM: <input type="number" name="others" id="others" step=0.01 value=0 class="calc"> </p>
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
                        <th colspan=3>Harga Jualan: <span id="output-margin"></span></th>
                        <th id="output-sale"></th>
                    </tr>
                </tfoot>
                <tbody>
          
                    <tr>
                        <td>Sticker (ft&#xb2;)</td>
                        <td id="output-sticker"></td>
                        <td id="output-sticker-pr"></td>
                        <td id="output-sticker-ttl"></td>
                    </tr>
                    <tr>
                        <td id="output-material-type"></td>
                        <td id="output-material"></td>
                        <td id="output-material-pr"></td>
                        <td id="output-material-ttl"></td>
                    </tr>
                    <tr>
                        <td colspan="3">Upah Pasang</td>
                        <td id="output-upah"></td>
                    </tr>
                    <tr>
                        <td colspan="3">Lain-lain (tambahan)</td>
                        <td id="output-others"></td>
                    </tr>
                </tbody>
            </table>
            <div>*Sticker / Colorbond / Poly = (<span id="output-lebar"></span>x<span id="output-tinggi"></span>)</div>
            </div><!--end col-->
        </div> <!--end row-->

        <div class="spacer"></div>


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
       
        //start manipulate values
        $(".calc").change(calculate)

        function calculate() {
            
            lebar = $("#lebar").val();
            tinggi = $("#tinggi").val();
            upah = $("#upah").val()
            others = $("#others").val()
            qty = Number($("#qty").val())
            material = $("#material").val()

            $("#output-material-type").html(material)

            if ($('#laminate').is(":checked"))
            {
                sticker_type = 0
            }else{
                sticker_type = 1
            }

            sticker_ttl = countSticker(lebar, tinggi, sticker_type)
            //calculate colorbond/sticker/poly
           /* if (lebar == 4 || tinggi == 4) {
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
            }*/

            if(material == "poly"){
                material_pr = poly.toFixed(2)
                material_ttl = (poly*saiz).toFixed(2)
            }
            else if(material == "colorbond"){
                material_pr = colorbond.toFixed(2)
                material_ttl = (colorbond*saiz).toFixed(2)            
            } else {
                material = "N/A"
                material_pr = 0
                material_ttl = 0         
            }
            
            // wiring_meter = wire * 0.3048
            // wiring_p = (wiring_meter * wiring).toFixed(2)

            $("#output-material").html(saiz*qty);
            $("#output-material-pr").html(material_pr);
            $("#output-material-ttl").html(material_ttl*qty);

            
            $("#output-sticker").html(saiz*qty);
            $("#output-sticker-ttl").html(sticker_ttl*qty);
            
            //$("#output-electricity").html(electric);
            $("#output-upah").html(upah);
            $("#output-others").html(others);

            total = (
                      Number(material_ttl) 
                    + Number(sticker_ttl)
                    + Number(upah) 
                    + Number(others) 
                    ) * qty 
            
            sale = total + (total*sale_margin/100)
            $("#output-margin").html(sale_margin+"%")
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