
console.log('change count laod');


dvizh.cart.changeInputValue= function () {

        var val = parseInt(jQuery(this).siblings('input').val());
        var id_prod = parseInt(jQuery(this).siblings('input').data('id'));
        var id_prod_parent = parseInt(jQuery(this).siblings('input').data('parent_id'));
        var input = jQuery(this).siblings('input');
        var newvalue=val;
        if (jQuery(this).hasClass('dvizh-downArr')) {
            if (val <= 0) {
                return false;
            }
            newvalue--;
            jQuery(input).val(val - 1);
        }
        else {
            newvalue++;
            jQuery(input).val(val + 1);
        }
        console.log(['val ',newvalue,id_prod]);
        // send post change session param   product  [id , count]
    link='/site/updateextproduct'
    jQuery.ajax({url: link,type: 'GET',data: {newvalue:newvalue,prod_id:id_prod,parent_id:id_prod_parent},
        success:  function (json) {
        $('.dvizh-shop-price-'+json.parent_id).text(json.new_price);
        $('.dviz_prod_count_'+json.prod_id).text(json.count);
            //
            // jQuery('.dvizh-cart-block').css({'opacity': '1'});
            // jQuery('.dvizh-cart-count').css({'opacity': '1'});
            // jQuery('.dvizh-cart-price').css({'opacity': '1'});
            if (json.result == 'fail') {
                console.log(json.error);
            }
            else {
                console.log(json);
                // render  productext
                // dvizh.cart.renderCart(json);
               // $(document).trigger('dvizhCartChanged');
            }

        }
    });


        jQuery(input).change();

        return false;
    };


