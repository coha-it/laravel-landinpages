var coha_click_contact_form = function() {
    let $ = jQuery;

    // E-Mail Vars
    let input = $('.email-input').first();
    let input_height = input.height();
    let input_top = input.offset().top;

    // Window Vars
    let window_height = $(window).height();
    let window_half_height = window_height / 2;

    // Animation Class
    let anim_class = 'coha_email_animated';

    // Body
    let body = $("html, body");

    // Run!
    input.removeClass(anim_class);

    body.stop().animate(
        {
            scrollTop: input_top + input_height - window_half_height
        },
        500,
        'swing',
        function() {
            input.addClass(anim_class);
            input.focus();
        }
    );

}
