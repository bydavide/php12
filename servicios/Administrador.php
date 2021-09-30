<?php
 require_once "Usuario.php";
 
class Administrador extends Usuario{

private $cargo;

public function getCargo (){
    return $this->cargo;
}

public function setCargo(){
    $this->cargo=$cargo;
}
}
