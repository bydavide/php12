<?php
 namespace  modelo;

 class Usuario {


 private $id;
 private $nombres;
 private $apellidos;
 private $correo;
 private $telefono;

     /**
      * @return mixed
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param mixed $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * @return mixed
      */
     public function getNombres()
     {
         return $this->nombres;
     }

     /**
      * @param mixed $nombres
      */
     public function setNombres($nombres)
     {
         $this->nombres = $nombres;
     }

     /**
      * @return mixed
      */
     public function getApellidos()
     {
         return $this->apellidos;
     }

     /**
      * @param mixed $apellidos
      */
     public function setApellidos($apellidos)
     {
         $this->apellidos = $apellidos;
     }

     /**
      * @return mixed
      */
     public function getCorreo()
     {
         return $this->correo;
     }

     /**
      * @param mixed $correo
      */
     public function setCorreo($correo)
     {
         $this->correo = $correo;
     }

     /**
      * @return mixed
      */
     public function getTelefono()
     {
         return $this->telefono;
     }

     /**
      * @param mixed $telefono
      */
     public function setTelefono($telefono)
     {
         $this->telefono = $telefono;
     }

     /**
      * @return mixed
      */
     public function getContraseña()
     {
         return $this->contraseña;
     }

     /**
      * @param mixed $contraseña
      */
     public function setContraseña($contraseña)
     {
         $this->contraseña = $contraseña;
     }

     /**
      * @return mixed
      */
     public function getNumerodocumento()
     {
         return $this->numerodocumento;
     }

     /**
      * @param mixed $numerodocumento
      */
     public function setNumerodocumento($numerodocumento)
     {
         $this->numerodocumento = $numerodocumento;
     }

     /**
      * @return mixed
      */
     public function getFkTipodocumento()
     {
         return $this->fk_tipodocumento;
     }

     /**
      * @param mixed $fk_tipodocumento
      */
     public function setFkTipodocumento($fk_tipodocumento)
     {
         $this->fk_tipodocumento = $fk_tipodocumento;
     }
 private $contraseña;
 private $numerodocumento;
 private $fk_tipodocumento;

 }
