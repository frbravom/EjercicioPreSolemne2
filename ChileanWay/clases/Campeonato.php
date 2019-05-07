<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Campeonato
 *
 * @author cetecom
 */
class Campeonato {

    private $idCampeonato;
    private $codigoCampeonato;
    private $nombre;
    private $fechaInicio;
    private $fechaTermino;
    private $cantidadPartidos;

    function __construct($idCampeonato, $codigoCampeonato, $nombre, $fechaInicio, $fechaTermino, $cantidadPartidos) {
        $this->idCampeonato = $idCampeonato;
        $this->codigoCampeonato = $codigoCampeonato;
        $this->nombre = $nombre;
        $this->fechaInicio = $fechaInicio;
        $this->fechaTermino = $fechaTermino;
        $this->cantidadPartidos = $cantidadPartidos;
    }

    function getIdCampeonato() {
        return $this->idCampeonato;
    }

    function getCodigoCampeonato() {
        return $this->codigoCampeonato;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechaInicio() {
        return $this->fechaInicio;
    }

    function getFechaTermino() {
        return $this->fechaTermino;
    }

    function getCantidadPartidos() {
        return $this->cantidadPartidos;
    }

    function setIdCampeonato($idCampeonato) {
        $this->idCampeonato = $idCampeonato;
    }

    function setCodigoCampeonato($codigoCampeonato) {
        $this->codigoCampeonato = $codigoCampeonato;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
    }

    function setFechaTermino($fechaTermino) {
        $this->fechaTermino = $fechaTermino;
    }

    function setCantidadPartidos($cantidadPartidos) {
        $this->cantidadPartidos = $cantidadPartidos;
    }

    /**
     * Inicio CRUD
     */
    
    //Leer Datos
    function LeerDatos() {
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('select idcampeonato,
                                        codigo,
                                        nombre,
                                        fechainicio,
                                        fechatermino,
                                        cantidadpartidos
                                 from campeonato');
        
        $PDOst->execute(array());

        if ( $row=$PDOst->fetch(PDO::FETCH_OBJ)){
            $this->idcampeonato=$row->idcampeonato;
            $this->codigoCampeonato=$row->codigo;
            $this->nombre=$row->nombre;
            $this->fechainicio=$row->fechainicio;
            $this->fechatermino=$row->fechatermino;
            $this->cantidadpartidos=$row->cantidadpartidos;
            return true;
        }
        else{
             return false;   
        }
    }

}
