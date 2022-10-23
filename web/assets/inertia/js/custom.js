$('.switch').click(function(){
    $(this).toggleClass('switch-on');
    if ($(this).hasClass('switch-on')) {
        $(this).trigger('on.switch');
    } else {
        $(this).trigger('off.switch');
    }
});

$('.switch').on('on.switch', function(){
    console.log('Кнопка переключена в состояние on');
//    $('.trash-checkbox').val('only');
});
$('.switch').on('off.switch', function(){
    console.log('Кнопка переключена в состояние off');
//    $('.trash-checkbox').val(null);
});
