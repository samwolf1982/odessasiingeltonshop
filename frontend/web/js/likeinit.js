// Remove EDIT  THIS !!!!!!
$('.likemeimg').click(function(){
    // fly to cart n// add to wishlist fron ocart
    var cart = $('#like');
    var imgtodrag = $(this).parent().parent().find("img").eq(0);
    if (imgtodrag) {
        var imgclone = imgtodrag.clone()
            .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
            .css({
                'opacity': '0.5',
                'position': 'absolute',
                'height': '150px',
                'width': '150px',
                'z-index': '99999999999'
            })
            .appendTo($('body'))
            .animate({
                'top': cart.offset().top + 10,
                'left': cart.offset().left + 10,
                'width': 75,
                'height': 75
            }, 1000, 'swing');

        // setTimeout(function () {
        //     cart.effect("shake", {
        //         times: 2
        //     }, 200);
        // }, 1500);

        imgclone.animate({
            'width': 0,
            'height': 0
        }, function () {
            $(this).detach()
        });
    }


    // add to like
    $id_prod=$(this).data('id');
    $data_model=$(this).data('model');
     wishlist.add($id_prod,$data_model);


// $id_prod=$(this).data('id');
    console.log(['rm this',$id_prod]);
});



$('.delete_wishlist').click(function(){
    // fly to cart n// add to wishlist fron ocart
    var cart = $('#like');
    $id_prod=$(this).data('id');

    $('#remove_id_'+$id_prod);
    var imgtodrag =  $('#remove_id_'+$id_prod);

    if (imgtodrag) {

        imgtodrag.hide('slow', function(){
            $(this).remove();
        });
    }

    // add to like
    $id_prod=$(this).data('id');
    $data_model=$(this).data('model');
    wishlist.remove($id_prod,$data_model);


// $id_prod=$(this).data('id');
    console.log(['rm this',$id_prod]);
});





var wishlist = {
    'add': function(product_id,data_model) {

        $.ajax({
            url: '/wishlist/create',
            type: 'get',
            data: 'product_id=' + product_id+'&data_model=' + data_model,
            dataType: 'json',
            success: function(json) {
                console.log(json);
                $('.alert').remove();
                $('#like_me').attr('title',json.count_like);
                console.log('sss '+json['count_like']);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['success']) {     // hide alert
                    // $('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                }

                $('#wishlist-total span').html(json['total']);
                $('#wishlist-total').attr('title', json['total']);

                //$('html, body').animate({ scrollTop: 0 }, 'slow');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function(product_id,data_model) {
        $.ajax({
            url: '/wishlist/delete',
            type: 'get',
            data: 'product_id=' + product_id+'&data_model=' + data_model,
            dataType: 'json',
            success: function(json) {

                $('.alert').remove();
                $('#like_me').attr('title',json.count_like);
                console.log('sss '+json['count_like']);


                //$('html, body').animate({ scrollTop: 0 }, 'slow');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

