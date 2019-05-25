var jumlahItem = 0;
var totalHarga = 0;

$(".tambah").click(function(){
    jumlahItem++;
    $(".jumlahOrder").text(jumlahItem);
    

    
    gambar = $(this).siblings(".item-img").clone().addClass("col-2");
    deskripsi = $(this).siblings(".item-details").clone().addClass("col-7");
    harga = $(this).siblings(".item-price").clone().addClass("col-2");
    hapusBtn = $("<div class='col-1 hapus'><img src='img/delete.svg'></div>");
    itemPrice = Number($(this).siblings().find("h7.harga").text());
    $("<div class='row'></div>").append(gambar,deskripsi,harga,hapusBtn).appendTo("div#orderCart div.modal-body");
    
    hargaCurrent = Number($("span.total-price").text());
    totalHarga = hargaCurrent + itemPrice;

    $("span.total-price").text(totalHarga);
    

    // jumlahItem++;
    // $(".jumlahOrder").text(jumlahItem);
    // $(this).siblings(".item-img").clone().appendTo("div.modal-body .row .img");
    // $(this).siblings(".item-desc").clone().appendTo("div.modal-body .row .col-7");
    // $(this).siblings(".item-price").clone().appendTo("div.modal-body .row .price");
    // $("<img src='img/delete.svg' class='hapus'>").appendTo("div.modal-body .row .col-1");
    


    if(parseInt($(".jumlahOrder").text()) > 0){
        $(".cart-icon").addClass("fadeUp");
    }else{
       $(".cart-icon").addClass("fadeDown");
       setTimeout(function(){
           $(".cart-icon").css("display","none")}
       ,100)
   }


});


$("#checkout").click(function(){
    $("#orderCart").modal('hide');
    $("#qrPayment").modal('show');
})














// $(".tambah").click(function(){
//     $(".cart-icon").addClass("fadeDown");
//     setTimeout(function(){
//         $(".cart-icon").css("display","none")}
//     ,100)
// });

$("div.hapus").click(function(){
    jumlahItem--;
    $(".jumlahOrder").text(jumlahItem);

    hargaCurrent = Number($("span.total-price").text());
    hargaHapus = parseInt($(this).siblings(".item-price").text());
    $("span.total-price").text(hargaCurrent-hargaHapus);

    $(this).parent().remove();

});
