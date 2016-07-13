<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Ventana Modal</title>
        <link rel="stylesheet" href="public/css/bootstrap.min.css"  /> 
        <link rel="stylesheet" href="public/fancybox/jquery.fancybox.css" />
    </head>
    <body>
    <!--modal-->
    <div id="modal"></div>
    <!--/modal-->
        <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Ventana Modal con Fancybox</h3>
              </div>
              <div class="panel-body">
                <ul>
                    <li>
                        <a href="public/images/koala.jpg" class="fancybox">
                        <img src="public/images/koala.jpg" width="100" height="100" />
                        </a>
                        <hr />
                    </li>
                    <li><a href="ajax_2.php?id=23" class="fancybox fancybox.ajax">Con Ajax</a></li>
                </ul>
              </div>
            </div>
        </div>
        
    <script src="public/js/jquery-1.10.2.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/funciones.js"></script>
    <script type="text/javascript" src="public/fancybox/jquery.fancybox.js"></script>
 <script type="text/javascript">
$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
    
});
</script>
    </body>
</html>
