<?php
require '../modelo.dao/ContactoDao.php';
require '../modelo.dto/ContactoDto.php';
require '../utilidades/conexion.php'; 

if(isset($_POST['registro'])){
$cDao = new ContactoDao();
$cDto = new ContactoDto(); 
$cDto->setId($_POST['id']);
$cDto->setNombre($_POST['nombre']);
$cDto->setApellidos($_POST['apellidos']);
$cDto->setEmail($_POST['email']);
$cDto->setCategoria($_POST['categoria']);

$mensaje = $cDao->registrarContacto($cDto);

header("Location:../index.php?mensaje=".$mensaje); 
}
else if ($_GET['id']!=NULL){
    $cDao = new ContactoDao();
    $mensaje = $cDao->eliminarContacto($_GET['id']);
    header("Location:../index.php?mensaje=".$mensaje);
}
else if (isset($_POST['modificar'])){
    $cDao = new ContactoDao();
    $cDto = new ContactoDto();
    $cDto->setId($_POST['id']);
    $cDto->setNombre($_POST['nombre']);
    $cDto->setApellidos($_POST['apellidos']);
    $cDto->setEmail($_POST['email']);
    $cDto->setCategoria($_POST['categoria']);

    $mensaje = $cDao->modificarContacto($cDto);
    header("Location: ../index.php?mensaje=".$mensaje);

}


?>
