$(document).ready(function (e) {
    $win = $(window);
    $navbar = $('#header');
    $toggle = $('.toggle-button');
    var width = $navbar.width();

    toggle_onclick($win, $navbar, width);

    // resize event
    $win.resize(function () {
        toggle_onclick($win, $navbar, $toggle, width);
    })

    $toggle.click(function (e) {
        $navbar.toggleClass("toggle-left");
    })

});

function toggle_onclick($win, $navbar, $toggle, width){
    if($win.width()<=768){
        $(".toggle-button").show();
        $navbar.css({left:'-1000px'});
        // $navbar.css({left:`-${width}px`});
    } else {
        $(".toggle-button").hide();
        $navbar.css({left:'0px'});
    }
}
