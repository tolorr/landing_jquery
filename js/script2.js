/* Author:
    Embat
    http://embat.es
*/
(function($) {

    $(document).ready( function() {

        var form = false;
        $('a.info').click(function(){
            if(form){
                $('html,body').removeClass('no-overflow');
                $('#tapa').fadeOut('fast');
                $('#form').fadeOut('fast');
                form = false;
            } else {
                $('html,body').addClass('no-overflow');
                $('#tapa').fadeIn('fast');
                $('#form').fadeIn('fast');
                form = true;
            }
        });

        $('#tapa').click(function(){
            $('html,body').removeClass('no-overflow');
            $('#tapa').fadeOut('fast');
            $('#form').fadeOut('fast');
        });

        $('#form').submit(function(){

            $('.alertas').remove();

            if($('#nombre').val() == '' || $('#nombre').val() == 'Nombre'){
                $('#form').append('<p class="alertas fail">Debes escribir tu nombre</p>');
            }

            if($('#email').val() == '' || $('#email').val() == 'Email'){
                $('#form').append('<p class="alertas fail">Debes escribir tu email</p>');
            } else {
                if(!validarEmail($('#email').val())){
                    $('#form').append('<p class="alertas fail">Email inválido</p>');
                }
            }

            if(validarEmail($('#email').val()) && $('#nombre').val() != ''){

                $.ajax({
                    type: 'POST',
                    data: "email=" + $('#email').val() + "&nombre=" + $('#nombre').val(),
                    url: 'http://localhost/landing_jquery/send2.php',
                    success: function(data) {
                        $('#form').html(data);
                    }
                });

            }

            return false;

        });

    });

})(jQuery);

function validarEmail(email){
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        return true;
    }
    return false;
}