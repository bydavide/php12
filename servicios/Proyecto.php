<?php

require_once "Tecnico.php";
require_once "Cliente.php";

class Proyecto{

    private $fechaInicio;
    private $fechaFinal;
    private $descripcion;
    private $Costo;
    private $espado;

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * @param mixed $fechaInicio
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    /**
     * @return mixed
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * @param mixed $fechaFinal
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;
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

    /**
     * @return mixed
     */
    public function getCosto()
    {
        return $this->Costo;
    }

    /**
     * @param mixed $Costo
     */
    public function setCosto($Costo)
    {
        $this->Costo = $Costo;
    }

    /**
     * @return mixed
     */
    public function getEspado()
    {
        return $this->espado;
    }

    /**
     * @param mixed $espado
     */
    public function setEspado($espado)
    {
        $this->espado = $espado;
    }


}