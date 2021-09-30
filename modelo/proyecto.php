<?php
namespace moselo;

class proyecto{

    private $idproyecto;
private $descripcion;
private $costo;
private $fehainicio;
private $fechafinalizado;
private $id_cliente;
private $id_tecnico;
private $fk_estadoProyecto;

    /**
     * @return mixed
     */
    public function getIdproyecto()
    {
        return $this->idproyecto;
    }

    /**
     * @param mixed $idproyecto
     */
    public function setIdproyecto($idproyecto)
    {
        $this->idproyecto = $idproyecto;
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
        return $this->costo;
    }

    /**
     * @param mixed $costo
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    /**
     * @return mixed
     */
    public function getFehainicio()
    {
        return $this->fehainicio;
    }

    /**
     * @param mixed $fehainicio
     */
    public function setFehainicio($fehainicio)
    {
        $this->fehainicio = $fehainicio;
    }

    /**
     * @return mixed
     */
    public function getFechafinalizado()
    {
        return $this->fechafinalizado;
    }

    /**
     * @param mixed $fechafinalizado
     */
    public function setFechafinalizado($fechafinalizado)
    {
        $this->fechafinalizado = $fechafinalizado;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param mixed $id_cliente
     */
    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    /**
     * @return mixed
     */
    public function getIdTecnico()
    {
        return $this->id_tecnico;
    }

    /**
     * @param mixed $id_tecnico
     */
    public function setIdTecnico($id_tecnico)
    {
        $this->id_tecnico = $id_tecnico;
    }

    /**
     * @return mixed
     */
    public function getFkEstadoProyecto()
    {
        return $this->fk_estadoProyecto;
    }

    /**
     * @param mixed $fk_estadoProyecto
     */
    public function setFkEstadoProyecto($fk_estadoProyecto)
    {
        $this->fk_estadoProyecto = $fk_estadoProyecto;
    }


}