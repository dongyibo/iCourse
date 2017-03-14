/**
 * Created by dongyibo on 2017/3/12.
 */
$(document).ready(function () {
    $('.theme-login').click(function(){
        $('.theme-popover-mask').fadeIn(100);
        $('.theme-popover').slideDown(200);
    })
    $('.theme-poptit .close').click(function(){
        $('.theme-popover-mask').fadeOut(100);
        $('.theme-popover').slideUp(200);
    })
});

function search() {
    var search = $('#search_input').val();
    // alert(search);
    window.location="/icourse/public/search/"+search;
}