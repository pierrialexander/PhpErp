$(function() {
    $('.tabitem').on('click', function(){
        $('.activetab').removeClass('activetab');
        $(this).addClass('activetab');

        let item = $('.activetab').index();
        $('.tabbody').hide();
        $('.tabbody').eq(item).show();
    });
});