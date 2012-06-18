/* Author:

*/
$(document).ready(function() {

    var form = false;
    $('a.info').click(function(){
        if(form){
            $('#form').fadeOut('fast');
            $('a.info').removeClass('sel');
            form = false;
        } else {
            $('#form').fadeIn('fast');
            $('a.info').addClass('sel');
            form = true;
        }
    });

});