<?php
namespace  modelo;

class tipodoumento{

   private $idtipodocumento;
   private $descripcion;

    /**
     * @return mixed
     */
    public function getIdtipodocumento()
    {
        return $this->idtipodocumento;
    }

    /**
     * @param mixed $idtipodocumento
     */
    public function setIdtipodocumento($idtipodocumento)
    {
        $this->idtipodocumento = $idtipodocumento;
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
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}