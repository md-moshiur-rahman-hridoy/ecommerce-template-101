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

    $("#heroShopButton").click(()=>{
        window.location.href = "shop.php";
        console.error("click");
    });

    // add item to card using ajax
    $('#addItemButton').click(function(e){
        console.log("click")
        e.preventDefault();
        var $form = $(this).closest('form-submit');
        var pid = $form.find('.pid').val();
        var pname = $form.find('.pname').val();
        var pprice = $form.find('.pprice').val();
        var pimage = $form.find('.pimage').val();
        var uid = $form.find('uid').val();

        if(uid == null){
            console.log("Login please!");
        }else{
            console.log("User login!");
        }
    });
});

