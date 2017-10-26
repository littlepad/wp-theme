$(function() {
    if (! $.browser.safari) {
        $('p.pageTop a').click(function() {
            $(this).blur();
            $('html,body').animate({ scrollTop: 0 }, 1000 );
            return false;
        });
    }
});
