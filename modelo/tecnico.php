<?php
namespace  modelo;

class tecnico{

    private $idtecnico;
    private $especialidad;
    private $fk_idespecialidad;
    private $id_usuario;

    /**
     * @return mixed
     */s
    public function getIdtecnico()
    {
        return $this->idtecnico;
    }

    /**
     * @param mixed $idtecnico
     */
    public function setIdtecnico($idtecnico)
    {
        $this->idtecnico = $idtecnico;
    }

    /**
     * @return mixed
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * @param mixed $especialidad
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }

    /**
     * @return mixed
     */
    public function getFkIdespecialidad()
    {
        return $this->fk_idespecialidad;
    }

    /**
     * @param mixed $fk_idespecialidad
     */
    public function setFkIdespecialidad($fk_idespecialidad)
    {
        $this->fk_idespecialidad = $fk_idespecialidad;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
}