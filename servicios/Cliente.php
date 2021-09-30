<?php
require_once "Usuario.php";

class Cliente extends Usuario{

    private $direccion;

    public function getDireccion (){
        return $this->direccion;
    }
    
    public function setDireccion(){
        $this->direccion=$direccion;
    }
}

