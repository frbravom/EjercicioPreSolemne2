<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipoCamp
 *
 * @author cetecom
 */
class EquipoCamp {
    //put your code here
    private $idEquipoCamp;
    private $idEquipo;
    private $idCampeonato;
    private $pGanados;
    private $pEmpatados;
    private $pPerdidos;
    private $gAFavor;
    private $gEnContra;
    
    function __construct($idEquipoCamp, $idEquipo, $idCampeonato, $pGanados, $pEmpatados, $pPerdidos, $gAFavor, $gEnContra) {
        $this->idEquipoCamp = $idEquipoCamp;
        $this->idEquipo = $idEquipo;
        $this->idCampeonato = $idCampeonato;
        $this->pGanados = $pGanados;
        $this->pEmpatados = $pEmpatados;
        $this->pPerdidos = $pPerdidos;
        $this->gAFavor = $gAFavor;
        $this->gEnContra = $gEnContra;
    }

    function getIdEquipoCamp() {
        return $this->idEquipoCamp;
    }

    function getIdEquipo() {
        return $this->idEquipo;
    }

    function getIdCampeonato() {
        return $this->idCampeonato;
    }

    function getPGanados() {
        return $this->pGanados;
    }

    function getPEmpatados() {
        return $this->pEmpatados;
    }

    function getPPerdidos() {
        return $this->pPerdidos;
    }

    function getGAFavor() {
        return $this->gAFavor;
    }

    function getGEnContra() {
        return $this->gEnContra;
    }

    function setIdEquipoCamp($idEquipoCamp) {
        $this->idEquipoCamp = $idEquipoCamp;
    }

    function setIdEquipo($idEquipo) {
        $this->idEquipo = $idEquipo;
    }

    function setIdCampeonato($idCampeonato) {
        $this->idCampeonato = $idCampeonato;
    }

    function setPGanados($pGanados) {
        $this->pGanados = $pGanados;
    }

    function setPEmpatados($pEmpatados) {
        $this->pEmpatados = $pEmpatados;
    }

    function setPPerdidos($pPerdidos) {
        $this->pPerdidos = $pPerdidos;
    }

    function setGAFavor($gAFavor) {
        $this->gAFavor = $gAFavor;
    }

    function setGEnContra($gEnContra) {
        $this->gEnContra = $gEnContra;
    }


    
}
