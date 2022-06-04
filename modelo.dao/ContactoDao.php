<?php
class ContactoDao{
  
    public function registrarContacto(ContactoDto $contactoDto){
    $cnn = Conexion::getConexion();
    $mensaje = ""; 
    try{
        $query = $cnn->prepare("INSERT INTO contactos values (?,?,?,?,?)");
        $query->bindParam(1, $contactoDto->getId());
        $query->bindParam(2, $contactoDto->getNombre());
        $query->bindParam(3, $contactoDto->getApellidos());
        $query->bindParam(4, $contactoDto->getEmail());
        $query->bindParam(5, $contactoDto->getCategoria());

        $query->execute();
        $mensaje =" Contacto guardado" ;  
    } catch (Exception $ex){
        $mensaje = $ex->getMessage();
    }

    $cnn= null;
    return $mensaje;
}

// modificar contacto
public function modificarContacto(ContactoDto $contactoDto){

$cnn = Conexion::getConexion();
$mensaje = "";
try{
    $query = $cnn->prepare("UPDATE contactos SET nombres=?, apellidos=?, email=?, categoria=? WHERE id=?");
    $query->bindParam(1, $contactoDto->getNombre());
    $query->bindParam(2, $contactoDto->getApellidos());
    $query->bindParam(3, $contactoDto->getEmail());
    $query->bindParam(4, $contactoDto->getCategoria());
    $query->bindParam(5, $contactoDto->getId());
    $query->execute();
    $mensaje = "Contacto Actualizado"; 
} catch (Exception $ex){
    $mensaje = $ex->getMessage();
}
$cnn=null;
return $mensaje;
}

// obtener contacto 
public function obtenerContacto($id){
    $cnn = Conexion::getConexion();
    $mensaje = "";
    try{
        $query = $cnn->prepare('SELECT * FROM contactos WHERE id = ?');
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch(); 
    } catch (Exception $ex){
        echo 'Error'.$ex->getMessage();
    }
    $cnn=null;
    return $mensaje; 
}

## eliminar Usuario 

public function eliminarContacto($id){
    $cnn = Conexion::getConexion();
    $mensaje = "";
    try{
        $query = $cnn->prepare("DELETE FROM contactos WHERE id = ?");
        $query->bindParam(1, $id);
        $query->execute();
        $mensaje = "Contacto Eliminado";
    }catch (Exception $ex){
        $mensaje = $ex->getMessage();
    }
    return $mensaje; 
}

## listar todos 

public function listarTodos(){
    $cnn = Conexion::getConexion();
try{
    $listarContactos = 'SELECT * FROM contactos'; 
    $query = $cnn->prepare($listarContactos);
    $query->execute();
    return $query->fetchAll();
}catch (Exception $ex){
    echo 'Error'.$ex->getMessage();
}

}
}




?>