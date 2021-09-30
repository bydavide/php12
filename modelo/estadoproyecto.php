<?php
namespace model;

class estadoproyecto{

private $idestadoproyecto;
private $descripcion;

    /**
     * @return mixed
     */
    public function getIdestadoproyecto()
    {
        return $this->idestadoproyecto;
    }

    /**
     * @param mixed $idestadoproyecto
     */
    public function setIdestadoproyecto($idestadoproyecto)
    {
        $this->idestadoproyecto = $idestadoproyecto;
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