<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tcc
 *
 * @author junin
 */
class tcc
{

    public $idTcc;
    public $tituloTcc;
    public $idOrientando;
    public $idOrientador;
    public $idAvaliadoUm;
    public $idAvaliadoDois;

    function __construct($idTcc, $tituloTcc, $idOrientando, $idOrientador, $idAvaliadoUm, $idAvaliadoDois)
    {
        $this->idTcc = $idTcc;
        $this->tituloTcc = $tituloTcc;
        $this->idOrientando = $idOrientando;
        $this->idOrientador = $idOrientador;
        $this->idAvaliadoUm = $idAvaliadoUm;
        $this->idAvaliadoDois = $idAvaliadoDois;
    }
    function getIdTcc()
    {
        return $this->idTcc;
    }

    function getTituloTcc()
    {
        return $this->tituloTcc;
    }

    function getIdOrientando()
    {
        return $this->idOrientando;
    }

    function getIdOrientador()
    {
        return $this->idOrientador;
    }

    function getIdAvaliadoUm()
    {
        return $this->idAvaliadoUm;
    }

    function getIdAvaliadoDois()
    {
        return $this->idAvaliadoDois;
    }

    function setIdTcc($idTcc)
    {
        $this->idTcc = $idTcc;
    }

    function setTituloTcc($tituloTcc)
    {
        $this->tituloTcc = $tituloTcc;
    }

    function setIdOrientando($idOrientando)
    {
        $this->idOrientando = $idOrientando;
    }

    function setIdOrientador($idOrientador)
    {
        $this->idOrientador = $idOrientador;
    }

    function setIdAvaliadoUm($idAvaliadoUm)
    {
        $this->idAvaliadoUm = $idAvaliadoUm;
    }

    function setIdAvaliadoDois($idAvaliadoDois)
    {
        $this->idAvaliadoDois = $idAvaliadoDois;
    }


}