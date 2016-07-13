<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Ventana Modal</title>
        <link rel="stylesheet" href="public/css/bootstrap.min.css"  /> 
    </head>
    <body>
    <!--modal-->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ventana normal</h4>
      </div>
      <div class="modal-body">
        <h1>Texto #manosenelcódigo</h1>
      </div>
      <div class="modal-footer">
            <h4>pie de página</h4>
      </div>
    </div>
  </div>
</div>
<!--/modal-->
        <div class="container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Ventana Modal con Bootstrap</h3>
              </div>
              <div class="panel-body">
                <ul>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#modal">Normal</a></li>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#modal" onclick="carga_ajax('12','modal','ajax_1.php');">Con Ajax</a></li>
                </ul>
              </div>
            </div>
        </div>
        
    <script src="public/js/jquery-1.10.2.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/funciones.js"></script>
    </body>
</html>
