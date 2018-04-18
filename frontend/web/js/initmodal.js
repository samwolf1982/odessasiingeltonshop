$(function () {
// quickniew  modal
    $('.check_order_menu').click(function(){
        // Instantiate new modal
        var modal = new Custombox.modal(
            {
                content: {
                    effect: 'blur',
                    //target: '/index.php?route=common/cart/modal',
                     target: '#ajaxcontent',
                    // target: '/modal',
                    // width: '50%',
                    positionX: 'center',
                    positionY: 'top',

                },
                overlay: {
                    active: true,
                    color: '#000',
                    opacity: .48,
                    close: true,
                    speedIn: 300,
                    speedOut: 300,

                    onOpen: null,
                    onComplete: null,
                    onClose: null,
                },
                loader: {
                    active: true,
                    color: '#fff',
                    speed: 1500,
                }
            }
        );

// Open
        modal.open();
        console.log('rm this');
    });

    // modal add отзыв
    $('.add_testimonial').click(function(){
        // Instantiate new modal
        var modal = new Custombox.modal(
            {
                content: {
                    effect: 'blur',
                    //target: '/index.php?route=common/cart/modal',
                    target: '#add_testimonial',
                    // target: '/modal',
                    // width: '50%',
                    positionX: 'center',
                    positionY: 'top',

                },
                overlay: {
                    active: true,
                    color: '#000',
                    opacity: .48,
                    close: true,
                    speedIn: 300,
                    speedOut: 300,

                    onOpen: null,
                    onComplete: null,
                    onClose: null,
                },
                loader: {
                    active: true,
                    color: '#fff',
                    speed: 1500,
                }
            }
        );

// Open
        modal.open();
        console.log('rm this');
    });

});



// init time piker in modal
$(function () {
    $('#datetimepicker_modal').datetimepicker({
        locale: 'ru'
    });
});

