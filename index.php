<?php 
include('utilidades/head.php'); 
?>
<body class= "container">
    <br><br><br>
<button id="btnRegistro">Registrar</button>
<center>
<table class="table table-striped mt-4" border="1" >
<thead>
    <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Celular</th>
    <th>Correo</th>
    <th>Categoria</th>
    <th>Modificar</th>
    <th>Eliminar</th>
   </tr>
</thead>
<tbody>
<?php 
require 'modelo.dao./ContactoDao.php';
require 'modelo.dto./ContactoDto.php';
require 'utilidades./conexion.php';
$cDao = new ContactoDao();
$allcontacts = $cDao->listarTodos(); 
foreach($allcontacts as $contacts){ ?>

<tr>
    <td> <?php echo $contacts['nombres'];?></td>
    <td> <?php echo $contacts['apellidos'];?></td>
    <td> <?php echo $contacts['id'];?></td>
    <td> <?php echo $contacts['email'];?></td>
    <td> <?php echo $contacts['categoria'];?></td>
    <td> <a href="modificar.php?id=<?php echo $contacts['id']; ?>"> <img src="img/edit.png" width ="48" class="img-thumbnail" height = "48" alt="Modificar Registro "></a></td>
    <td><a href="controladores/controlador.contactos.php?id=<?php echo $contacts['id'];?>
    " onclick ="return confirmar();"><img src="img/delete.png" width="48" height="48" class="img-thumbnail" alt="Eliminar Registro"></a></td>
</tr>
<?php
}

?>

</tbody>
</table>
</center>

<?php 
if (isset($_GET['mensaje'])){
    ?>
<div class="row"> <br><br>
<div class="col-md-6"></div>
<div class="col-md-4 text-center"><h4><?php echo $mensaje = $_GET['mensaje']?></h4></div>
<div class="col-md-5"></div>
</div>

<?php
}
?>

<!-- <div class=" btn btn-warning"><a href="registro.php" >Registrarse</a></div>   -->
<div id="modalRegistro" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="row">
<div class="col-md-4 "></div>
<div class="col-md-4 ">
<form action="controladores/controlador.contactos.php" method="POST">
<h3 class="text" >Registro</h3>
<label for="">Nombres</label>
<input type="text" name="nombre" required class="form-control"><br>
<label for="" >Apellidos</label>
<input type="text" name="apellidos" required class="form-control"><br>
<label for="" >Celular</label>
<input type="number" name="id" required class="form-control"><br>
<label for="" >Correo</label>
<input type="text" name="email" required class="form-control"><br>
<label for="" >Categoria</label>
<input type="text" name="categoria" required class="form-control"><br>

<input type="submit" name="registro" id="registro" value="Registrarse" class="btn btn-primary">
<a href="index.php" class="btn btn-info ">Inicio</a>

</form>
</div>
<div class="col-md-4 mt-4"></div>

</div>
  </div>

</div>
</body>
<?php 
include('utilidades/footer.php'); 
?>
</html>