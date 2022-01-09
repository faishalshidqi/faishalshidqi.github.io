$(document).ready(function() {

    const Arrays = [];

    // mendeteksi pergerakan mouse
    $('.wrap li').mousemove(function(){
        const position = $(this).position();
        $('#cart').stop().animate({
                                      left   : position.left+'px',
                                  },250,function(){
        });
    }).mouseout(function () {

    });

    // menambahkan jumlah barang di keranjang
    // mengirim objek yang diklik di display ke dalam keranjang
    $('.wrap li').click(function(){

        let prev_charges;
        const thisID = $(this).attr('id');

        const itemname = $(this).find('div .name').html();
        const itemprice = $(this).find('div .price').html();

        if(include(Arrays,thisID))
        {
            const price = $('#each-' + thisID).children(".shopp-price").find('em').html();
            let quantity = $('#each-' + thisID).children(".shopp-quantity").html();
            quantity = parseInt(quantity) + 1;

            const total = parseInt(itemprice) * parseInt(quantity);

            $('#each-'+thisID).children(".shopp-price").find('em').html(total);
            $('#each-'+thisID).children(".shopp-quantity").html(quantity);

            prev_charges = $('.cart-total span').html();
            prev_charges = parseInt(prev_charges) - parseInt(price);

            prev_charges = parseInt(prev_charges) + total;
            $('.cart-total span').html(prev_charges);

            $('#total-hidden-charges').val(prev_charges);
        }
        else
        {
            Arrays.push(thisID);

            prev_charges = $('.cart-total span').html();
            prev_charges = parseInt(prev_charges)+parseInt(itemprice);

            $('.cart-total span').html(prev_charges);
            $('#total-hidden-charges').val(prev_charges);

            $('#left_bar .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> Rp.<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="remove.png" class="remove" /><br class="all" /></div>');

            $('#cart').css({'-webkit-transform' : 'rotate(20deg)','-moz-transform' : 'rotate(20deg)' });
        }

        setTimeout('angle()',200);
    });

    // menghapus barang dari keranjang
    // mengurangi total harga sejumlah yang dihapus
    $('.remove').livequery('click', function() {

        const deduct = $(this).parent().children(".shopp-price").find('em').html();
        let prev_charges = $('.cart-total span').html();

        const thisID = $(this).parent().attr('id').replace('each-', '');

        const pos = getpos(Arrays, thisID);
        Arrays.splice(pos,1,"0")

        prev_charges = parseInt(prev_charges)-parseInt(deduct);
        $('.cart-total span').html(prev_charges);
        $('#total-hidden-charges').val(prev_charges);
        $(this).parent().remove();

    });

    // menampilkan total harga yang harus dibayar
    $('#Submit').livequery('click', function() {

        const totalCharge = $('#total-hidden-charges').val();

        $('#left_bar').html('Total Harga: Rp. '+totalCharge);

        return false;

    });

});


function include(arr, obj) {
    for(let i=0; i < arr.length; i++) {
        if (arr[i] === obj) return true;
    }
}

function getpos(arr, obj) {
    for(let i=0; i < arr.length; i++) {
        if (arr[i] === obj) return i;
    }
}
//function angle(){$('#cart').css({'-webkit-transform' : 'rotate(0deg)','-moz-transform' : 'rotate(0deg)' });}
