        // price declaration

        square_pipe = 1.20 //kaki   
        alu_pipe = 0.75 //kaki
        besi_tiang = 1.2 //?
        aluminium_angle = 0.73 //?
        colorbond = 1.65 //kaki^2
        poly = 3.5 //kaki^2
        sticker = 2.50
        sticker_laminate = 3.80 //kaki^2
        sticker_laminate_5 = 4.00 //kaki^2
        bracket = 5
        lampuled = 15 //unit
        wiring = 3 //meter
        box_wire = 2 
        plug = 1
        sale_margin = 90 //percent
        electric = 50 //kaki
        cat = 0.4 //20ml/kaki
        upah_1 = 300 //upah pasang tingkat 1
        upah_2 = 450 //upah pasang tingkat 2
        upah_3 = 50 //upah pacak 20-minyak 20-simen 25/signboard
        spotlight = 100 //pcs 

        
function sum() {
    var s = 0;
    for (var i=0; i < arguments.length; i++) {
        s += arguments[i];
    }
    return s;
}

function countSticker(lebar, tinggi, type){
    //type = 1 for no laminate
    if (lebar == 4 || tinggi == 4) {
        saiz = lebar * tinggi
        sticker_pr = (type == 1 ? sticker : sticker_laminate)
        sticker_ttl = (sticker_pr*saiz).toFixed(2)
        $("#output-lebar").html(lebar)
        $("#output-tinggi").html(tinggi)
    } else if (lebar < 4 && tinggi < 4) {
        saiz = Math.min(lebar, tinggi) * 4
        sticker_pr = (type == 1 ? sticker : sticker_laminate)
        sticker_ttl = (sticker_pr*saiz).toFixed(2)
        $("#output-lebar").html(Math.min(lebar, tinggi))
        $("#output-tinggi").html("4")    
    }else if(lebar > 4 && tinggi > 4){
        saiz = lebar * tinggi
        sticker_pr = (type == 1 ? sticker : sticker_laminate_5)
        sticker_ttl = (sticker_pr*saiz).toFixed(2)
        $("#output-lebar").html(lebar)
        $("#output-tinggi").html(tinggi)
    }
    $("#output-sticker-pr").html(sticker_pr)
    return sticker_ttl
}

function countLightboxFrame(lebar, tinggi, sisi){

}