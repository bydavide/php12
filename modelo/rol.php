<?php
 namespace modelo;

 class rol{

     private $idrol;
     private $descripcion;

     /**
      * @return mixed
      */
     public function getIdrol()
     {
         return $this->idrol;
     }

     /**
      * @param mixed $idrol
      */
     public function setIdrol($idrol): void
     {
         $this->idrol = $idrol;
     }

     /**
      * @return mixed
      */
     public function getDescripcion()
     {
         return $this->descripcion;
     }

     /**
      * @param mixed $descripcion
      */
     public function setDescripcion($descripcion): void
     {
         $this->descripcion = $descripcion;
     }


 }