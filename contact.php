<!DOCTYPE html>
<html>
<head>
<title>Prueba de Formulario</title>
</head>
<body>

<div class="col-md-8" id="divMain">

    <h1>Contactenos</h1>
    <h3 style="color:#8EB037;"><?php echo @$_GET['msg'];?></h3>
    <hr/>
 <!--Comienzo del formulario. Este ejemplo es con PHPMAILER y XAMPP-->                                                  
    <form name="formulario" method="post" action="envio.php" class="form-horizontal" role="form" ">
        <div class="form-group">
            <label for="inputName" class="col-md-2 control-label" style="text-align:left;">Nombre</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Nombre Completo"required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail1" class="col-md-2 control-label" style="text-align:left;">Email</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="ejemplo@dominio.com" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="inputSubject" class="col-md-2 control-label" style="text-align:left;">Asunto</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Asunto"required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword1" class="col-md-2 control-label" style="text-align:left;">Mensaje</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Escriba el mensaje..."required="required"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-primary pull-right" value="submit" name="submit" >
                    Enviar
                </button>
            </div>
        </div>
    </form>  
 <!--Fin del Formulario -->            
</div>

</body>
</html>