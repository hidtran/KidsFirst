var main = function() {
  $(window).scroll(function() {
    if($(this).scrollTop() > 100) {
        $('#top-nav').addClass('hide');
        $('#top-bot-nav').addClass('fixed');
        $('#top-bot-nav').addClass('opaque');
    } else {
        $('#top-nav').removeClass('hide');
        $('#top-bot-nav').removeClass('fixed');
        $('#top-bot-nav').removeClass('opaque');
    }
});
};

$(document).ready(main);
