<?php
require_once "Usuario.php";

class Tecnico extends Usuario {

    private $especialidad;
    
    public function getEspecialidad (){
        return $this->especialidad;
    }
    
    public function setEspecialidad(){
        $this->especialidad=$especialidad;
    }

}



