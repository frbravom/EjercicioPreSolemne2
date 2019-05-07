<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Equipo
 *
 * @author cetecom
 */
class Equipo {
    //put your code here
    private $idEquipo;
    private $codigoEquipo;
    private $descripcionEquipo;
    
    function __construct($idEquipo, $codigoEquipo, $descripcionEquipo) {
        $this->idEquipo = $idEquipo;
        $this->codigoEquipo = $codigoEquipo;
        $this->descripcionEquipo = $descripcionEquipo;
    }

    function getIdEquipo() {
        return $this->idEquipo;
    }

    function getCodigoEquipo() {
        return $this->codigoEquipo;
    }

    function getDescripcionEquipo() {
        return $this->descripcionEquipo;
    }

    function setIdEquipo($idEquipo) {
        $this->idEquipo = $idEquipo;
    }

    function setCodigoEquipo($codigoEquipo) {
        $this->codigoEquipo = $codigoEquipo;
    }

    function setDescripcionEquipo($descripcionEquipo) {
        $this->descripcionEquipo = $descripcionEquipo;
    }


    
}
