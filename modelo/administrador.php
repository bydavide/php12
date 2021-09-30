<?php

namespace administrador;

class administrador{

private $idadministrador;
private $especialidad;
private $id_usuario;

    /**
     * @return mixed
     */
    public function getIdadministrador()
    {
        return $this->idadministrador;
    }

    /**
     * @param mixed $idadministrador
     */
    public function setIdadministrador($idadministrador)
    {
        $this->idadministrador = $idadministrador;
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