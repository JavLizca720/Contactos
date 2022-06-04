<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Modificar contacto</title>
</head>
<body>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <?php 
    require 'modelo.dao/ContactoDao.php';
    require 'modelo.dto/ContactoDto.php';
    require 'utilidades/conexion.php';
    if($_GET['id']!=NULL){
        $cDao = new ContactoDao();
        $contacto = $cDao->obtenerContacto($_GET['id']);
    }
    ?>
     <h1 class="lead text-center"> <b> Modificar Datos del  Usuario </b>  </h1>    
     <form action="controladores/controlador.contactos.php" method="POST">
<h3 class="text" >Modificar contacto</h3>
<label for="" >Nombres</label>
<input type="text" name="nombre" required value="<?php echo $contacto['nombres'];?>" class="form-control"> <br>
<label for="" >Apellidos</label>
<input type="text" name="apellidos" required value="<?php echo $contacto['apellidos'];?>" class="form-control"> <br>
<label for="">Celular</label>
<input type="text" name="id" required value="<?php echo $contacto['id'];?>" class="form-control"> <br>
<label for="" >Correo</label>
<input type="text" name="email" required value="<?php echo $contacto['email'];?>" class="form-control"> <br>
<label for="" >Categoria</label>
<input type="text" name="categoria" required value="<?php echo $contacto['categoria'];?>" class="form-control"> <br>

<input type="submit" name="modificar" id="modificar" value="Modificar" class="btn btn-danger">
</form>
    </div>
 <div class="col-md-4"></div>
    </div>

    
</body>
</html>