<?php

namespace services;

use modelo\administrador;
use modelo\cliente;
use modelo\tecnico;
use modelo\tipodocumento;

use \services\conexionbd;
use \PDO;

class Usuario
{

    public function consultarTodos(): array
    {
        $sql = "SELECT * FROM usuarios u INNER JOIN tiposdocumentos tc ON tc.id = u.idtipodocumento";
        $conn = ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $usuarios = array();
        if ($pdoStatement->execute()) {
            while ($datoFila = $pdoStatement->fetch(PDO::FETCH_OBJ)) {
                array_push($usuarios, $this->construitObjPersona($datoFila));
            }
        } else {
            print_r($pdoStatement->errorInfo());
        }
        ConexionDB::close();
        return $usuarios;
    }

    private function construitObjPersona($datoFila): Persona
    {
        $persona = new Persona();
        $persona->setId($datoFila->id);
        $persona->setTipoDocumento($this->construirObjTipoDocumento($datoFila));
        $persona->setNombres($datoFila->nombres);
        $persona->setApellidos($datoFila->apellidos);
        $persona->setCorreo($datoFila->nombres);
        $persona->setNombreUsuario($datoFila->nombre_usuario);
        $persona->setClave($datoFila->clave);
        return $persona;
    }

    private function construirObjTipoDocumento($datoFila): TipoDocumento
    {
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->setId($datoFila->tipo_documento_id);
        $tipoDocumento->setSigla($datoFila->sigla);
        $tipoDocumento->setTipo($datoFila->tipo);
        return $tipoDocumento;
    }


    public function registrarUsuario(Usuario $usuario)
    {
        try {
            $conn = ConexionDB::getConn();
            $conn->beginTransaction();
            $idPersona = $this->registrarPersona($Usuario);
            if ($idPersona) {
                $sql = "INSERT INTO usuarios(id,nombres,apellidos,correo,telefono,contraseña,numerodocumento,fk_tipodocumento) VALUES(:ID,:NUM,:POS,:EQU)";
                $conn = ConexionDB::getConn();
                $pdoStatement = $conn->prepare($sql);
                $pdoStatement->bindValue(":ID", $idUsuario);
                $pdoStatement->bindValue(":NUM", $Usuario->getNumero());
                $pdoStatement->bindValue(":POS", $$Usuario>getPosicion());
                $pdoStatement->bindValue(":EQU", $$Usuario->getEquipo());
                if ($pdoStatement->execute()) {
                    $conn->commit();
                } else {
                    print_r($pdoStatement->errorInfo());
                    $conn->rollBack();
                }
            } else {
                echo "No se registró la persona: ". $idPersona;
                $conn->rollBack();
            }
        } catch (\Exception $e) {
            echo $e->getCode() ." - " . $e->getMessage() . "...... ". $e->getTraceAsString();
            ConexionDB::getConn()->rollBack();
        } finally {
            ConexionDB::close();
        }
    }



    private function registrarPersona(Persona $persona)
    {
        $sql = "INSERT INTO usuarios(tipo_documento_id,numero_documento,nombres,apellidos,correo,nombre_usuario,clave) VALUES(:TD,:NUM_DOC,:NOM,:APE,:CORREO,:NOM_USU,:CLV)";
        $conn = ConexionDB::getConn();
        $pdoStatement = $conn->prepare($sql);
        $pdoStatement->bindValue(":TD", $persona->getTipoDocumento());
        $pdoStatement->bindValue(":NUM_DOC", $persona->getNumeroDocumento());
        $pdoStatement->bindValue(":NOM", $persona->getNombres());
        $pdoStatement->bindValue(":APE", $persona->getApellidos());
        $pdoStatement->bindValue(":CORREO", $persona->getCorreo());
        $pdoStatement->bindValue(":NOM_USU", $persona->getNombreUsuario());
        $pdoStatement->bindValue(":CLV", $persona->getClave());
        if (!$pdoStatement->execute()) {
            print_r($pdoStatement->errorInfo());
            return null;
        }
        return $conn->lastInsertId();
    }

    private function lastInsertId()
    {

    }


}