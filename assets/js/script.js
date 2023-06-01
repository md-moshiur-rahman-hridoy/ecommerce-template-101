$(document).ready( ()=> {
    $("#hamburger").click(()=>{
        $("#navbar").show();
    });
    $("#close").click(()=>{
        $("#navbar").hide();
    });

    // product quantity
    var unitPrice, tp = 0;
    var temp = parseInt($("#productQuantity").val());
    if(temp==1){
        unitPrice = parseInt($(".totalPrice").html()); 
        tp = unitPrice;
    }
    
    $(".pPrice").html(tp);
    var vat = (parseInt($(".totalPrice").html()) * 0.3) / 100;

    var subTotalPrice = tp + vat + parseInt($(".dPrice").html());
    $(".subTotalPrice").html(subTotalPrice);
    $(".vPrice").html(vat);
    $("#qtMinus").click(()=>{
        if(temp>1){
            temp--;
        }
        $("#productQuantity").val(temp);
        tp = unitPrice * temp;
        $(".totalPrice").html(tp);
        $(".pPrice").html(tp);
        var subTotalPrice = tp + vat + parseInt($(".dPrice").html());
        $(".subTotalPrice").html(subTotalPrice);
    });
    $("#qtPlus").click(()=>{
        temp++;
        $("#productQuantity").val(temp);
        tp = unitPrice * temp;
        $(".totalPrice").html(tp);
        $(".pPrice").html(tp);
        var subTotalPrice = tp + vat + parseInt($(".dPrice").html());
        $(".subTotalPrice").html(subTotalPrice);
    });
});

