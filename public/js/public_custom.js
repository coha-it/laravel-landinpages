
var coha_get_scroll_duration = function(dest, min, max) {
    let curr = $(window).scrollTop();
    let diff = Math.abs(dest - curr);

    switch (true) {
        case diff < min:
            return min;

        case diff > max:
            return max;

        default:
            return diff;
    }
}

var coha_click_contact_form = function() {
    let $ = jQuery;

    // Scroll Variables
    let scroll_y = $(window).scrollTop();
    let last_section = $('main section').last();
    let last_section_top = last_section.position().top;
    let scroll_up = scroll_y < last_section_top;

    // E-Mail Vars
    let input = $('.email-input').eq(scroll_up ? 0 : 1);
    let input_height = input.height();
    let input_top = input.offset().top;
    let input_scroll_position = input_top + input_height

    // Window Vars
    let window_height = $(window).height();
    let window_half_height = window_height / 2;

    // Get Scroll Position
    let scroll_to = input_scroll_position - window_half_height;

    // Animation Class
    let anim_class = 'coha_email_animated';

    // Body
    let body = $("html, body");

    // Run!
    input.removeClass(anim_class);

    body.stop().animate(
        {
            scrollTop: scroll_to
        },
        coha_get_scroll_duration(scroll_to, 100, 500),
        'swing',
        function() {
            input.addClass(anim_class);
            input.focus();
        }
    );

}

// Lazy Load on Scroll
var coha_lazyload_on_scroll = function() {
    let win = $(window);
    let imgs = $('img');
    let win_scroll_top = win.scrollTop();
    let win_height = win.height();

    $.each(imgs, function() {
        let img = $(this);
        let img_top = img.offset().top;

        if (
            img.attr('data-src') &&
            img_top < (win_scroll_top + win_height + 100)
         ) {
            var source = img.data('src');
            img.attr('src', source);
            img.removeAttr('data-src');
        }
    })
}

// Lazy Load on Scroll Init
var coha_init_lazyload = function () {
    let win = $(window);
    win.scroll(coha_lazyload_on_scroll);
    win.scroll();
}

if (document.readyState === 'complete') {
    // The page is fully loaded
    coha_init_lazyload();
}


