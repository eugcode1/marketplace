$(function() {
    var $mainNav = $('#main-nav');
    $(document).scroll(function() {
        $mainNav.css({"padding-top": $(this).scrollTop() > 100? "10px":"30px"});
    });
});


