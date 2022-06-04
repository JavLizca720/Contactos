<?php

class ContactoDto{
    private $id= 0;
    private $nombres= "";
    private $apellidos= "";
    private $email= "";

    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }

    function getEmail(){
        
        return $this->email;
    }

    function getCategoria(){
        
        return $this->categoria;
    }


    function setId($id){
         $this->id = $id;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function setApellidos($apellidos){
    $this->apellidos = $apellidos;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setCategoria($categoria){
    $this->categoria = $categoria;
    }

}