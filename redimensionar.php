<?php $tipo = isset($_GET[tipo])?$_GET[tipo]:'w960-h768'; ?>
<html>
    <head>
        <title>Redimensionados</title>
        <style type="text/css">
            *{padding: 0;margin: 0;}
            html, body{background-color: #FFF;}
            #box{background-color: #000;width:100%;}
            iframe{overflow:auto;position: relative;display: block;margin: 0 auto;background-color: #FFF;}
            .botonera{position: fixed;bottom:0;left:50%;margin:0 0 0 -250px;text-align: center;width: 500px;padding: 10px 0;}
            a{color: #000;text-decoration: none;font-size: 17px;padding: 0 5px;}
            a.sel{font-weight: bold;color:red;}
        </style>
    </head>

    <div id="box">
        <iframe src="index.html" frameborder="0"></iframe>
    </div>

    <div class="botonera">
        <a href="redimensionar.php?tipo=w320-h480" class="w320-h480">320</a>
        <a href="redimensionar.php?tipo=w480-h320" class="w480-h320">480</a>
        <a href="redimensionar.php?tipo=w600-h400" class="w600-h400">600</a>
        <a href="redimensionar.php?tipo=w800-h600" class="w800-h600">800</a>
        <a href="redimensionar.php?tipo=w960-h768" class="w960-h768">960</a>
        <a href="redimensionar.php?tipo=w1200-768" class="w1200-768">1200</a>
        <a href="redimensionar.php?tipo=w1400-h800" class="w1400-h800">1400</a>
        <a href="redimensionar.php?tipo=w1600-h900" class="w1600-h900">1600</a>
    </div>

    <script type="text/javascript" src="js/libs/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            var splits = '<?php echo $tipo; ?>'.toString().split("-");
            var width = splits[0].replace('w','');
            var height = splits[1].replace('h','');
            $('.<?php echo $tipo; ?>').addClass('sel');
            $('iframe').attr('src','index.html?' + Math.random()).css('width', width + 'px').css('height', height + 'px');

        });
    </script>
</html>