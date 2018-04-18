$(function () {
    $('#modalorder').on('beforeSubmit', function(){
      console.log('beforeSubmit before send')
        return false;
    });
});

function beforesubmitmodal() {
    console.log('beforeSubmit modal before send')
}



$( "#modalorder" ).on( "submit", function() {
    $('#preloader').fadeIn('slow');
    var data = $(this).serialize();
    $.ajax({
        url: '/modal',
        type: 'POST',
        data: data,
        success: function(res){
            console.log(res);
            $('.modal-body-up').fadeOut('slow',function () {
                $('.modal-body-down').fadeIn('slow');
            });



        },
        error: function(){
            alert('Error!');
        }
    }).always(function () {
        $('#preloader').fadeOut('slow');
    });
    return false;

});


$( "#add_testimonial_form" ).on( "submit", function() {
    $('#preloader').fadeIn('slow');
    var data = $(this).serialize();
    $.ajax({
        url: '/modal/testimonial',
        type: 'POST',
        data: data,
        success: function(res){
            console.log(res);
            $('.modal-body-up2').fadeOut('slow',function () {
                $('.modal-body-down2').fadeIn('slow');
            });



        },
        error: function(){
            alert('Error!');
        }
    }).always(function () {
        $('#preloader').fadeOut('slow');
    });
    return false;

});


//$('#ajax-loader').hide();