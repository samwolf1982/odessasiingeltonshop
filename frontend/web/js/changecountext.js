
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

        // send post change session param   product  [id , count]
    link='/site/updateextproduct';
    delivery_id=   $("#order-shipping_type_id option:selected").val();
    console.log(['val2 ',delivery_id,newvalue,id_prod]);

    // fromgooglemap distance


    jQuery.ajax({url: link,type: 'GET',data: {newvalue:newvalue,prod_id:id_prod,parent_id:id_prod_parent,delivery_id:delivery_id,distance:distance},
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

dvizh.cart.renderCart= function (json) {
    if (!json) {
        console.log('render cart 1');
        dvizh.cart.csrf = jQuery('meta[name=csrf-token]').attr("content");
        dvizh.cart.csrf_param = jQuery('meta[name=csrf-param]').attr("content");
        var json = {};

        jQuery.get('/cart/default/info', {},
            function (answer) {
                json = answer;
                dvizh.cart.render_price(json); // show  all prices
                jQuery(document).trigger("renderCart", json);
            }, "json");
    }else{
        console.log('render cart 2');
        dvizh.cart.render_price(json); // show  all prices
        jQuery(document).trigger("renderCart", json);
        jQuery(document).trigger("renderCart", json);
    }


    return true;
};

var stack_bottomright = {
    "dir1": "up",
    "dir2": "left",
    "firstpos1": 50,
    "firstpos2": 25
};
// show  all prices
dvizh.cart.render_price=function (json) {
    jQuery('.dvizh-cart-block').replaceWith(json.elementsHTML);
    jQuery('.dvizh-cart-count').html(json.count);
    jQuery('.dvizh-cart-price').html(json.price);
    jQuery('.dvizh-cart-delivery-price').html(json.delivery_price);
    jQuery('.dvizh-cart-price-ext').html(json.total_price_ext);
    jQuery('.dvizh-cart-price-total').html(json.total_price);
    jQuery('.count_prod_in_cart').attr('title',json.count);
    console.log(json.info_message);
      if(json.info_message!='' &&  !!json.info_message){
        //  $.notify(json.info_message, "warn",{ autoHide: false,});
          PNotify.defaults.styling = "bootstrap3";
          PNotify.defaults.icons = "bootstrap3";
          // PNotify.defaultStack = {
          //     "dir1": "down",
          //     "dir2": "left",
          //     "firstpos1": 25,
          //     "firstpos2": 25,
          //     "spacing1": 36,
          //     "spacing2": 36,
          //     "push": "bottom",
          //     "context": document.body
          // }
        // var stack_bottomright = {"dir1":"down", "dir2":"right", "push":"top"};
          PNotify.success({
              title: '',
              text: json.info_message,
              textTrusted: true,
              delay: 3000,
              addclass: "stack-bottomright",
              stack: stack_bottomright
          });
      }


}

