var gate_submit=true;
var dtnw=0;

$('#w0').on('submit', function(event) {

    if(dtnw==0) {      // fix на первый клик // шлется 2 запроса вместо однного.
        dtnw = Date.now();
    }
    diff_time=Date.now() - dtnw;
    console.log('dif time '+ diff_time);
    if (diff_time>10){//   // fix на первый клик // шлется 2 запроса вместо однного.
        console.log('more  1500');
        jQuery.get('/cart/default/info', {},
            function (answer) {
                json = answer;
                //$( "#w0" ).submit();
                //dvizh.cart.render_price(json); // show  all prices
                // jQuery(document).trigger("renderCart", json);
                console.log(['sub',answer]);
               // if(json.info_message!='' &&  !!json.info_message){
                if(!empty_string(json.info_message)){
                    //  $.notify(json.info_message, "warn",{ autoHide: false,});
                    PNotify.defaults.styling = "bootstrap3";
                    PNotify.defaults.icons = "bootstrap3";
                    PNotify.success({
                        title: '',
                        text: json.info_message,
                        textTrusted: true,
                        delay: 3000,
                        addclass: "stack-bottomright",
                        stack: stack_bottomright
                    });
                }else{
                    gate_submit=false;
                    $( "#w0" ).submit();
                }
            }, "json");

    }
    if(gate_submit){ // проверка на допустимость запроса и если ок тогда субмит
        // event.preventDefault ? event.preventDefault() : (event.returnValue=false);
        event.preventDefault ? event.preventDefault() : (event.returnValue=false);
    }


    

    // var form = $(this);
    // if (event.eventPhase === 33) { // This phase is when the validation is passed
    //     $.ajax({ // actually the ajax request
    //         url: form.attr('action'),
    //         data: form.serialize(),
    //         type: form.attr('method')
    //     });
    // }
  //  event.preventDefault(); // Prevents default submit behaviour
});

function empty_string(str)
{
    if (typeof str == 'undefined' || !str || str.length === 0 || str === "" || !/[^\s]/.test(str) || /^\s*$/.test(str) || str.replace(/\s/g,"") === "")
    {
        return true;
    }
    else
    {
        return false;
    }
}
console.log('sdf1115');