$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $('.mdl-layout').animate({scrollTop: pos});
});
$(document).ready(function () {
    initial();
});
function initial() {//本函数为页面创建时执行的函数，一般用于初始化页面等
    setProgress();
}
function setProgress() {
    document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
        this.MaterialProgress.setProgress(45);
    });
    document.querySelector('#p2').addEventListener('mdl-componentupgraded', function() {
        this.MaterialProgress.setProgress(18);
    });
    document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
        this.MaterialProgress.setProgress(31);
    });
}